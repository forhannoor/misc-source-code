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
			string x=Util.readFromFile("test.txt");
			Console.WriteLine (x);
			byte [] arr=r.simpleStringToByte(x);
			Util.print(arr);
			string content=r.simpleByteToString(arr);
			Console.WriteLine (content);

			int a=3;
			int b=13;
			int n=r.getN(a,b);
			Console.WriteLine ("N:"+n);
			int phi=r.getPhiN(a,b);
			Console.WriteLine ("PHI:"+phi);
			int e=r.getE(phi);
			int d=r.getMyD(phi, e);
			Console.WriteLine ("E:"+e);
			Console.WriteLine ("D:"+d);
			int [] cipherText=r.getCipherText(arr, e, n);
			Console.WriteLine ("Cipher Text:");
			Util.print(cipherText);
			Console.WriteLine ();
			byte [] plainText=r.getPlainText(cipherText,d,n);
			Console.WriteLine ("Plain Text:");
			Util.print(plainText);
		}
	}
}