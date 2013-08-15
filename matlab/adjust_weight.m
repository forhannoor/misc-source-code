function x=adjust_weight()
    % declare inputs
    p1=[1;2];
    p2=[-1;2];
    p3=[0;-1];
    target=[1 0 0];
    % declare target values
    t1=target(1);
    t2=target(2);
    t3=target(3);
    % declare initial outputs
    a1=-5;
    a2=-5;
    a3=-5;
    % generate a random weight
    w=rand(1,2);
    
    % loop to adjust weights
    while(a1~=t1 & a2~=t2 & a3~=t3)
        a1=hardlim(w*p1);
        e1=t1-a1;
        w=w+e1*p1';
        a2=hardlim(w*p2);
        e2=t2-a2;
        w=w+e2*p2';
        a3=hardlim(w*p3);
        e3=t3-a3;
        w=w+e3*p3';
    end
    
    x=w;
end