/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author Forhan
 */
public class Sale {
    private int id;
    public static ArrayList<Product> products = new ArrayList<Product>();
    public static ArrayList<SalesLineItem> salesLineItems = new ArrayList<SalesLineItem>();
    private Date d;
    private double total;
    
    public Sale(int i){
        id = i;
        d = new Date();
        total = 0;
    }
    
    public void setTotal(double amount){
        this.total = amount;
    }
    
    public double getTotal(){
        return this.total;
    }
    
    public void addToProductList(Product p){
        Sale.products.add(p);
    }
    
    public void addToSalesLineItemList(SalesLineItem sli){
        Sale.salesLineItems.add(sli);
        this.total += sli.getSubTotal();
    }
}