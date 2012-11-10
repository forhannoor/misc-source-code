/****************************************************************
 **                     Connect 4                              **
 **               Implemented for AI class                     **
 **                                                            **
 ****************************************************************/


#include <iostream>
#include <stack>

#define BOARD_WIDTH 7
#define BOARD_HEIGHT 6
#define BLANK -1

using namespace std;


typedef struct
{
    int x;          /* index i */
    int y;          /* index j */
    int score;      /* evaluation score for this state */
} game_state;

stack <game_state> states;
int filled_counter=42;                  /* keeps the number of fields left BLANK */
void initialize();                      /* initializes the board */
int board[BOARD_HEIGHT][BOARD_WIDTH];   /* connect4 board */
int players[2]={0,1};
int win_check(int player);	            /* checks for winning move and determines who won */
bool game_won();
void print_board();                     /* prints the board */
bool is_tie();                          /* checks if game is tie */
int drop_chip(int player, int col);     /* drops a chip in a column if available */
void game_playing();
void announce_winner(int p);            /* announces game result */
void take_move(int p);
void human_move();
void computer_move();
int evaluator();                        /* evaluates game state */
void test();                            /* test purpose data initialization */
void generate_moves();                  /* generates moves */
int score[BOARD_HEIGHT][BOARD_WIDTH];
void print_score();
int getScore();
int max_score=1000000;
int invalid_score=999999;
int alpha_beta(int player, int alpha=-invalid_score, int beta=invalid_score, int depth=0);
int last_x;
int last_y;
void undo(int i=last_x, int j=last_y);  /* undo the last move */
void print_states();
int evaluate(int player, int level=0, int alpha=-invalid_score, int beta=invalid_score);


int drop_chip(int player, int col)
{
    int status=0;   /* 0 => failed, 1=> success */

    for(int i=BOARD_HEIGHT-1; i>=0; i--)
        if(board[i][col-1]==BLANK && status==0)
        {
            board[i][col-1]=player;
            filled_counter-=1;
            last_x=i;
            last_y=col-1;
            status=1;
        }

    return status;
}


int win_check(int player)
{
    for(int row=0; row<BOARD_HEIGHT; row++)
        for(int col=0; col<BOARD_WIDTH; col++)
        {
            /* checks horizontally */
            if(col+3<BOARD_WIDTH)
                if(board[row][col]==player && board[row][col+1]==player && board[row][col+2]==player && board[row][col+3]==player)
                    return player;


            /* checks vertically */
            if(row+3<BOARD_HEIGHT)
                if(board[row][col]==player && board[row+1][col]==player && board[row+2][col]==player && board[row+3][col]==player)
                    return player;

            /* checks ascending diagonals */
            if(row+3<BOARD_HEIGHT && col+3<BOARD_WIDTH)
                if(board[row][col]==player && board[row+1][col+1]==player && board[row+2][col+2]==player && board[row+3][col+3]==player)
                    return player;

            /* checks descending diagonals */
            if(row-3>=0 && col+3<BOARD_WIDTH)
                if(board[row][col]==player && board[row-1][col+1]==player && board[row-2][col+2]==player && board[row-3][col+3]==player)
                    return player;
        }

    return -1;
}


bool game_won()
{
    if(win_check(0)==0 || win_check(1)==1)
        return true;

    else
        return false;
}


void print_board()
{
    cout<<endl;
    cout<<" - - - - - - - - - - - - - - "<<endl;

    for(int i=0; i<BOARD_HEIGHT; i++)
        for(int j=0; j<BOARD_WIDTH; j++)
        {
            cout<<"| ";

            if(board[i][j]==BLANK)
                cout<<"- ";

            else if(board[i][j]==1)
                cout<<"X ";

            else if(board[i][j]==0)
                cout<<board[i][j]<<" ";

            if(j==6)
                cout<<endl;         /* prints new line at the end of each row */
        }

    cout<<" - - - - - - - - - - - - - - "<<endl;
    cout<<"  1   2   3   4   5   6   7 "<<endl;
    cout<<endl;
}


void initialize()
{
    for(int i=0; i<BOARD_HEIGHT; i++)
        for(int j=0; j<BOARD_WIDTH; j++)
            board[i][j]=BLANK;

    for(int i=0; i<BOARD_HEIGHT; i++)
        for(int j=0; j<BOARD_WIDTH; j++)
            score[i][j]=0;
}


bool is_tie()
{
    int counter=0;

    for(int i=0; i<6; i++)
        for(int j=0; j<7; j++)
            if(board[i][j]==BLANK)
                counter++;

    if(counter==0 && game_won()==false)
        return true;

    else
        return false;
}


void game_playing()
{
    int i=0;
    int w=-1;

    /* while the game is on progress */
    while(!is_tie())
    {
        print_board();
        int turn_for=i%2;       /* decide whose turn it is */

        if(turn_for==0)
            cout<<"Turn for human"<<endl;

        else
            cout<<"Turn for computer"<<endl;

        take_move(turn_for);
        i++;

        if(game_won())
            break;            
        // w=win_check(turn_for);

        // if(w!=-1)
        //     break;
    }

    w=(win_check(0)==0) ? 0 : 1; 
    announce_winner(w);
}


void announce_winner(int p)
{
    print_board();

    switch(p)
    {
        case 0:
            cout<<"Winner is Human! Congratulations!"<<endl;
            break;

        case 1:
            cout<<"Winner is Computer! Congratulations!"<<endl;
            break;

        case -1:
            cout<<"Sorry! The game is a tie!"<<endl;
    }
}


void take_move(int p)
{
    switch(p)
    {
        case 0:
            human_move();
            break;

        case 1:
            computer_move();
            break;
    }
}


void human_move()
{
    int col;
    cout<<"Which column?"<<endl;
    cin>>col;
    int j=drop_chip(0,col);

    if(j==0)
    {
        cout<<"Column is fulfilled. Try another column."<<endl;
        human_move();
    }
}


void computer_move()
{
    int x=drop_chip(1,7);

    if(x==0)
        x=drop_chip(1,6);
}


int evaluator()
{
    if(win_check(0)==0)
        return 1000000;

    else if(win_check(1)==1)
        return -1000000;

    else
        return 0;
}


void print_score()
{
    for(int i=0; i<BOARD_HEIGHT; i++)
        for(int j=0; j<BOARD_WIDTH; j++)
        {
            cout<<score[i][j]<<"\t";

            if(j==BOARD_WIDTH-1)
                cout<<endl;
        }
}


int main()
{
    initialize();
    print_board();
    // game_playing();
    // initialize();
    // print_board();
    // test();
    // print_board();
    // generate_moves();
    // print_states();
    // game_playing();
    return 0;
}


void test()
{
    board[5][0]=0;
    board[5][1]=1;
    board[5][2]=0;
    board[5][3]=1;
    board[5][4]=0;
    board[5][5]=1;
    board[5][6]=0;

    board[4][0]=1;
    board[4][1]=0;
    board[4][2]=1;
    board[4][3]=0;
    board[4][4]=1;
    board[4][5]=0;
    board[4][6]=1;

    board[3][0]=0;
    board[3][1]=1;
    board[3][2]=0;
    board[3][3]=1;
    board[3][4]=0;
    board[3][5]=1;
    board[3][6]=0;

    board[2][0]=0;
    board[2][1]=1;
    board[2][2]=0;
    board[2][3]=1;
    board[2][4]=0;
    board[2][5]=1;
    board[2][6]=0;
}


int getScore()
{
    int s = 0;

    //Pieces in the middle score higher than
    //pieces at the edges

    //Here's how the positions are scored:
    //
    //¦1¦2¦3¦4¦3¦2¦1¦
    //¦2¦3¦4¦5¦4¦3¦2¦
    //¦3¦4¦5¦6¦5¦4¦3¦
    //¦2¦3¦4¦5¦4¦3¦2¦
    //¦1¦2¦3¦4¦3¦2¦1¦
    //¦0¦1¦2¦3¦2¦1¦0¦
    //+-------------+

    for (int x=0; x<BOARD_WIDTH; x++)
    {
        int columnscore = (BOARD_WIDTH/2) - x;
        if (columnscore < 0) columnscore = -columnscore;
        columnscore = (BOARD_WIDTH/2) - columnscore;

        //Count the number of pieces in each column
        //and score accordingly
        for (int y=0; y<BOARD_HEIGHT; y++)
        {
            int rowscore = (BOARD_HEIGHT/2) - y;
            if (rowscore < 0) rowscore = -rowscore;
            rowscore = (BOARD_HEIGHT/2) - rowscore;

            if (board[x][y]==1)
                s += columnscore+rowscore;

            else if (board[x][y]==0)
                s -= columnscore+rowscore;

            score[y][x]=s;
        }
    }

    return 0;
}


// int alpha_beta(int player, int alpha, int beta, int depth)
// {
//     if(win_check(0)==0)
//         return max_score;

//     else if(win_check(1)==1)
//         return -max_score;

//     if(depth>=4)
//     {
//         return evaluator();
//     }

//     if(player==0)
//     {
//         int max_score=-invalid_score;
//         int s;

//         for(int i=0; i<BOARD_HEIGHT; i++)
//             for(int j=0; j<BOARD_WIDTH; j++)
//             {
//                 if(board[i][j]==BLANK)
//                 {
//                     board[i][j]=0;
//                     s=evaluator();
//                     board[i][j]=BLANK;

//                     if(s>alpha)
//                         alpha=s;
//                 }
//             }

//         return alpha;
//     }

//     else if(player==1)
//     {
//         int min_score=invalid_score;
//         int s;

//         for(int i=0; i<BOARD_HEIGHT; i++)
//             for(int j=0; j<BOARD_WIDTH; j++)
//             {
//                 if(board[i][j]==BLANK)
//                 {
//                     board[i][j]=0;
//                     s=evaluator();
//                     board[i][j]=BLANK;

//                     if(s<beta)
//                         beta=s;
//                 }
//             }

//         return alpha;
//     }
// }


void generate_moves()
{
    for(int col=1; col<=BOARD_WIDTH; col++)
    {
        int status=drop_chip(0,col);        /* assume a move for opponent */
        int t1,t2;

        if(status==1)
        {
            t1=last_x;                      /* keep track of last assumed move by opponent */ 
            t2=last_y;
    
            for(int i=1; i<=BOARD_WIDTH; i++)
            {
                if(drop_chip(1,i)==1)       /* generate move based on that assumed move */
                {
                    game_state g;
                    int eval=evaluator();   /* evaluate that move */
                    g.x=last_x;             /* keep track of that move*/
                    g.y=last_y;             
                    g.score=eval;           /* keep that evalutation */
                    states.push(g);         /* store that game state */
                    print_board();
                    undo();                 /* undo this move */
                }
            }

            undo(t1,t2);                    /* undo opponents assumed move */
        }
    }
}


void undo(int i, int j)
{
    board[i][j]=BLANK;
    filled_counter+=1;
}


void print_states()
{
    while(!states.empty())
    {
        game_state temp=states.top();
        states.pop();
        cout<<"X:"<<temp.x<<endl;
        cout<<"Y:"<<temp.y<<endl;
        cout<<"Score:"<<temp.score<<endl;
    }
}


int evaluate(int player, int level, int alpha, int beta)
{
    int i, goodness, best, maxab;

    if (level == 4)
        return evaluator();
    
    else 
    {
        best = -invalid_score;
        maxab = alpha;

        for(i=0; i<BOARD_WIDTH; i++) 
        {
            if(drop_chip(player,i)==0) 
                continue;

            else if(win_check(player)==player)
                goodness=max_score-4;

            else
                goodness = evaluate((player+1)%2, level, -beta, -maxab);
            
            if (goodness > best) 
            {
                best = goodness;
                
                if (best > maxab)
                    maxab = best;
            }

            if (best > beta)
                break;
        }

        return -best;
    }
}