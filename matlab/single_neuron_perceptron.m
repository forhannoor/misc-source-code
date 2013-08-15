% date: 20 April, 2013

function [weight, bias] = single_neuron_perceptron(p1, p2, p3, p4, t1, t2, t3, t4)
    % initial errors
    e1 = 1;
    e2 = 1;
    e3 = 1;
    e4 = 1;
    
    w = rand(1, 2); % random weight
    b = rand(1);    % random bias
    
    while(e1 ~= 0 || e2 ~= 0 || e3 ~= 0 || e4 ~= 0)
        e1=t1-hardlim(w*p1+b);
        w=w+e1*p1';
        b=b+e1;
        
        e2=t2-hardlim(w*p2+b);
        w=w+e2*p2';
        b=b+e2;
        
        e3=t3-hardlim(w*p3+b);
        w=w+e3*p3';
        b=b+e3;
        
        e4=t4-hardlim(w*p4+b);
        w=w+e4*p4';
        b=b+e4;
    end
    
    weight = w;
    bias = b;
end