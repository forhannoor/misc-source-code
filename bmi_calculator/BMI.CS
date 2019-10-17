public enum UnitHeight
{
    Inch,
    Meter
}

public enum UnitWeight
{
    Lb,
    Kg
}

public class BMI
{
    // Different stages of BMI type.
    private readonly string [] STATUS = {"Underweight", "Normal Weight", "Overweight", "Obese"};
    private double _height, _weight, _value;

    // Calculates BMI value given height and weight parameters.
    public void CalculateBMI(UnitHeight unitHeight, double height, UnitWeight unitWeight, double weight)
    {
        _height = height;
        _weight = weight;

        if(unitHeight == UnitHeight.Inch)
        {
            _height *= 0.0254;
        }

        if(unitWeight == UnitWeight.Lb)
        {
            _weight /= 2.2;
        }

        _value = _weight / (_height * _height);
    }
	
    public double Value
    {
        get { return _value; }
    }

    // Returns status/feedback about supplied BMI value.
    public string Status(double value)
    {
        int index;

        // If underweight.
        if (_value < 18.5)
        {
            index = 0;
        }
        
        // If normal weight.
        else if (_value >= 18.5 && _value <= 24.9)
        {
            index = 1;
        }
        
        // If overweight.
        else if (_value >= 25 && _value <= 29.9)
        {
            index = 2;
        }
        
        // If obese.
        else
        {
            index = 3;
        }

        return STATUS[index];
    }
}