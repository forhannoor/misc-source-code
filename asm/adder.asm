;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;                                     ;;
;;  Simple adder that adds two numbers ;;
;;                                     ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; 


org 100h

.model small
.stack 100h
.data

    msg1 db 'Enter first number:',0dh,0ah,'$'
    msg2 db 0dh,0ah,'Enter second number:',0dh,0ah,'$'
    msg3 db 0dh,0ah,'Sum is:',0dh,0ah,'$'
          
.code
.startup

    mov ax,@data
    mov ds,ax
    mov ah,9
    lea dx,msg1
    int 21h
    
    mov ah,1
    int 21h
    sub al,48
    push ax
    
    mov ah,9
    lea dx,msg2
    int 21h
    
    mov ah,1
    int 21h
    sub al,48
    mov dl,al
    pop ax
    add dl,al
    add dl,48
    mov bl,dl
    
    mov ah,9
    lea dx,msg3
    int 21h
    mov ah,2 
    mov dl,bl
    int 21h
    
.exit
end