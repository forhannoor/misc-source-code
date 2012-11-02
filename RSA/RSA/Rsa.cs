using System;
using System.Collections.Generic;
using System.Security.Cryptography;
using System.Text;
using Mono.Security.Cryptography;

namespace RSA
{
	public class Rsa
	{
		public Rsa ()
		{
		}
		
		/* Checks for primality */
		public bool isPrime(int num)
		{
			bool flag=true;

			for(int i=2; i<=Math.Sqrt(num); i++)
				if(num%i==0)
					flag=false;

			return flag;
		}

		/* Get N */
		public int getN(int a, int b)
		{
			return a*b;
		}

		/* Get phi of N */
		public int getPhiN(int a, int b)
		{
			return (a-1)*(b-1);
		}

		/* Checks whether two numbers are co-prime */
		public bool coPrime(int a, int b)
		{
			bool flag=true;
			List<int> list=new List<int>();
			int min=Math.Min(a,b);

			for(int i=1; i<=min; i++)
				if(a%i==0 && b%i==0)
					list.Add(i);
			
			if(list.Count>1)
				flag=false;

			return flag;
		}

		/* Get e */
		public int getE(int x)
		{
			for(int i=2; i<x; i++)
				if(coPrime(i,x))
					return i;

			return -1;
		}


		/* Get d */
		public int getD(int iNum1,int iNum2)
		{
			int a1,a2,a3,b1,b2,b3,t1,t2,t3,q;
			a1=1;
			a2=0;
			a3=iNum1;
			b1=0;
			b2=1;
			b3=iNum2;

			while(b3!=1)
			{
				q=a3/b3;
				t1=a1-(q*b1);
				t2=a2-(q*b2);
				t3=a3-(q*b3);
				a1=b1;
				a2=b2;
				a3=b3;
				b1=t1;
				b2=t2;
				b3=t3;
			}
			
			if(b2<0)
				b2=b2+iNum1;

			return b2;
		}

		/* Get md5 hash */
		public string getMD5Hash(string input)
		{
			MD5 md5 = MD5.Create();
			byte[] inputBytes = Encoding.ASCII.GetBytes(input);
			byte[] hash = md5.ComputeHash(inputBytes);

			StringBuilder sb = new StringBuilder();

			for (int i = 0; i < hash.Length; i++)
				sb.Append(hash[i].ToString("X2"));

			return sb.ToString();
		}

		/* Alternate method to get d */
		public int getMyD(int phi, int e)
		{
			int d=1;

			while((e*d-1)%phi!=0)
				d++;

			return d;
		}

		/* get byte array from string */
		public byte[] stringToByte(string input)
		{
			byte[] array = Encoding.ASCII.GetBytes(input);
			return array;
		}

		/* gets the message from sender */
		public string get_message()
		{
			string x=null;
			Console.WriteLine("Message:");
			x=Console.ReadLine();
			return x;
		}

		/* send encrypted message */
		public void send()
		{
			string message=get_message();	/* take the message*/
			byte [] a=stringToByte(message);	/* convert it into byte array */

		}

		/* get two prime numbers from user */
		public void get_primes(ref int a, ref int b)
		{
			string n1="";
			string n2="";
			int num1=0;
			int num2=0;
			Console.WriteLine ("Enter a prime number:");
			n1=Console.ReadLine();
			Console.WriteLine ("Enter another prime number:");
			n2=Console.ReadLine();
			Int32.TryParse(n1, out num1);
			Int32.TryParse(n2, out num2);

			if(isPrime(num1) && isPrime(num2))
			{
				a=num1;
				b=num2;
			}

			else
				get_primes(ref a, ref b);
		}
	}
}