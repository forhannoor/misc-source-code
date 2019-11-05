#include <cstdio>

int main()
{
    int number, num_exchange;
    int *arr;

    while(scanf("%d", &number))
    {
        arr = new int [number];
        num_exchange = 0;

        for(int i = 0; i < number; ++i)
        {
            scanf("%d", &arr[i]);
        }

        for(int i = 0; i < number; ++i)
        {
            for(int j = i + 1; j < number; ++j)
            {
                if(arr[i] > arr[j])
                {
                    num_exchange += 1;
                }
            }
        }

        delete [] arr;
        printf("Minimum exchange operations : %d\n", num_exchange);
    }

    return 0;
}