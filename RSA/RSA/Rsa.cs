using System;
using System.Collections.Generic;
using System.Security.Cryptography;
using System.Text;
using Mono.Security.Cryptography;
using Mono.Math;


namespace MyRsa
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
		/* n=prime1*prime2 */
		public int getN(int a, int b)
		{
			return a*b;
		}


		/* Get phi of N */
		/* phi=(prime1-1)*(prime2-1) */
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
		/* e and phi should be coPrime */
		public int getE(int phi)
		{
			for(int i=2; i<phi; i++)
				if(coPrime(i,phi))
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
		/* d*e=1(mod phi) */
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


		/* get string from byte array */
		public string byteToString(byte [] b)
		{
			string c=Encoding.UTF8.GetString(b);
			return c;
		}

		
		/* get ciphertext */
		/* 1<m<n or it will not work */
		public int[] getCipherText(byte [] a, int e, int n)
		{
			int length=a.Length;
			int [] c= new int[length];
			
			for(int i=0; i<length; i++)
			{
				int temp=a[i];

				/* if temp=199 which represents blankspace, handle it differently */
				if(temp==199)
				{
					c[i]=temp;
					continue;
				}

				temp=(int)Math.Pow(temp, e);
				temp%=n;
				c[i]=temp;
			}
			
			return c;
		}


		/* get plaintext */
		public byte[] getPlainText(int [] a, int d, int n)
		{
			int l=a.Length;
			byte [] r=new byte[l];

			for(int i=0; i<a.Length; i++)
			{
				double temp=a[i];

				/* if temp=199 which represents blankspace, handle it differently */
				if(temp==199)
				{
					r[i]=(byte)temp;
					continue;
				}

				temp=Math.Pow(temp, d);
				temp%=n;
				r[i]=(byte)temp;
			}

			return r;
		}


		/* get plaintext using biginteger class. This is required because default int cannot handle large modpow function */
		public byte[] getMyPlainText(int [] a, int d, int n)
		{
			int l=a.Length;
			byte [] r=new byte[l];
			
			for(int i=0; i<a.Length; i++)
			{
				int temp=a[i];
				
				/* if temp=199 which represents blankspace, handle it differently */
				if(temp==199)
				{
					r[i]=(byte)temp;
					continue;
				}

				BigInteger bi=temp;
				bi=bi.ModPow(d,n);
				string tempString=bi.ToString();
				int g=Int32.Parse(tempString);
				r[i]=(byte)g;
			}
			
			return r;
		}


		/* exponentiation by multiplying */
		/* useless */
		public double getModulusExponent(int b, int exponent, int modulus)
		{
			int temp;
			double r=1;

			if(exponent%2==0)	// even
			{
				temp=1;

				while(exponent>0)
				{
					temp=temp*b*b;
					exponent-=2;
					r*=(temp%modulus);
				}
			}

			else
			{
				temp=b;
				exponent-=1;
				r*=modulus;

				while(exponent>0)
				{
					temp=temp*b*b;
					exponent-=2;
					r*=(temp%modulus);
				}
			}

			return r%modulus;
		}


		/* using ascii value directly is a problem as it makes calculations pretty large */
		/* instead use original value-55 */
		public byte[] simpleStringToByte(string input)
		{
			int s=input.Length;
			byte [] r =new byte[s];

			for(int i=0; i<s; i++)
			{
				char temp=input[i];
				byte t=(byte)temp;

				/* if the char represents a digit, keep it so */
				if(Char.IsDigit(temp))	
					t=(byte)(t-48);

				/* if the char is blank space, make it 199 */
				else if(temp==' ')
					t=(byte)199;

				else
					t=(byte)(t-55);

				r[i]=t;
			}

			return r;
		}


		/* char x=byteValue+55 */
		public string simpleByteToString(byte [] c)
		{
			int s=c.Length;
			string z="";

			for(int i=0; i<s; i++)
			{
				byte temp=c[i];

				/* if byte represents a number, handle it that way */
				if(temp>=0 && temp<=9)
					temp=(byte)(temp+48);

				/* byte 199 represents blank space, so consider it properly */
				else if(temp==199)
					temp=(byte)32;

				else
					temp=(byte)(temp+55);

				char x=(char)temp;
				z+=x;
			}
			
			return z;
		}
	}
}