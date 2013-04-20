% date: 19 April, 2013

function [weight1, bias1, weight2, bias2] = backpropagation_1_1_1_tansig(w1, b1, w2, b2, p, t, alfa, num)
    for(i = 0 : 1 : num)
        a0 = p;
        a1 = tansig(w1 * a0 + b1);      % first layer output
        a2 = tansig(w2 * a1 + b2);      % second layer output
        e = t - a2;                     % error
        s2 = -2 * (1 - a2 * a2) * e;    % sensitivity of second layer
        s1 = (1 - a1 * a1) * w2' * s2;  % sensitivity of first layer
        w2 = w2 - alfa * s2 * a1';      % adjust weight
        b2 = b2 - alfa * s2;            % adjust bias
        w1 = w1 - alfa * s1 * a0';      % adjust weight
        b1 = b1 - alfa * s1;            % adjust bias
        weight1 = w1;
        weight2 = w2;
        bias1 = b1;
        bias2 = b2;
    end
end