/*
 * Generates the form to collect user input and display result
 */

using System;
using System.Windows.Forms;

class BMICalculator
{
    // GUI components
    private Form form;
    private TextBox height;
    private TextBox weight;
    private TextBox bmi;
    private TextBox status;
    private RadioButton meter;
    private RadioButton inch;
    private RadioButton kg;
    private RadioButton lb;
    private Button calculate;
    private Button clear;
    // GUI parameters
    private const int SPACE = 20;
    private const int HALFSPACE = 10;
    private const int TEXTBOX_WIDTH = SPACE * 10;
    private const string TITLE = "BMI Calculator";

    public BMICalculator()
    {
        GroupBox heightGroup = new GroupBox { Top = HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH + SPACE, FlatStyle = FlatStyle.Flat, Text = "Height" };

        meter = new RadioButton { Top = SPACE, Left = HALFSPACE, Text = "meter", Width = TEXTBOX_WIDTH / 3 };

        inch = new RadioButton { Top = SPACE, Left = meter.Left + meter.Width, Text = "inch", Width = TEXTBOX_WIDTH / 3, Checked = true };

        height = new TextBox { Top = inch.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH };
        
        heightGroup.Controls.Add(meter);
        heightGroup.Controls.Add(inch);
        heightGroup.Controls.Add(height);
        heightGroup.Height = height.Bottom + HALFSPACE;
        
        GroupBox weightGroup = new GroupBox { Top = heightGroup.Bottom + SPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH + SPACE, FlatStyle = FlatStyle.Flat, Text = "Weight" };

        kg = new RadioButton { Top = SPACE, Left = HALFSPACE, Text = "kg", Width = TEXTBOX_WIDTH / 3 };

        lb = new RadioButton { Top = SPACE, Left = kg.Left + kg.Width, Text = "lb", Width = TEXTBOX_WIDTH / 3, Checked = true };

        weight = new TextBox { Top = lb.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH };
        
        weightGroup.Controls.Add(kg);
        weightGroup.Controls.Add(lb);
        weightGroup.Controls.Add(weight);
        weightGroup.Height = weight.Bottom + HALFSPACE;

        GroupBox resultGroup = new GroupBox { Top = HALFSPACE, Left = heightGroup.Width + SPACE, FlatStyle = FlatStyle.Flat, Text = "Result" };
        bmi = new TextBox { Top = SPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH, ReadOnly = true };
        status = new TextBox { Top = bmi.Bottom + HALFSPACE, Left = HALFSPACE, Width = TEXTBOX_WIDTH, ReadOnly = true };

        resultGroup.Controls.Add(bmi);
        resultGroup.Controls.Add(status);
        resultGroup.Height = heightGroup.Height;
        resultGroup.Width = heightGroup.Width;

        calculate = new Button { Left = resultGroup.Left, Top = weightGroup.Top + HALFSPACE / 2, Width = weightGroup.Width / 2 - HALFSPACE, Text = "Calculate" };
        calculate.Click += BtnClicked;

        clear = new Button { Left = calculate.Right + SPACE, Top = calculate.Top, Width = weightGroup.Width / 2 - HALFSPACE, Text = "Clear" };
        clear.Click += BtnClicked;

        form = new Form {
            Text = TITLE,
            Width = resultGroup.Right + SPACE,
            Height = weightGroup.Bottom + SPACE * 2,
            StartPosition = FormStartPosition.Manual,
            Left = resultGroup.Right + SPACE - 200,
            Top = weightGroup.Bottom + SPACE * 2 - 100,
            FormBorderStyle = FormBorderStyle.FixedSingle
        };

        form.Controls.Add(heightGroup);
        form.Controls.Add(weightGroup);
        form.Controls.Add(calculate);
        form.Controls.Add(clear);
        form.Controls.Add(resultGroup);
        form.ShowDialog();
    }

    private void BtnClicked(object sender, EventArgs e)
    {
        Button source = sender as Button;

        // calculate BMI
        if (source == calculate)
        {
            try
            {
                string hUnit = (meter.Checked) ? meter.Text : inch.Text;
                string wUnit = (kg.Checked) ? kg.Text : lb.Text;
                double h = double.Parse(height.Text);
                double w = double.Parse(weight.Text);
                BMI b = new BMI(hUnit, h, wUnit, w);
                bmi.Text = String.Format("{0:0.##}", b.Value());
                status.Text = b.Status();
            }
            catch (Exception ex)
            {
                status.Text = ex.Message;
            }
        }

        // clear all fields
        else if (source == clear)
        {
            height.Clear();
            weight.Clear();
            bmi.Clear();
            status.Clear();
            inch.Checked = true;
            lb.Checked = true;
        }
    }

    public static void Main()
    {
        new BMICalculator();
    }
}