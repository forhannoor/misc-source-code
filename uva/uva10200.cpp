#include <cmath>
#include <cstdio>

#define EPS 1e-10

int is_prime(long long x)
{
    // 1: prime, 0: not prime.
    int result = 1;
    long long limit = sqrt(x);

    for(long long i = 2; i <= limit; ++i)
    {
        if(x % i == 0)
        {
            result = 0;
            break;
        }
    }

    return result;
}

int main()
{
    int generated [10001];
    int a, b;
    long long produced;

    for(int i = 0; i < 10001; ++i)
    {
        produced = (i * i) + i + 41;

        // Even number should not be tested for primality.
        if(produced % 2 == 0){ continue; }

        generated[i] = is_prime(produced);
    }

    while(scanf("%d%d", &a, &b) == 2)
    {
        long long prime_count = 0;
        int total = b - a + 1;

        for(int i = a; i <= b; ++i)
        {
            if(generated[i] == 1)
            {
                prime_count += 1;
            }
        }

        double percentage = (prime_count * 100) / (double) total;
        percentage += EPS;
        printf("%.2lf\n", percentage);
    }

    return 0;
}