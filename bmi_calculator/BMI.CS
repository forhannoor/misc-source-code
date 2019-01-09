/*
 * Handles BMI calculation
 */

public class BMI
{
    private double height, weight, value;

	public BMI(string hu, double h, string wu, double w)
	{
        height = (hu.Equals("inch")) ? h * 0.0254 : h;
        weight = (wu.Equals("lb")) ? w / 2.2 : w;
        value = weight / (height * height);
    }
	
    // return BMI value
	public double Value() { return value; }

    // return weight status based on BMI
    public string Status()
    {
        string s;

        if (value < 18.5)
        {
            s = "underweight";
        }
        
        else if (value >= 18.5 && value <= 24.9)
        {
            s = "normal weight";
        }
        
        else if (value >= 25 && value <= 29.9)
        {
            s = "overweight";
        }
        
        else
        {
            s = "obese";
        }

        return s;
    }
}