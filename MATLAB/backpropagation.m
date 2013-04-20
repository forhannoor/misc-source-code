% date: 19 April, 2013

function [weight1, bias1, weight2, bias2] = backpropagation(w1, b1, w2, b2, p, alfa)
    a0 = p; 
    % output of first neuron from first layer
    a1_1 = logsig(w1(1) * p + b1(1));   
    % output of second neuron from first layer
    a1_2 = logsig(w1(2) * p + b1(2));
    a1 = logsig(w1 * a0 + b1);  % output of first layer
    a2 = purelin(w2 * a1 + b2); % output of second layer
    e = 1 + sin((pi * p ) / 4) - a2;    % calculate error
    s2 = -2 * [1] * e;  % sensitivity of last layer
    % sensitivity of first layer
    s1 = [(1 - a1_1) * a1_1 0; 0 (1 - a1_2) * a1_2] * w2' * s2;
    w2 = w2 - alfa * s2 * a1';  % adjust weight
    b2 = b2 - alfa *s2;         % adjust bias
    w1 = w1 - alfa * s1 * a0';  % adjust weight
    b1 = b1 - alfa *s1;         % adjust bias
    % return adjusted values
    weight1 = w1;
    weight2 = w2;
    bias1 = b1;
    bias2 = b2;
end