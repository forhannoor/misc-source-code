% date: 20 April, 2013

function [weight, bias] = multiple_neuron_perceptron(p1, p2, t1, t2)
    % initial errors
    e1 = 1;
    e2 = 1;
    
    w = rand(1, 3); % random weight
    b = rand(1);    % random bias
    
    while(e1 ~= 0 || e2 ~= 0)
        e1=t1-hardlim(w*p1+b);
        w=w+e1*p1';
        b=b+e1;
        
        e2=t2-hardlim(w*p2+b);
        w=w+e2*p2';
        b=b+e2;
    end
    
    weight = w;
    bias = b;
end