#include <cstdio>
#include <iostream>
#include <iomanip>

int main()
{
    int num_case, num_student, temp, count;
    int * grades;
    long long sum;
    double avg, percentage_below_avg;
    scanf("%d", &num_case);

    for(int i = 0; i < num_case; ++i)
    {
        scanf("%d", &num_student);
        grades = new int [num_student];
        sum = 0;

        for(int j = 0; j < num_student; ++j)
        {
            scanf("%d", &temp);
            sum += temp;
            grades[j] = temp;
        }

        avg = sum / (double) num_student;
        count = 0;

        for(int j = 0; j < num_student; ++j)
        {
            if(grades[j] > avg)
            {
                ++count;
            }
        }

        percentage_below_avg = (count * 100) / (double) num_student;
        printf("%.3f%%\n", percentage_below_avg);
        delete [] grades;
    }

    return 0;
}