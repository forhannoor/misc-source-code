/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

/**
 *
 * @author Forhan
 */
public class Product {
    private String id;
    private String name;
    private String brand;
    private int quantity;
    private double price;
    
    public Product(String i, String n, String b, int q, double p){
        id = i;
        name = n;
        brand = b;
        quantity = q;
        price = p;
        Sale.products.add(this);
    }
    
    public String getId(){
        return this.id;
    }
    
    public String getName(){
        return this.name;
    }
    
    public String getBrand(){
        return this.brand;
    }
    
    public double getPrice(){
        return this.price;
    }
    
    public int getQuantity(){
        return this.quantity;
    }
    
    public static void initializeProducts(){
        Product x;
        x = new Product("1", "Rice", "Pran", 100, 40);
        x = new Product("2", "Dal", "Square",  100, 140);
        x = new Product("3", "Coke", "Coca Cola",  100, 60);
        x = new Product("4", "Pen", "Econo",  100, 5);
        x = new Product("5", "Razor", "Gillette",  100, 80);
    }
    
    public static Product findProduct(String id){
        for(int i = 0; i < Sale.products.size(); i++){
            if(id.compareTo(Sale.products.get(i).getId()) == 0){
                return Sale.products.get(i);
            }
        }
        
        return null;
    }
}