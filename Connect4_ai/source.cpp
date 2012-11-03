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


void initialize();                                 /* initializes the board */
int board[board_height][board_width];	           /* connect4 board */
int players[2]={0,1};
int win_check(int row, int col, int player);	   /* checks for winning move and determines who won */
void print_board();                                /* prints the board */


int main()
{
    initialize();
    print_board();
	return 0;
}


int win_check(int row, int col, int player)
{
	/* checks horizontally */
	if(col+3<board_width)
		if(board[row][col]==board[row][col+1]==board[row][col+2]==board[row][col+3]==player)
			return player;

	/* checks vertically */
	if(row+3<board_height)
        if(board[row][col]==board[row+1][col]==board[row+2][col]==board[row+3][col]==player)
             return player;

    /* checks ascending diagonals */
    if(row+3<board_height && col+3<board_width)
        if(board[row][col]==board[row+1][col+1]==board[row+2][col+2]==board[row+3][col+3]==player)
             return player;

    /* checks descending diagonals */
    if(row-3>=0 && col+3<board_width)
        if(board[row][col]==board[row-1][col+1]==board[row-2][col+2]==board[row-3][col+3]==player)

    return -1;
}


void print_board()
{
    cout<<" - - - - - - - - - - - - - - "<<endl;

    for(int i=0; i<board_height; i++)
        for(int j=0; j<board_width; j++)
        {
            cout<<"| ";

            if(board[i][j]==blank)
            cout<<"- ";

            if(j==6)            
                cout<<endl;         /* prints new line at the end of each row */
        }

    cout<<" - - - - - - - - - - - - - - "<<endl;
    cout<<"  1   2   3   4   5   6   7 "<<endl;
}


void initialize()
{
    for(int i=0; i<board_height; i++)
        for(int j=0; j<board_width; j++)
            board[i][j]=blank;
}