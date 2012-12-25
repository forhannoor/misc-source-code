using System;
using System.IO;

namespace MyRsa
{
	public class Util
	{
		public Util ()
		{
		}


		/* prints int array */
		public static void print(int [] a)
		{
			for(int i=0; i<a.Length; i++)
				Console.Write(a[i]);
			
			Console.WriteLine ();
		}


		/* prints byte array */
		public static void print(byte [] a)
		{
			for(int i=0; i<a.Length; i++)
				Console.Write(a[i]);
			
			Console.WriteLine ();
		}


		/* reads a file and returns the content as string */
		public static string readFromFile(string fileName)
		{
			FileStream fin=null;
			int i;
			string content="";

			/* try to open the file */
			try
			{
				fin=new FileStream(fileName, FileMode.Open);
			}
			catch(IOException ioe)
			{
				Console.WriteLine (ioe.Message);
			}

			/* read upto end of file */
			do
			{
				i=fin.ReadByte();

				if(i!=-1)
					content+=(char)i;
			}
			while(i!=-1);

			if(fin!=null)
				fin.Close();

			return content;
		}
	}
}