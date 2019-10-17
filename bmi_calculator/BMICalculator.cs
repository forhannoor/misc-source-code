using System;
using System.Windows.Forms;

class BMICalculator
{
    private const int SPACE = 20;
    private const int HALFSPACE = 10;
    private const int TEXTBOX_WIDTH = 200;

    private Form _form;
    private TextBox _heightBox;
    private TextBox _weightBox;
    private TextBox _bmiBox;
    private TextBox _statusBox;
    private RadioButton _meterButton;
    private RadioButton _inchButton;
    private RadioButton _kgButton;
    private RadioButton _lbButton;
    private Button _calculateButton;
    private Button _clearButton;
    private BMI _bmi;
    
    public BMICalculator()
    {
        _bmi = new BMI();
        // Control block for height.
        GroupBox heightGroup = new GroupBox { Top = HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH + SPACE, 
            FlatStyle = FlatStyle.Flat, Text = "Height" };
        _meterButton = new RadioButton { Top = SPACE, Left = HALFSPACE, Text = "meter", Width = TEXTBOX_WIDTH / 3 };
        _inchButton = new RadioButton { Top = SPACE, Left = _meterButton.Left + _meterButton.Width, Text = "inch", Width = TEXTBOX_WIDTH / 3, 
            Checked = true };
        _heightBox = new TextBox { Top = _inchButton.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH };
        heightGroup.Controls.Add(_meterButton);
        heightGroup.Controls.Add(_inchButton);
        heightGroup.Controls.Add(_heightBox);
        heightGroup.Height = _heightBox.Bottom + HALFSPACE;

        // Control block for weight.
        GroupBox weightGroup = new GroupBox { Top = heightGroup.Bottom + SPACE, Left = HALFSPACE, 
            Width = TEXTBOX_WIDTH + SPACE, FlatStyle = FlatStyle.Flat, Text = "Weight" };
        _kgButton = new RadioButton { Top = SPACE, Left = HALFSPACE, Text = "kg", Width = TEXTBOX_WIDTH / 3 };
        _lbButton = new RadioButton { Top = SPACE, Left = _kgButton.Left + _kgButton.Width, Text = "lb", Width = TEXTBOX_WIDTH / 3, 
            Checked = true };
        _weightBox = new TextBox { Top = _lbButton.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH };
        weightGroup.Controls.Add(_kgButton);
        weightGroup.Controls.Add(_lbButton);
        weightGroup.Controls.Add(_weightBox);
        weightGroup.Height = _weightBox.Bottom + HALFSPACE;

        // Control block for result.
        GroupBox resultGroup = new GroupBox { Top = HALFSPACE, Left = heightGroup.Width + SPACE, 
            FlatStyle = FlatStyle.Flat, Text = "Result" };
        _bmiBox = new TextBox { Top = SPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH, ReadOnly = true };
        _statusBox = new TextBox { Top = _bmiBox.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH, ReadOnly = true };
        resultGroup.Controls.Add(_bmiBox);
        resultGroup.Controls.Add(_statusBox);
        resultGroup.Height = heightGroup.Height;
        resultGroup.Width = heightGroup.Width;

        // Calculate button.
        _calculateButton = new Button { Left = resultGroup.Left, Top = weightGroup.Top + HALFSPACE / 2, 
            Width = weightGroup.Width / 2 - HALFSPACE, Text = "Calculate" };
        _calculateButton.Click += CalculateClicked;
        // Clear button.
        _clearButton = new Button { Left = _calculateButton.Right + SPACE, Top = _calculateButton.Top, 
            Width = weightGroup.Width / 2 - HALFSPACE, Text = "Clear" };
        _clearButton.Click += ClearClicked;

        // Form.
        _form = new Form {
            Text = "BMI Calculator",
            Width = resultGroup.Right + SPACE,
            Height = weightGroup.Bottom + SPACE * 2,
            StartPosition = FormStartPosition.Manual,
            Left = resultGroup.Right + SPACE - 200,
            Top = weightGroup.Bottom + SPACE * 2 - 100,
            FormBorderStyle = FormBorderStyle.FixedSingle
        };

        _form.Controls.Add(heightGroup);
        _form.Controls.Add(weightGroup);
        _form.Controls.Add(_calculateButton);
        _form.Controls.Add(_clearButton);
        _form.Controls.Add(resultGroup);
        _form.ShowDialog();
    }

    // Invoked when calculate button is clicked.
    // Processes user input and display BMI value and status.
    private void CalculateClicked(object sender, EventArgs e)
    {
        try
        {
            // Unit of height.
            var unitHeight = (_meterButton.Checked) ? UnitHeight.Meter : UnitHeight.Inch;
            // Unit of weight.
            var unitWeight = (_kgButton.Checked) ? UnitWeight.Kg : UnitWeight.Lb;
            // Height.
            var h = double.Parse(_heightBox.Text);
            // Weight.
            var w = double.Parse(_weightBox.Text);
            // Initialize BMI object.
            _bmi.CalculateBMI(unitHeight, h, unitWeight, w);
            // BMI value.
            var value = _bmi.Value;
            _bmiBox.Text = String.Format("{0:0.##}", value);
            // BMI status.
            _statusBox.Text = _bmi.Status(value);
        }
        catch (FormatException exception)
        {
            _statusBox.Text = exception.Message;
        }
        catch(ArgumentNullException exception)
        {
            _statusBox.Text = exception.Message;
        }
    }

    // Invoked when clear button is clicked.
    // Resets input fields.
    private void ClearClicked(object sender, EventArgs e)
    {
        _heightBox.Clear();
        _weightBox.Clear();
        _bmiBox.Clear();
        _statusBox.Clear();
        _inchButton.Checked = true;
        _lbButton.Checked = true;
    }

    public static void Main()
    {
        new BMICalculator();
    }
}