org 100h

.model small
.data

    str1 db "hello$"
    str2 db "world$"
    str3 db 20h dup(?)
    
.code
.startup

    lea si,str1
    mov dl,0
    
loop1:

    mov al,[si]
    cmp al,'$'
    jz end_loop
    inc si
    inc dl
    jmp loop1
    
end_loop:

    lea si,str2  
    mov bl,0
    
loop2:

    mov al,[si]
    cmp al,'$'
    jz end_loop2
    inc si
    inc bl
    jmp loop2 

end_loop2:
    
    lea si,str1
    lea di,str3
    
copy_loop1:

    mov al,[si]
    mov [di],al
    inc si
    inc di
    dec dl
    jnz copy_loop1
    
    lea si,str2

copy_loop2:

    mov al,[si]
    mov [di],al
    inc si
    inc di
    dec bl
    jnz copy_loop2
    
    inc di
    mov [di],'$'
    lea dx,str3
    mov ah,9
    int 21h
    
.exit
end