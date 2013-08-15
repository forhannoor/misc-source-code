% test problem from book section 4-9
% date: 27 March, 2013

function [weight, bias]=test_problem()
    % patterns
    p1=[1;2];
    p2=[-1;2];
    p3=[0;-1];
    
    % targets
    t1=1;
    t2=0;
    t3=0;
    
    % initial errors
    e1=1;
    e2=1;
    e3=1;
    
    % start with random weight and bias
    w=rand(1,2);
    b=rand(1);
    
    % while there is an error, adjust weight and bias
    while(e1~=0 || e2~=0 || e3~=0)
        e1=t1-hardlim(w*p1+b);
        w=w+e1*p1';
        b=b+e1;
        
        e2=t2-hardlim(w*p2+b);
        w=w+e2*p2';
        b=b+e2;
        
        e3=t3-hardlim(w*p3+b);
        w=w+e3*p3';
        b=b+e3;
    end
    
    % return adjusted weight and bias
    weight=w;
    bias=b;
end