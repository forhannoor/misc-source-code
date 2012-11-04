/****************************************************************
 **                     Connect 4                              **
 **               Implemented for AI class                     **
 **                                                            **
 ****************************************************************/


#include <iostream>

#define board_width 7
#define board_height 6
#define blank -1

using namespace std;


int filled_counter=42;                  /* keeps the number of fields left blank */
void initialize();                      /* initializes the board */
int board[board_height][board_width];   /* connect4 board */
int players[2]={0,1};
int win_check(int player);	            /* checks for winning move and determines who won */
void print_board();                     /* prints the board */
bool is_tie();                          /* checks if game is tie */
int drop_chip(int player, int col);     /* drops a chip in a column if available */
void game_playing();
void announce_winner(int p);            /* announces game result */
void take_move(int p);
void human_move();
void computer_move();
void test();                            /* test purpose data initialization */


int drop_chip(int player, int col)
{
    int status=0;   /* 0 => failed, 1=> success */

    for(int i=board_height-1; i>=0; i--)
        if(board[i][col-1]==blank && status==0)
        {
            board[i][col-1]=player;
            filled_counter-=1;
            status=1;
        }

    return status;
}


int win_check(int player)
{
    for(int row=0; row<board_height; row++)
        for(int col=0; col<board_width; col++)
        {
            /* checks horizontally */
            if(col+3<board_width)
                if(board[row][col]==player && board[row][col+1]==player && board[row][col+2]==player && board[row][col+3]==player)
                    return player;
                    
        
            /* checks vertically */
            if(row+3<board_height)
                if(board[row][col]==player && board[row+1][col]==player && board[row+2][col]==player && board[row+3][col]==player)
                    return player;
        
            /* checks ascending diagonals */
            if(row+3<board_height && col+3<board_width)
                if(board[row][col]==player && board[row+1][col+1]==player && board[row+2][col+2]==player && board[row+3][col+3]==player)
                    return player;
        
            /* checks descending diagonals */
            if(row-3>=0 && col+3<board_width)
                if(board[row][col]==player && board[row-1][col+1]==player && board[row-2][col+2]==player && board[row-3][col+3]==player)
                    return player;
        }

    return -1;
}


void print_board()
{
    cout<<endl;
    cout<<" - - - - - - - - - - - - - - "<<endl;

    for(int i=0; i<board_height; i++)
        for(int j=0; j<board_width; j++)
        {
            cout<<"| ";

            if(board[i][j]==blank)
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
    for(int i=0; i<board_height; i++)
        for(int j=0; j<board_width; j++)
            board[i][j]=blank;
}


bool is_tie()
{
    if(filled_counter==0)
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
        w=win_check(turn_for);

        if(w!=-1)
            break;
    }
    
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
    drop_chip(1,7);
}


int main()
{
    initialize();
    game_playing();
    return 0;
}


void test()
{
    board[1][3]=1;
    board[2][4]=1;
    board[3][5]=1;
    board[4][6]=1;
}