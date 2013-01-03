using System;
using System.Threading;
using System.Threading.Tasks;
using System.Diagnostics;
using System.IO;
using Gtk;
using System.Text;

namespace MyRsa
{
	public partial class MainWindow: Gtk.Window
	{
		static int [] cipherText;
		static int d=0;
		static int n=0;
		
		public MainWindow (): base (Gtk.WindowType.Toplevel)
		{
			Build ();
			Title="Simple RSA Encryption Tool";
			statusbar1.Push(1,"Program Initialized");
		}
		
		protected void OnDeleteEvent (object sender, DeleteEventArgs a)
		{
			Application.Quit ();
			a.RetVal = true;
		}

		protected void OnButton1Released (object sender, EventArgs e)
		{
			statusbar1.Push(2,"Program Terminated");
			Application.Quit();
		}

		protected void OnButton2Released (object sender, EventArgs e)
		{
		}

		protected void OnFilechooserbutton2SelectionChanged (object sender, EventArgs e)
		{
			string s=Util.readFromFile(filechooserbutton2.Filename);
			textview2.Buffer.Text=s;
			statusbar1.Push(3,"File has been read");
			string hashString=Rsa.getMD5Hash(s);
			entry1.Text=hashString;
		}
		
		protected void OnButton3Released (object sender, EventArgs e)
		{
			statusbar1.Pop(4);
			Thread.Sleep(1500);
			Rsa r=new Rsa();
			string p=textview2.Buffer.Text;
			byte [] arr=r.simpleStringToByte(p);
			int a=7;
			int b=19;
			n=r.getN(a,b);
			int phi=r.getPhiN(a,b);
			int e_an=r.getE(phi);
			d=r.getMyD(phi, e_an);
			DateTime start=DateTime.Now;
			cipherText=r.parallelGetCipherText(arr,e_an,n);
			StringBuilder builder=new StringBuilder();

			foreach (int item in cipherText) {
				builder.Append(item);
			}
	
			textview3.Buffer.Text=r.SimpleIntToString(cipherText);
			TimeSpan elapsed=DateTime.Now-start;
			string eTime="Encrypted\t\t\t\t\t";
			eTime+="Total time elapsed: "+elapsed.TotalMilliseconds+" milliseconds";
			statusbar1.Push(5,eTime);
			entry3.Text="("+n+", "+e_an+")";
		}
		
		protected void OnButton4Released (object sender, EventArgs e)
		{
			Thread.Sleep(1500);
			Rsa r=new Rsa();
			DateTime start=DateTime.Now;
			byte [] plainText=r.getMyPlainText(cipherText,d,n);
			string textBack=r.simpleByteToString(plainText);
			textview4.Buffer.Text=textBack;
			TimeSpan elapsed=DateTime.Now-start;
			string eTime="Decrypted\t\t\t\t\t";
			eTime+="Total time elapsed: "+elapsed.TotalMilliseconds+" milliseconds";
			statusbar1.Push(6,eTime);
			string hashString=Rsa.getMD5Hash(textBack);
			entry2.Text=hashString;
			entry4.Text="("+n+", "+d+")";
		}
	}
}