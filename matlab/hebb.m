% hebb rule 
% date: 1 April, 2013

function weight=hebb(p1, p2, t1, t2)
    % normalize patterns
    p1=normc(p1);
    p2=normc(p2);
    % calculate weight
    w=[t1 t2]*[p1'; p2'];
    weight=w;
end