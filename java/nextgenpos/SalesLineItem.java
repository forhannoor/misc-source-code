/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

import java.util.ArrayList;

/**
 *
 * @author Forhan
 */
public class SalesLineItem {
    private Product p;
    private int quantity;
    private double subTotal;
    
    public SalesLineItem(Sale s, Product x, int q){
        p = x;
        quantity = q;
        subTotal = getSubTotal();
        s.addToSalesLineItemList(this);
    }
    
    /* returns subtotal for a sales line item */
    public double getSubTotal(){
        return this.p.getPrice() * this.quantity;
    }
    
    public Product getProduct(){
        return this.p;
    }
    
    public int getQuantity(){
        return this.quantity;
    }
}