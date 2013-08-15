% solved problem 4.5
% date: 28 March, 2013

function [weight, bias]=p4_5()
    p1=[1;1];
    t1=[0;0];
    p2=[1;2];
    t2=[0;0];
    p3=[2;-1];
    t3=[0;1];
    p4=[2;0];
    t4=[0;1];
    p5=[-1;2];
    t5=[1;0];
    p6=[-2;1];
    t6=[1;0];
    p7=[-1;-1];
    t7=[1;1];
    p8=[-2;-2];
    t8=[1;1];
    
    % generate random weight and bias
    w=randint(2,2);
    b=randint(2,1);
    % w=[1 0; 0 1];
    % b=[1;1];
    
    % initialize error
    e1=[1;1];
    e2=[1;1];
    e3=[1;1];
    e4=[1;1];
    e5=[1;1];
    e6=[1;1];
    e7=[1;1];
    e8=[1;1];
    x=[0;0];
    
    while(~isequal(e1,x) || ~isequal(e2,x) || ~isequal(e3,x) || ~isequal(e4,x) || ~isequal(e5,x) || ~isequal(e6,x) || ~isequal(e7,x) || ~isequal(e8,x))
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
        
        e5=t5-hardlim(w*p5+b);
        w=w+e5*p5';
        b=b+e5;
        
        e6=t6-hardlim(w*p6+b);
        w=w+e6*p6';
        b=b+e6;
        
        e7=t7-hardlim(w*p7+b);
        w=w+e7*p7';
        b=b+e7;
        
        e8=t8-hardlim(w*p8+b);
        w=w+e8*p8';
        b=b+e8;
    end
    
    weight=w;
    bias=b;
end