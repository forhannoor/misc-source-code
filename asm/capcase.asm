.model small
.data
.code
.startup

    mov ah,1
    int 21h
    cmp al,'A'
    jge capcase
    jmp end_if
    
capcase:

    cmp al,'Z'
    jg end_if
    mov dl,al
    mov ah,2
    int 21h
    
end_if:

.exit
end