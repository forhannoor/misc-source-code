#include <iostream>
#include <stack>
#include <stdlib.h>

#define BOARD_WIDTH 7
#define BOARD_HEIGHT 6
#define BLANK -1

using namespace std;


int filled_counter=42;
void initialize();
int board[BOARD_HEIGHT][BOARD_WIDTH];
int players[2]={0,1};
int win_check(int player);
bool game_won();
void print_board();
bool is_tie();
int drop_chip(int player, int col);
void game_playing();
void announce_winner(int p);
void take_move(int p);
void human_move();
void computer_move();
int last_x=0;
int last_y=0;
void undo(int i=last_x, int j=last_y);
int consequtive_chips();
void test();
int simulate_move();


int drop_chip(int player, int col)
{
    int status=0;

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
                cout<<endl;
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

    while(!is_tie())
    {
        print_board();
        int turn_for=i%2;

        if(turn_for==0)
            cout<<"Turn for human"<<endl;

        else
            cout<<"Turn for computer"<<endl;

        take_move(turn_for);
        i++;

        if(game_won())
            break;
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
//    int x=drop_chip(1,7);
//
//    if(x==0)
//        x=drop_chip(1,6);
    int decision=simulate_move();
    int x=drop_chip(1,decision);

    if(x==0)
        computer_move();
}


int consequtive_chips()
{
}


int simulate_move()
{
    int col;

    for(int i=1; i<=BOARD_WIDTH; i++)
    {
        int j=drop_chip(0,i);

        if(j==0)
            continue;

        if(win_check(0)==0)
            break;

        if(j==1)
            undo();
    }

    if(win_check(0)==0)
    {
        col=last_y+1;
        undo();
    }

    else
    {
        col=rand()%7;
        col+=1;
    }

    return col;
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


void undo(int i, int j)
{
    board[i][j]=BLANK;
    filled_counter+=1;
}


int main(int argc, char const *argv[])
{
    initialize();
    print_board();
    game_playing();
    return 0;
}