// Sudoku solver using bruteforce technique.

#include <fstream>
#include <cstdio>

// File to read sudoku inputs from.
const char* INPUT_FILE = "input.txt";
const int DIMENSION = 9, BLANK = 0;

// Sudoku array.
int a[DIMENSION][DIMENSION];
// Checks if a number exists in given row.
bool is_in_row(int row, int num);
// Checks if a number exists in given column.
bool is_in_column(int column, int num);
// Checks if a number exists in a sudoku block.
bool is_in_box(int box_start_row, int box_start_column, int num);
// Initializes sudoku array from file input.
void initialize();
// Checks if board has any blank cell and returns the index.
bool has_unassigned(int &row, int &column);
bool bruteforce();
// Checks if a number doesn't have any conflict (row, coloumn and/or block wise) in current position.
bool has_no_conflict(int row, int column, int num);
// Prints sudoku board.
void display_board();

// Checks if a number exists in given row.
bool is_in_row(int row, int num)
{
	bool flag = false;
	// For each column in given row.
	for(int column = 0 ; !flag && column < DIMENSION ; ++column)
	{
		// If number is found.
		if( a[row][column] == num)
			flag = true;
	}

	return flag;
}

// Checks if a number exists in given column.
bool is_in_column(int column, int num)
{
	bool flag = false;

	// For each row in given column.
	for(int row = 0 ; !flag && row < DIMENSION ; ++row)
	{
		// If number is found.
		if( a[row][column] == num)
			flag = true;
	}

	return flag;
}

// Checks if a number exists in a sudoku block.
bool is_in_box(int box_start_row, int box_start_column, int num)
{
	bool flag = false;

	// For 3 consecutive rows.
	for(int row = 0 ; row < 3; ++row)
		// For 3 consecutive columns.
		for(int column = 0 ; !flag && column < 3 ; ++column)
			// If number exists in block.
			if(a[row + box_start_row][column + box_start_column] == num)
				flag = true;

	return flag;
}

// Checks if a number doesn't have any conflict (row, coloumn and/or block wise) in current position.
bool has_no_conflict(int row, int column, int num)
{
	return !is_in_row(row , num) && !is_in_column(column, num)
		&& !is_in_box(row - row % 3, column- column % 3 , num);
}

// Initializes sudoku array from file input.
void initialize()
{
	// Stream reader.
	std::ifstream reader;
	// Open stream.
	reader.open(INPUT_FILE);

	// If unable to find/open file.
	if(reader.fail())
		printf("Failed to read file. Please verify file name and location.");

	else
	{
		for(int row = 0; row < DIMENSION; ++row)
			for(int column = 0; column < DIMENSION; ++column)
			{
				reader >> a[row][column];
			}
	}

	// Close stream.
	reader.close();
}

// Prints sudoku board.
void display_board()
{
	int row, column;

	for(row = 0; row < DIMENSION; ++row)
	{
	    // Print a tab character at the beginning of each row.
	    printf("\t");

		for(column = 0; column < DIMENSION; ++column)
		{
			printf("%d ", a[row][column]);
		}

		// Print a new line character at the end of each row.
		printf("\n");
	}
}

// Checks if board has any blank cell and returns the index.
bool has_unassigned(int &row, int &column)
{
	for(row = 0; row < DIMENSION; ++row)
	{
		for(column = 0; column < DIMENSION; ++column)
		{
			// If current cell is blank.
			if(a[row][column] == BLANK)
				return true;
		}
	}

	return false;
}

bool bruteforce()
{
	int row , column;

	// If there's no empty cell.
	if(!has_unassigned(row, column))
		return true;

	for(int num = 1; num <= DIMENSION ; num++)
	{
		// If number has no conflict.
		if(has_no_conflict(row ,column , num))
		{
			// Assign number to cell.
			a[row][column] = num;

			if (bruteforce())
				return true;

			// Reset cell.
			a[row][column] = BLANK;
		}
	}

	return false;
}


int main()
{
	// Initialize sudoku array from file input.
	initialize();
	printf("\t**Initial board**\n");
	// Print initial state.
	display_board();
	// Solve sudoku.
	bruteforce();
	printf("\n\t**Solved board**\n");
	// Print solved state.
	display_board();
	return 0;
}