#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>  
#include <errno.h>   
#include <string.h>

int main()
{
	char e[]="exit";
	
	while(1)
	{
		char *p;
		int index=0;
		int x=0;
		char cmd[50];
		char *args[10];
		int status;
		pid_t pid;
		gets(cmd);
		if(strcmp(cmd,e)==0)
		break;
		else
		p=strtok(cmd," ,.-");
	
		while(p)
		{
			args[index]=p;
			index++;
			p=strtok(0," ,.-");
		}
	
		pid =fork();
	
		if (pid == 0)
		{
			x = execvp(args[0], args);
			_exit (EXIT_FAILURE);
		}
    
		else if (pid < 0)
		status = -1;
  
		else if (waitpid (pid, &status, 0) !=pid)
		status = -1;

		//printf("%d\n",x);
		printf("%s", "\n***********\n");
		printf( " fork: %d\n", status);
		printf( " exec: %d\n", x);
		printf( " pid : %d\n", pid);
		printf("%s", "***********\n");
	}
	
	return 0;
}
