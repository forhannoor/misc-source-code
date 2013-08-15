function x=img2vector(path)
   [x, map]=imread(path);
    x=~logical(x);
    x=double(x);
    x(x(:)==0)=-1;
end