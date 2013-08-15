function p = file_to_pattern(file_name)
    % read wav file
    [s, fs] = wavread(file_name);
    % perform cepstral analysis
    c = mfcc(s, fs, fix((3 * fs) / (length(s) - 256)));
    % convert into vector
    p = c(:);
end