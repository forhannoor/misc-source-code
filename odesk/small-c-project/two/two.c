#include <stdio.h>

void print_binary(int n);    // prints n in binary format

int main()
{
    int x;
    printf("Input:");
    scanf("%d", &x);
    printf("Signed form: %d\n", x);
    printf("Unsigned form: %u\n", x);
    printf("Hex form : %X\n", x);
    printf("Binary form: ");
    print_binary(x);
    printf("\n");
    return 0;
}

void print_binary(int n) {
	unsigned int i;
	i = 1<<(sizeof(n) * 8 - 1);

	while (i > 0) {
		if (n & i)
			printf("1");
		else
			printf("0");
		i >>= 1;
	}
}