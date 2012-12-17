#include <iostream>
#include <cmath>

using namespace std;


#define LEARNING_RATE 1;


double target=0.5;
double error=0;
int iteration=1;
double inputs[3]={0, 0.35, 0.9};
double outputs[6]={0,0,0,0,0,0};
double weights[7]={0,0.1,0.8,0.4,0.6,0.3,0.9};
double errors[6]={0,0,0,0,0,0};
void introduction();
void print_array(double array[], int size);
void set_weights();
void set_inputs();
bool is_hidden(int n);
double input_to_node(int node);
double output_of_node(int node);
double sigmoid_result(double n);
void learning();
double find_error(int node);
void adjust_weight(int w);


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
		case 3:
			return (weights[1]*inputs[1]+weights[2]*inputs[2]);
			break;

		case 4:
			return (weights[3]*inputs[1]+weights[4]*inputs[2]);
			break;

		case 5:
			return (outputs[3]*weights[5]+outputs[4]*weights[6]);
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
			cout<<"Input to node"<<node<<" : "<<i<<endl;
			out=sigmoid_result(i);
			cout<<"Output of node"<<node<<" : "<<out<<endl;
			outputs[node]=out;
			break;
		}

		case 4:
		{
			double j=input_to_node(node);
			cout<<"Input to node"<<node<<" : "<<j<<endl;
			out=sigmoid_result(j);
			cout<<"Output of node"<<node<<" : "<<out<<endl;
			outputs[node]=out;
			break;
		}

		case 5:
		{
			double k=input_to_node(node);
			cout<<"Input to node"<<node<<" : "<<k<<endl;
			out=sigmoid_result(k);
			cout<<"Output of node"<<node<<" : "<<out<<endl;
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


void learning()
{
	double n3o=output_of_node(3);	/* output of hidden layer node 1*/
	double n4o=output_of_node(4);	/* output of hidden layer node 2*/
	double n5o=output_of_node(5);	/* output of output node */
	error=target-n5o;
	cout<<endl;
	cout<<"Error in iteration "<<iteration<<" : "<<error<<endl;
	cout<<endl;
	cout<<endl;
	iteration+=1;
	find_error(5);
	adjust_weight(5);
	adjust_weight(6);
	find_error(3);
	find_error(4);
	adjust_weight(1);
	adjust_weight(2);
	adjust_weight(3);
	adjust_weight(4);
}


double find_error(int node)
{
	double e;

	switch(node)
	{
		case 3:
		{
			e=errors[5]*weights[5]*outputs[3]*(1-outputs[3]);
			errors[node]=e;
			cout<<"Error in node "<<node<<" : "<<e<<endl;
			break;
		}

		case 4:
		{
			e=errors[5]*weights[6]*outputs[4]*(1-outputs[4]);
			errors[node]=e;
			cout<<"Error in node "<<node<<" : "<<e<<endl;
			break;
		}

		case 5:
		{
			e=outputs[node]*(1-outputs[node])*(target-outputs[node]);
			errors[node]=e;
			cout<<"Error in node "<<node<<" : "<<e<<endl;
			break;
		}
	}

	return e;
}


void adjust_weight(int w)
{
	switch(w)
	{
		case 1:
		{
			double new_weight=weights[w]+errors[3]*inputs[1];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}

		case 2:
		{
			double new_weight=weights[w]+errors[3]*inputs[1];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}

		case 3:
		{
			double new_weight=weights[w]+errors[4]*inputs[2];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}

		case 4:
		{
			double new_weight=weights[w]+errors[4]*inputs[2];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}

		case 5:
		{
			double new_weight=weights[w]+errors[w]*outputs[3];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}

		case 6:
		{
			double new_weight=weights[w]+errors[5]*outputs[4];
			cout<<"Previous w"<<w<<" : "<<weights[w]<<endl;
			weights[w]=new_weight;
			cout<<"Adjusted w"<<w<<" : "<<new_weight<<endl;
			break;
		}
	}
}


void introduction()
{
    cout<<"*****************************"<<endl;
    cout<<"Node 1 => Input node 1"<<endl;
    cout<<"Node 2 => Input node 2"<<endl;
    cout<<"Node 3 => Hidden layer node 1"<<endl;
    cout<<"Node 4 => Hidden layer node 2"<<endl;
    cout<<"Node 5 => Output node"<<endl;
    cout<<"*****************************"<<endl;
    cout<<endl;
}


int main(int argc, char const *argv[])
{
	int pass_count;
    introduction();
    cout<<"How many pass?";
    cin>>pass_count;

	for (int i = 0; i < pass_count; ++i)
	{
		learning();
	}

	return 0;
}