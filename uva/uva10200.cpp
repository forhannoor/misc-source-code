#include <iostream>
#include <cmath>
#include <cstdio>

using namespace std;

#define EPS 1e-10

int is_prime(long long x)
{
    for(long long i = 2; i <= sqrt(x); i++)
        if(x % i == 0)
            return 0;

    return 1;
}

int main()
{
    int generated [10001];
    long long produced;

    for(int i = 0; i < 10001; i++)
    {
        produced = (i * i) + i + 41;

        if(produced % 2 == 0)   // if number is even, discard it already
            continue;

        generated[i] = is_prime(produced);  // 1 if prime, 0 otherwise
    }

    int a, b;

    while(cin>>a>>b)
    {
        long long prime_count = 0;
        int total = b - a + 1;

        for(int i = a; i <= b; i++)
        {
            if(generated[i])
                prime_count += 1;
        }

        double percentage = (prime_count * 100) / (double) total;
        percentage += EPS;
        printf("%.2lf\n", percentage);
    }

    return 0;
}