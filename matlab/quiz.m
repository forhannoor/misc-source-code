% given a pattern in the format p=[-2 ; -2]
% the function gives 0/1 as output
function x=quiz(p)
    % declare patterns and respective outputs
    p1=[6;4];
    t1=0;
    p2=[4;2];
    t2=1;
    p3=[8;2];
    t3=0;
    p4=[8;6];
    t4=1;
    p5=[2;9];
    t5=1;
    % generate random weight
    w=rand(1,2);
    % generate random bias
    b=rand(1);
    % initialize errors
    e=ones(1,5);
    
    % continue iterations as long as error is there
    while(length(find(e==1))>0)
        a=hardlim(w*p1+b);
        e(1)=t1-a;
        w=w+e(1)*p1';
        b=b+e(1);
        
        a=hardlim(w*p2+b);
        e(2)=t2-a;
        w=w+e(2)*p2';
        b=b+e(2);
        
        a=hardlim(w*p3+b);
        e(3)=t3-a;
        w=w+e(3)*p3';
        b=b+e(3);
        
        a=hardlim(w*p4+b);
        e(4)=t4-a;
        w=w+e(4)*p4';
        b=b+e(4);
        
        a=hardlim(w*p5+b);
        e(5)=t5-a;
        w=w+e(5)*p5';
        b=b+e(5);
    end
    
    % apply test pattern with adjusted weight and bias
    x=hardlim(w*p+b);
    disp(x);
end