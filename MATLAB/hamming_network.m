% date: 20 April, 2013

function distance = hamming_network(p1, p2, S, p)
    w1 = [p1'; p2'];    % weight of feedforward layer
    epsilon = (1 / (S - 1)) / 2;
    num_features = size(p1);
    b = [num_features(1); num_features(1)]; % bias
    a1 = purelin(w1 * p + b);  % output of feedforward layer
    a2 = a1;    % first output of recurrent layer
    w2 = [1 -epsilon; -epsilon 1];  % weight of recurrent layer
    a_size = size(a2);
    aNew = rand(a_size(1), a_size(2));
    
    while(true)
        aNew = poslin(w2 * a2); % current output of recurrent layer
        
        if(isequal(aNew, a2))   % if previous and current output are equal
            break;
        end
        
        a2 = aNew;  % current output is previous output for next iteration
    end
    
    distance = aNew;    % return hamming distance
end