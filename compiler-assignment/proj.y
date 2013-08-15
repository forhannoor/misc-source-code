%{
	#include <ctype.h>
	#include "sym.h"
	#include <stdio.h>
	int typ;
	int pointer=0;
	FILE *out;
	int counter=1;
	int counter_two=1;
	void newlabel();
%}

%union
{
    int ival;
    char *ptr;
};
%type <ptr> type_name constant
%type <ptr> variable_list variable
%token <ptr> IDENTIFIER
%token <ival> INT FLOAT CHAR VOID
%type <ptr> binary_expression unary_expression
%type <ival> binary_operator
%token FOR DO WHILE IF ELSE RETURN PLUS MINUS STAR SLASH MOD INC DEC LT GT CMP LE GE NE NOT CURLYBRACES SQUAREBRACKET EQ SEMICOLON COMMA COLON AND LAND LOR CHAR_CONST STR_CONST COMMENT NUM DIV STRING CONST_CHAR
%token <ival> INUM FNUM CNUM SNUM
%token LP RP
%token LSP RSP
%token LCB RCB
%right EQ

%left PLUS MINUS

%left STAR SLASH MOD

%left UMINUS

%nonassoc IFX
%nonassoc ELSE
%nonassoc LT GT

%%

program 			: external
					;
external			: declaration external
					| function
					;
declaration			: type_name variable_list SEMICOLON
					;
type_name			: INT                               {$$=1;typ=$$;}
					| FLOAT                             {$$=2;typ=$$;}
					| CHAR                              {$$=3;typ=$$;}
					| VOID                              {$$=0;typ=$$;}
					;
variable_list		: variable COMMA variable_list
					| variable
					| variable EQ INUM
					| variable EQ FNUM
					| variable EQ STRING                {ensure_string_constant(pointer);}
					| variable EQ CONST_CHAR            {handle_const_char(typ);}
					;
variable			: IDENTIFIER                        {pointer=0;install_id(typ,$1);}
					| STAR IDENTIFIER                   {pointer=1;install_id(typ,$2);}
					| IDENTIFIER  LSP INUM RSP          {pointer=0;install_id(typ,$1);}
					;
function			: function_header  LCB function_body RCB
					;
function_header		: type_name IDENTIFIER LP parameter_list RP         {typ=$1;install_id(typ,$2);}
					| type_name STAR IDENTIFIER LP parameter_list RP
					| IDENTIFIER LP parameter_list RP
					;
parameter_list		: type_name IDENTIFIER COMMA parameter_list
                    | type_name IDENTIFIER
					| type_name STAR IDENTIFIER
					| type_name
					|
					;
function_body		: internal statement_list
					;
internal			: declaration internal
					|
					;
statement_list	  	: statement statement_list
					|
					;
statement			: LCB statement_list RCB
					| for_statement
					| while_statement
					| dowhile_statement
					| if_statement
					| expression SEMICOLON
					| RETURN expression SEMICOLON
					| RETURN SEMICOLON
					;
for_statement		: FOR LP expression SEMICOLON expression SEMICOLON expression RP statement
					;
while_statement 	: WHILE LP expression RP statement
					;
dowhile_statement	: DO statement WHILE LP expression RP SEMICOLON
					;
if_statement		: IF LP expression RP statement %prec IFX
					| IF LP expression RP statement ELSE statement
					;
expression			: unary_expression EQ expression
					| binary_expression
					;
unary_expression	: unary_operator unary_expression
					| postfix_expression
					;
unary_operator		: PLUS
					| MINUS
					| INC
					| DEC
					| NOT
					| AND
					| STAR
					;
postfix_expression	: postfix_expression  LSP expression RSP
					| IDENTIFIER LP RP
					| IDENTIFIER LP argument_list RP
					| postfix_expression INC
					| postfix_expression DEC
					| primary_expression
					;
primary_expression	: IDENTIFIER                    {check_id_compatibility($1);}
					| constant
					| LP expression RP
					;
constant			: INUM
					| FNUM
					| CNUM
					| SNUM
					;
argument_list		: argument_list COMMA expression
					| expression
					;
binary_expression	: binary_expression binary_operator unary_expression    {newtemp();gen($1,$2,$3);}
					| unary_expression
					;
binary_operator		: PLUS      {$$=401;}
					| MINUS     {$$=402;}
					| STAR      {$$=403;}
					| SLASH     {$$=404;}
					| MOD       {$$=405;}
					| LT        {$$=406;}
					| LE        {$$=407;}
					| GT        {$$=408;}
					| GE        {$$=409;}
					| CMP       {$$=410;}
					| NE        {$$=411;}
					| LAND      {$$=412;}
					| LOR       {$$=413;}
					;

%%

void install_id(int a,char *b)
{
    int p=lookup(b);

    if(p==0)
    insert(b,0,a);

    else
    {
        char *m;
        int temp=symtable[p].type;

        if(temp==0)
        m="VOID";

        else if(temp==1)
        m="INT";

        else if(temp==2)
        m="FLOAT";

        else
        m="CHAR";

        printf("\nPrevious declaration index : %d",p);
        printf("\nPrevious declaration type  : %s\n",m);
        error("\nCannot declare same identifier again.\n");
    }
}

void check_id_compatibility(char *v)
{
    int p;
    p=lookup(v);

    if(p==0)
    {
        printf("\nError with identifier \"%s\"\n",v);
        error("\nIdentifier is used but not declared.\n");
    }

    else
    {
        int type=symtable[p].type;
        char *t;

        if(type==0)
        t="VOID";

        else if(type==1)
        t="INT";

        else if(type==2)
        t="FLOAT";

        else if(type==3)
        t="CHAR";

        if(type==1 || type==2)
        ;

        else
        {
            printf("\nIncompatible operator applied on operand \"%s\"\n",symtable[p].lexptr);
            printf("Operand is of type %s\n",t);
            error("Operator compatibility error.\n");
        }
    }
}

int yyerror(char *s) {
	fprintf(stderr, "%s\n", s);
	return 0;
}

void ensure_string_constant(int val)
{
    if(val=0)
    error("Cannot assign string constant to incompatible type.\n");

    else
    {
        if(typ==3)
        ;

        else
        error("Cannot assign string constant to incompatible type.\n");
    }
}

void handle_const_char(int t)
{
    if(t==3)
    ;

    else
    error("Cannot assign char constant to incompatible type.\n");
}

void gen(char *a,int b,char *c)
{
    fputs(a,out);

    switch(b)
    {
        case 401:
        fputs(" + ",out);
        break;

        case 402:
        fputs(" - ",out);
        break;

        case 403:
        fputs(" * ",out);
        break;

        case 404:
        fputs(" / ",out);
        break;

        case 405:
        fputs(" % ",out);
        break;

        case 406:
        fputs(" < ",out);
        break;

        case 407:
        fputs(" <= ",out);
        break;

        case 408:
        fputs(" > ",out);
        break;

        case 409:
        fputs(" >= ",out);
        break;

        case 410:
        fputs(" == ",out);
        break;

        case 411:
        fputs(" != ",out);
        break;

        case 412:
        fputs(" && ",out);
        break;

        case 413:
        fputs(" || ",out);
        break;
    }

    fputs(c,out);
    fputs("\n",out);
}

void newtemp()
{
    char x[10];
    x[0]='t';
    char buf[2];
    sprintf(buf,"%d",counter);
    strcat(x,buf);
    strcat(x," = ");
    fputs(x,out);
    counter++;
}

void newlabel()
{
    char s[10];
    s[0]='L';
    char tuf[4];
    sprintf(tuf,"%d",counter_two);
    strcat(s,tuf);
    strcat(s," : ");
    fputs(s,out);
    counter_two++;
}

int main(void) {
    printf("*******************************************\n");
    printf("*******************************************\n");
    printf("**** YASC(Yet Another Simple Compiler) ****\n");
    printf("*******************************************\n");
    printf("*******************************************\n");
    printf("\n\n\n");

    yydebug = 1;
    init();
    extern FILE *yyin;

    yyin=fopen("input.txt","r");
    out=fopen("three_address.txt","w");
    yyparse();
    fclose(out);
	return 0;
}