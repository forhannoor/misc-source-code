.model small
.stack 100h
.data

    prompt db 'Input a text line.When done,press ENTER:',0dh,0ah,'$'
    answer db 0dh,0ah,'In reverse order:',0dh,0ah,'$'
    
.code
.startup

    mov ax,@data
    mov ds,ax
    mov ah,9
    lea dx,prompt
    int 21h
    
    mov cx,0
    mov ah,1
    
repeat:

    int 21h
    push ax
    inc cx
    cmp al,0dh
    jne repeat
    lea dx,answer
    mov ah,9
    int 21h
    
print:

    pop ax
    mov dl,al
    mov ah,2
    int 21h
    loop print
    
.exit
end