#include <stdlib.h>
#include <string.h>
#include "sym.h"
#include "proj_tab.h"

char lexemes[STRMAX];
int lastchar = -1;
int lastentry = 0;

int lineno = 1;
int tokenval = NONE;
int lookup(s)
	char s[];
{
	int p;
	for (p = lastentry; p > 0; p = p -1)
		if (strcmp(symtable[p].lexptr, s) == 0)
			return p;
	return 0;
}

int insert(s, tok,t)
	char s[];
	int tok;
	int t;
{
	int len;
	len = strlen(s);
	if (lastentry + 1 >= SYMMAX)
		error("symbol table full");
	if (lastchar + len + 1 >= STRMAX)
		error("lexeme array full");
	lastentry = lastentry + 1;
	symtable[lastentry].token = tok;
	symtable[lastentry].type = t;
	symtable[lastentry].lexptr = &lexemes[lastchar + 1];
	lastchar = lastchar + len + 1;
	strcpy(symtable[lastentry].lexptr,s);

	return lastentry;
}

int lexan()
{
	int t;
	while (1) {
		t = getchar();
		if (t == ' ' || t =='\t')
			;
		else if (t == '\n')
			lineno = lineno + 1;
		else if ( isdigit(t) ) {
			ungetc(t, stdin);
			scanf("%d",&tokenval);
			return NUM;
		}
		else if ( isalpha(t) ) {
			int p, b = 0;
			while (isalnum(t)) {
				lexbuf[b] = t;
				t = getchar();
				b = b + 1;
				if (b >= BSIZE)
					error("compiler error");
			}
			lexbuf[b] = EOS;
			if (t!=EOF)
				ungetc(t,stdin);
			p = lookup(lexbuf);
			if (p == 0)
				p = insert(lexbuf, IDENTIFIER,0);       // modified
			tokenval = p;
			return symtable[p].token;
		}
		else if (t == EOF)
			return DONE;
		else {
			tokenval = NONE;
			return t;
		}
	}
}

void emit(t, tval)
	int t, tval;
{
	switch (t) {
		case '+':
		case '-':
		case '*':
		case '/':  printf("%c\n", t); break;
		case DIV:  printf("DIV\n"); break;
		case MOD:  printf("MOD\n"); break;
		case NUM:  printf("%d\n", tval); break;
		case  IDENTIFIER:  printf("%s\n", symtable[tval].lexptr); break;

		default:  printf("token %d, tokenval %d\n",t,tval); break;
	}
}

void error(m)
	char *m;
{
	fprintf(stderr, "line %d: %s\n", lineno,m);
	exit(1);
}

void init()
{/*
	struct entry *p;
	for ( p=keywords; p->token; p++)
		insert(p->lexptr,p->token);
 */
}