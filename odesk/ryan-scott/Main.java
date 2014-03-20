import java.io.File;
import java.io.FileNotFoundException;
import java.util.ArrayList;
import java.util.Scanner;

class Owl {

	private double bodyLen;
	private double wingLen;
	private double bodyWidth;
	private double wingWidth;
	private String owlType;

	public Owl(double bodyLen, double wingLen, double bodyWidth, double wingWidth,  String owlType){
		
		this.bodyLen = bodyLen;
		this.wingLen = wingLen;
		this.bodyWidth = bodyWidth;
		this.wingWidth = wingWidth;
		this.owlType = owlType;
	}
	
	public double mean(ArrayList <Double> li){
		
		double total = 0;
		
		for(double d: li){
			total += d;
		}
		
		return total / (double) li.size();
	}
	
	public double stddev(ArrayList <Double> li){
		
		double total = 0;
		double m = mean(li);
		
		for(double l: li){
			l = (l - m) * (l - m);
			total += l;
		}
		
		return Math.sqrt(total / (li.size() - 1));
	}
	
	public double gauss(double m, double s, double toTest){
		
		double e = 2.718281828459045;
		return (1 / (s * Math.sqrt(2 * Math.PI))) * Math.pow(e, (-1 * (toTest - m) * (toTest - m) / (2 * s * s)));
	}
}

public class Main{
	
	public static void main (String [] args){
		
		Scanner scanner = new Scanner(System.in);
		System.out.println("CSV path:");
		String path = scanner.nextLine();
		
		try{
			File file = new File(path);
			Scanner fileScanner = new Scanner(file);
		} catch(FileNotFoundException fnf){
			System.out.println(fnf.getMessage());
		}
	}
}