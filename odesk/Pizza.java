package forhan;

import java.util.Scanner;

public class Pizza {

	/*
	 * calculates price including tax
	 * @return double
	 */
	public static double calculatePriceWithTax(double price){
		
		return price * (1 + 0.07);
	}
	
	/*
	 * calculates delivery fee if any
	 * @return double
	 */
	public static double deliveryFee(double price){
		if(price < 10){
			return 3;
		}
		
		else if(price >= 10 && price <= 20){
			return 2;
		}
		
		else if(price >= 20 && price <= 30){
			return 1;
		}
		
		else{
			return 0;
		}
	}
	
	/*
	 * calculates basic pricing for total number of pizza
	 * @return double
	 */
	public static double calculateCost(int shape, int diameter, int length, int width, int numToppings, int typeDough){
		
		double a = area(shape, diameter, length, width);
		double v = volume(a, typeDough);
		double cost = a * (0.036 * a + numToppings * 0.025 * a) + v * 0.019;
		return cost;
	}
	
	/*
	 * calculates area of a pizza
	 * @return double
	 */
	public static double area(int shape, int diameter, int length, int width){
		
		double a = 0.0;
		
		if(shape == 1){ // round pizza
			a = Math.PI * (diameter / 2) * (diameter / 2);
		}
		
		else if(shape == 2){ // rectangular pizza
			a = length * width;
		}
		
		return a;
	}
	
	/*
	 * calculates volume of a pizza
	 * @return double
	 */
	public static double volume(double a, int typeDough){
		
		double height = 0.0;
		
		switch(typeDough){
			
			case 1:
				height = 0.1;
				break;
				
			case 2:
				height = 0.25;
				break;
				
			case 3:
				height = 0.5;
				break;
				
			case 4:
				height = 0.9;
				break;
		}
		
		return a * height;
	}
	
	/*
	 * calculates cost for cheesy crust
	 * @return double
	 */
	public static double calculateChessyCrustCost(int shape, int diameter, int length, int width){
		return size(shape, diameter, length, width) * 0.02;
	}
	
	/*
	 * calculates size of pizza
	 * @return double
	 */
	public static double size(int shape, int diameter, int length, int width){
		if(shape == 1){ // round pizza
			return 2 * Math.PI * (diameter / 2);
		}
		
		else{ // rectangular pizza
			return 2 * (length + width);
		}
	}
	
	public static void main(String[] args) {

		int shape; // 1 => round, 2 => rectangular
		int length = 0;
		int width = 0;
		int diameter = 0;
		int numToppings = 0; // number of toppings
		int typeDough; // 1 => thin & crusty, 2 => hand tossed, 3 => pan, 4 => texas toast
		boolean cheesyCrust = false; // true => add, false => don't add
		int lengthCrust = 0;
		int numPizza; // number of pizzas ordered
		int orderType; // 1 => delivery, 2 => take-out
		
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("This program helps you to order pizza based on your personal preferences.");
		System.out.println("It notes your choices and calculates total cost for you, including tax and even delivery fee if applicable.");
		System.out.println("Please fill out information for the following:");
		System.out.println();
		System.out.println("Pizza style:");
		System.out.println("1. Round Pizza");
		System.out.println("2. Rectangular Pizza");
		shape = scanner.nextInt();
		
		if(shape == 1){
			System.out.println("Diameter:");
			diameter = scanner.nextInt();
		}
		
		else if(shape == 2){
			System.out.println("Length:");
			length = scanner.nextInt();
			System.out.println("Width:");
			width = scanner.nextInt();
		}
		
		System.out.println("Number of toppings:");
		numToppings = scanner.nextInt();
		System.out.println("Type of dough:");
		System.out.println("1. Thin & Crusty");
		System.out.println("2. Classic Hand Tossed");
		System.out.println("3. Pan");
		System.out.println("4. Texas Toast");
		typeDough = scanner.nextInt();
		
		if(typeDough != 1){
			System.out.println("Do you want to add cheest crust?[true/false]");
			cheesyCrust = scanner.nextBoolean();
			
			if(cheesyCrust == true){
				System.out.println("Length of cheesy crust:");
				lengthCrust = scanner.nextInt();
			}
		}
		
		System.out.println("How many pizzas do you want to order?");
		numPizza = scanner.nextInt();
		System.out.println("Select your receival method:");
		System.out.println("1. Delivery");
		System.out.println("2. Take away");
		orderType = scanner.nextInt();
		
		double a = area(shape, diameter, length, width);
		double v = volume(a, typeDough);
		double baseCost = calculateCost(shape, diameter, length, width, numToppings, typeDough);
		double crustCost = 0.0;
		
		if(cheesyCrust == true){
			crustCost = calculateChessyCrustCost(shape, diameter, lengthCrust, width);
		}
		
		double costOne = calculatePriceWithTax(baseCost + crustCost);
		double deliveryCharge = 0.0;
		
		if(orderType == 1){ // delivery
			costOne += deliveryFee(costOne);
		}
		
		double totalCost = deliveryFee(costOne * numPizza) + (costOne * numPizza);
		System.out.println("Area: " + a);
		System.out.println("Volume: " + v);
		System.out.println("Base Cost: " + baseCost);
		System.out.println("Cost for one pizza: " + costOne);
		System.out.print("Your order has been processed. Total cost: ");
		System.out.printf("%.2f", totalCost);
		System.out.println();
		System.out.println("Thank you for using our service.");
	}
}