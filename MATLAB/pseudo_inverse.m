% pseudo inverse rule
% given P and T it returns calculated weight
% date: 2 April, 2013

function weight = pseudo_inverse(P, T)
    % calculate P+
    Pplus=pinv(P'*P)*P';
    % calculate weight
    weight=T*Pplus;
end