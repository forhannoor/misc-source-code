#include <iostream>
#include <fstream>
#include <stdio.h>

using namespace std;


int a[9][9];			/* sudoku array */
bool in_row(int row, int num);
bool in_column(int column, int num);
bool in_box(int box_start_row, int box_start_column, int num);
void initialize();			/* intializes sudoku array from file input */
bool unassigned(int &row, int &column);
bool bruteforce();			/* bruteforces sudoku */
bool no_conflicts(int row, int column, int num);
void print_sudoku();


bool in_row(int row, int num)
{
	for(int column = 0 ; column < 9 ; column++)
	{
		if( a[row][column] == num)
			return true;
	}

	return false;
}


bool in_column(int column, int num)
{
	for(int row = 0 ; row < 9 ; row++)
	{
		if( a[row][column] == num)
			return true;
	}

	return false;
}


bool in_box(int box_start_row, int box_start_column, int num)
{
	for(int row = 0 ; row < 3; row++)
		for(int column = 0 ; column < 3 ; column++)
			if(a[row+box_start_row][column+box_start_column] == num)
				return true;

	return false;
}


bool no_conflicts(int row, int column, int num)
{
	return !in_row(row , num) && !in_column(column, num)
		&& !in_box(row - row % 3, column- column % 3 , num);
}


void initialize()
{
	char file_name[15];
	cout<<"File Name: ";
	gets(file_name);
	ifstream in(file_name);
	int temp;

	for(int i=0;i<9;i++)
		for(int j=0;j<9;j++)
		{
			in>>temp;
            a[i][j]=temp;
		}

	in.close();
}


void print_sudoku()
{
	for(int i=0;i<9;i++)
		for(int j=0;j<9;j++)
		{
			cout<<a[i][j]<<"  ";

			if(j==8)			/* prints new line at the end of each row */
				cout<<endl;
		}
}


bool unassigned(int &row, int &column)
{
	for(row=0;row<9;row++)
	{
		for(column=0;column<9;column++)
		{
			if(a[row][column]==0)
				return true;
		}

	}

	return false;
}


bool bruteforce()
{
	int row , column;

	if(!unassigned(row, column))
		return true;

	for(int num = 1; num <= 9 ; num++)
	{
		if(no_conflicts(row ,column , num))
		{
			a[row][column] = num;

			if (bruteforce())
				return true;

			a[row][column] = 0;
		}
	}

	return false;
}


int main()
{
	initialize();
	cout<<"Initial Sudoku:"<<endl;
	print_sudoku();
	cout<<"Solved Sudoku:"<<endl;
	bruteforce();
	print_sudoku();
	return 0;
}