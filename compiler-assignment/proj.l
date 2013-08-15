%{
	#include <stdio.h>
	#include "sym.h"
	#include "proj_tab.h"
%}

delim 		[ \n\t]
ws 			{delim}+
letter 		[A-Za-z]
digit 		[0-9]
identifier 	{letter}({letter}|{digit})*
inum        {digit}+
fnum        {digit}+(\.{digit}+)?(E[+\-]?{digit}+)?

%%

{ws} 						{}
"/*"(.|\n)*"*/"             {/*comment*/}
\"(\\.|[^\\"])*\"           {/*string*/ return (STRING);}
\'{letter}\'                {return (CONST_CHAR);}
int 				        {yylval.ival=1;return (INT);}
float 				        {yylval.ival=2;return (FLOAT);}
char 				        {yylval.ival=3;return (CHAR);}
{inum}                      {return (INUM);}
{fnum}                      {return (FNUM);}
for 				        {return (FOR);}
do					        {return (DO);}
while 				        {return (WHILE);}
if 					        {return (IF);}
else				        {return (ELSE);}
return  			        {return (RETURN);}
void 				        {yylval.ival=0;return (VOID);}
{identifier} 				{yylval.ptr=strdup(yytext);return (IDENTIFIER);}
"+"     			        {return (PLUS);}
"-"    				        {return (MINUS);}
"*"     			        {return (STAR);}
"/"     			        {return (SLASH);}
"%"     			        {return (MOD);}
"++"    			        {return (INC);}
"--"    			        {return (DEC);}
"<"     			        {return (LT);}
">"     			        {return (GT);}
"=="    			        {return (CMP);}
"<="    			        {return (LE);}
">="    			        {return (GE);}
"!="    			        {return (NE);}
"!"     			        {return (NOT);}
"{}"    			        {return (CURLYBRACES);}
"[]"    			        {return (SQUAREBRACKET);}
"="     			        {return (EQ);}
";"     			        {return (SEMICOLON);}
","     			        {return (COMMA);}
":"     			        {return (COLON);}
"&"     			        {return (AND);}
"&&"    			        {return (LAND);}
"||"    			        {return (LOR);}
"("                         {return (LP);}
")"                         {return (RP);}
"["                         {return (LSP);}
"]"                         {return (RSP);}
"{"                         {return (LCB);}
"}"                         {return (RCB);}
<<EOF>>                     {eofhandler();}

%%

int yywrap(void) {
	return 1;
}

void eofhandler()
{
    printf("\nInputs have been parsed sucessfully.");
    printf("\nEnd Of file has been reached.\n");
    exit(0);

}