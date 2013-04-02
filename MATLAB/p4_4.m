% solved problem 4.4
% date: 27 March, 2013

function [weight, bias]=p4_4()
    p1=[2;2];
    t1=0;
    p2=[1;-2];
    t2=1;
    p3=[-2;2];
    t3=0;
    p4=[-1;1];
    t4=1;
    e1=1;
    e2=1;
    e3=1;
    e4=1;
    w=[0 0];
    b=0;
    
    while(e1~=0 || e2~=0 || e3~=0 || e4~=0)
        e1=t1-hardlim(w*p1+b)
        w=w+e1*p1'
        b=b+e1
        
        e2=t2-hardlim(w*p2+b)
        w=w+e2*p2'
        b=b+e2
        
        e3=t3-hardlim(w*p3+b)
        w=w+e3*p3'
        b=b+e3
        
        e4=t4-hardlim(w*p4+b)
        w=w+e4*p4'
        b=b+e4
    end
    
    weight=w;
    bias=b;
end