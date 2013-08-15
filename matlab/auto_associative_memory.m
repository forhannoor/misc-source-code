% date: 20 April, 2013

function weight = auto_associative_memory(P)
    dimension = size(P);    % calculate dimension of P
    w = zeros(dimension(1), dimension(1));
    
    for(i = 1: 1: dimension(2))
        w = w + P(1: dimension(1), i) * P(1: dimension(1), i)';
    end
    
    weight = w;
end