function [x,c]=logic_gate()
    % set patterns
    p1=[1;-1;-1];
    p2=[1;1;-1];
    % set targets
    t1=0;
    t2=1;
    % randomly generate weight
    w=rand(1,3);
    % randomly generate bias
    b=rand(1);
    % initialize errors
    e1=1;
    e2=1;
    
    % continue iterations as long as error is there
    while(e1 || e2 == 1)
        % apply first pattern
        a=hardlim(w*p1+b);
        % calculate error
        e1=t1-a;
        % adjust weight
        w=w+e1*p1';
        % adjust bias
        b=b+e1;
        % apply second pattern
        a=hardlim(w*p2+b);
        % calculate error
        e2=t2-a;
        % adjust weight
        w=w+e2*p2';
        % adjust bias
        b=b+e2;
    end
    
    x=w;    % adjusted weight
    c=b;    % adjusted bias
end