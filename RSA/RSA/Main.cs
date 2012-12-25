using System;
using Gtk;

namespace MyRsa
{
	class MainClass
	{
		public static void Main (string[] args)
		{
//			Application.Init ();
//			MainWindow win = new MainWindow ();
//			win.Show ();
//			Application.Run ();
			Rsa r= new Rsa();
			string x=Util.readFromFile("INPUT.txt");
			//Console.WriteLine (x);
			byte [] arr=r.simpleStringToByte(x);
			Console.WriteLine ("Original Content: ");
			Console.WriteLine (x);
			Console.WriteLine ();
			Console.WriteLine ("Message in byte form:");
			Util.print(arr);
			string content=r.simpleByteToString(arr);
			//Console.WriteLine (content);

			int a=7;
			int b=19;
			int n=r.getN(a,b);
			Console.WriteLine ("N:"+n);
			int phi=r.getPhiN(a,b);
			Console.WriteLine ("PHI:"+phi);
			int e=r.getE(phi);
			int d=r.getMyD(phi, e);
			Console.WriteLine ("E:"+e);
			Console.WriteLine ("D:"+d);
			int [] cipherText=r.parallelGetCipherText(arr,e,n);
			Console.WriteLine ();
			Console.WriteLine ("Cipher Text using parallel execution:");
			Util.print(cipherText);
			Console.WriteLine ();
			int [] seqCipherText=r.getCipherText(arr,e,n);
			Console.WriteLine ("Cipher Text using sequential execution:");
			Util.print(seqCipherText);
			Console.WriteLine ();
			byte [] plainText=r.getMyPlainText(cipherText,d,n);
			Console.WriteLine ("Deciphered Message in byte form:");
			Util.print(plainText);
			Console.WriteLine ();
			string textBack=r.simpleByteToString(plainText);
			Console.WriteLine ("Deciphered Message in text form:");
			Console.WriteLine (textBack);
		}
	}
}