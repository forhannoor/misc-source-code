#include <stdio.h>
#include <stdbool.h>

bool is_prime(int n);   // checks for primality
int gcd(int a, int b);  // returns greatest common divisor
double average(int a, int b);   // returns average of two integers

int main()
{
    int x, y;
    printf("x:");
    scanf("%d", &x);
    printf("y:");
    scanf("%d", &y);

    printf("average: %.2f\n", average(x, y));

    bool x_prime = is_prime(x);
    bool y_prime = is_prime(y);

    if(x_prime == true)
        printf("%d is prime\n", x);

    else
        printf("%d is not prime\n", x);

    if(y_prime == true)
        printf("%d is prime\n", y);

    else
        printf("%d is not prime\n", y);

    int g = gcd(x, y);

    if(g == 1)
        printf("Input mutually prime: yes");

    else
        printf("Input mutually prime: no");

    return 0;
}

bool is_prime(int n)
{
    bool flag = true;
    int i;

    for(i = 2; i <= sqrt(n); i++)
        if(n % i == 0)
            return false;

    return flag;
}

int gcd(int a, int b)
{
    if ( a==0 ) return b;
    return gcd ( b%a, a );
}

double average(int a, int b)
{
    return (a + b) / 2.0;
}