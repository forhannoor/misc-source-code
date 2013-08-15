;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;This program takes a string as input;;;
;;;Then print that in reverse order;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


.model small
.stack 100h
.data   

    prompt db 'Enter a string:',0dh,0ah,'$'
    result db 0dh,0ah,'Your string in reverse order:',0dh,0ah,'$'
    
.code
.startup           
    mov ax,@data
    mov ds,ax
    mov ah,9
    lea dx,prompt
    int 21h
    
    mov ah,1
    mov cx,0
    
input_loop:

    int 21h
    push ax
    inc cx
    cmp al,0dh
    jne input_loop
    
end_:
    
    mov ah,9
    lea dx,result
    int 21h
    mov ah,2
        
display_loop:

    pop ax
    mov dl,al
    mov ah,2
    int 21h 
    loop display_loop    
    
.exit
end