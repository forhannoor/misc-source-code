#include <iostream>
#include <cmath>

using namespace std;


#define learning_rate 1;


double inputs[2];
double outputs[6]={0,0,0,0,0,0};
double weights[7]={0,0,0,0,0,0,0};
double errors[6]={0,0,0,0,0,0};
void print_array(double array[], int size);
void set_weights();
void set_inputs();
void set_weights();
bool is_hidden(int n);
double input_to_node(int node);
double output_of_node(int node);
double sigmoid_result(double n);


void print_array(double array[], int size)
{
	for (int i = 0; i < size; ++i)
	{
		cout<<array[i]<<"\t";
	}
}


void set_weights()
{
	for (int i = 1; i < 7; i++)
	{
		double w;
		cout<<"Weight for w"<<i<<" : ";
		cin>>w;
		weights[i]=w;
	}
}


void set_inputs()
{
	for (int i = 0; i < 2; i++)
	{
		double n;
		cout<<"Input "<<i+1<<" : ";
		cin>>n;
		inputs[i]=n;
	}
}


bool is_hidden(int n)
{
	if(n==3 || n==4)
		return true;

	else
		return false;
}


double input_to_node(int node)
{
	switch(node)
	{
		case 1:
			return inputs[1];
			break;

		case 2:
			return inputs[2];
			break;

		case 3:
			return (weights[1]*inputs[1]+weights[2]*inputs[2]);
			break;

		case 4:
			return (weights[3]*inputs[1]+weights[4]*inputs[2]);
			break;

		case 5:
			return (outputs[3]*weights[5]+outputs[4]*weights[6]);
			break;

		default:
			return -1;
			break;
	}
}


double output_of_node(int node)
{
    double out;

	switch(node)
	{
		case 3:
		{
			double i=input_to_node(node);
			out=sigmoid_result(i);
			outputs[node]=out;
			break;
		}

		case 4:
		{
			double j=input_to_node(node);
			out=sigmoid_result(j);
			outputs[node]=out;
			break;
		}

		case 5:
		{
			double k=input_to_node(node);
			out=sigmoid_result(k);
			outputs[node]=out;
			break;
		}
	}

	return out;
}


double sigmoid_result(double n)
{
	double result;
	result=exp(-n);
	result+=1;
	result=1/(result);
	return result;
}


int main(int argc, char const *argv[])
{
	set_to_zero(outputs,6);
	set_to_zero(weights,7);
	set_to_zero(errors,6);
	set_inputs();
	set_weights();
	print_array(inputs, 2);
	print_array(outputs, 6);
	return 0;
}