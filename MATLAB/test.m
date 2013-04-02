function x=test()
    % load p1,p2,p3,t1,t2,t3
    load('hebbian.mat');
    % calculate w
    w=p1*p1'+p2*p2'+p3*p3';
    % set a test pattern
    test_pattern=t2;
    index_limit=0;      % determine how many bits will a inverted at a time
    boundary=6;         % determines the upper boundary of index_limit

    while(index_limit<boundary)
        for(i=1:1:6)
            for(j=1:1:5-index_limit)
                if(test_pattern(i,j)==-1)       
                    test_pattern(i,j)=1; 

                else
                    test_pattern(i,j)=-1;
                end

                temp=index_limit;

                while(temp>0)
                    temp_j=j+temp;

                    if(test_pattern(i,temp_j)==-1)
                        test_pattern(i,temp_j)=1;

                    else
                        test_pattern(i,temp_j)=-1;
                    end

                    temp=temp-1;
                end

                % check if pattern is recognized
                if(hardlims(w*test_pattern)==t2)
                    disp(['Equal for ' num2str(i) ',' num2str(j) ' for index limit ' num2str(index_limit)]);

                else
                    disp(['Not equal for ' num2str(i) ',' num2str(j) ' for index limit ' num2str(index_limit)]);
                end

                % undo change for next iteration in loop
                test_pattern=t2;
            end
        end
        
        % increase number of bits to be inverted at a time
        index_limit=index_limit+1;
    end
end