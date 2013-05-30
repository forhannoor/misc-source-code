/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package nextgenpos;

/**
 *
 * @author Forhan
 */
public class AbsoluteDiscountOverThresholdPricingStrategy implements ISalePricingStrategy{
    private double discount;
    private double threshold;
    
    public AbsoluteDiscountOverThresholdPricingStrategy(double d, double t){
        discount = d;
        threshold = t;
    }
    
    public double getTotal(Sale s){
        return (s.getTotal() > this.threshold) ? s.getTotal() - this.discount : s.getTotal();
    }
}