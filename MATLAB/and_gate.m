% perceptron to perform and operation
% date: 27 March, 2013

function [weight, bias]=and_gate()    
    % patterns
    p1=[0;0];
    p2=[0;1];
    p3=[1;0];
    p4=[1;1];
    
    % targets
    t1=0;
    t2=0;
    t3=0;
    t4=1;
    
    w=rand(1,2);
    b=rand(1);
    
    % initial errors
    e1=1;
    e2=1;
    e3=1;
    e4=1;
    
    % while there is any error
    while(e1==1 || e2==1 || e3==1 || e4==1)
        % calculate error
        e1=t1-hardlim(w*p1+b);
        % adjust weight
        w=w+e1*p1';
        % adjust bias
        b=b+e1;
        
        % calculate error
        e2=t2-hardlim(w*p2+b);
        % adjust weight
        w=w+e2*p2';
        % adjust bias
        b=b+e2;
        
        % calculate error
        e3=t3-hardlim(w*p3+b);
        % adjust weight
        w=w+e3*p3';
        % adjust bias
        b=b+e3;
        
        % calculate error
        e4=t4-hardlim(w*p4+b);
        % adjust weight
        w=w+e4*p4';
        % adjust bias
        b=b+e4;
    end
    
    % weight and bias adjusted, return those
    weight=w;
    bias=b;
end