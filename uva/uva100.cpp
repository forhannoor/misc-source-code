#include <cstdio>

// Function prototypes.
int max_cycle_length(long long a, long long b);
int cycle_length(long long n, int c);

int main()
{
    long long a, b;

    while(scanf("%lld%lld", &a, &b) == 2)
	{
	    // If a is larger, exchange its value with b.
        if(a > b)
        {
            long long temp = b;
            b = a;
            a = temp;
        }

		printf("%lld %lld %d\n", a, b, max_cycle_length(a, b));
	}

    return 0;
}

int max_cycle_length(long long a, long long b)
{
    int max_length=0;
    int temp_length = 0;

    for(long long i = a; i <= b; ++i)
    {
        temp_length = cycle_length(i, 1);

        if(temp_length > max_length)
        {
            max_length = temp_length;
        }
    }

    return max_length;
}

int cycle_length(long long n, int c)
{
    if(n == 1)
    {
        return c;
    }
    else if(n % 2 == 1)
    {
        cycle_length(((3 * n) + 1), c + 1);
    }
    else
    {
        cycle_length(n / 2, c + 1);
    }
}