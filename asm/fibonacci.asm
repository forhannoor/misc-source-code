;; Fibonacci numbers


org 100h


.model small
.data

    array 50 dup(?)
    
.code
.startup
    
    mov si,0
    mov al,1
    mov bl,1
    mov cx,25

loop_:

    mov array[si],al
    inc si
    mov array[si],bl
    inc si
    mov dl,al
    add dl,bl
    mov al,dl
    add dl,bl
    mov bl,dl
    loop loop_
    
.exit
end