#ifndef SYM_H_INCLUDED
#define SYM_H_INCLUDED

#include <stdio.h>
#include <ctype.h>
//#include "proj_tab.h"

#define BSIZE	128
#define NONE	-1
#define EOS		'\0'

//#define ID		259
#define DONE	260
#define STRMAX	999
#define SYMMAX	100

char lexbuf[BSIZE];
//int lastchar = -1;
//int lastentry = 0;

struct entry {
	char *lexptr;
	int token;
	int type;
};

struct entry symtable[SYMMAX];

void init();
int lookup(char *);
int insert(char *, int,int);
int lexan();
void emit(int, int);
void error (char *);

#endif