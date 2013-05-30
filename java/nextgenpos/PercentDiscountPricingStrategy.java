/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

/**
 *
 * @author Forhan
 */
public class PercentDiscountPricingStrategy implements ISalePricingStrategy {
    private double percentage;
    
    public PercentDiscountPricingStrategy(double p){
        percentage = p;
    }
    
    public double getTotal(Sale s){
        return s.getTotal() * (100 - this.percentage) / 100;
    }
}