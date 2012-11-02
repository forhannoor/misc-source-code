;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; Display a string in reverse order ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


org 100h


.model small
.stack 100h
.data

    prompt db 'Enter a string:',0dh,0ah,'$'
    final db 0dh,0ah,'Your text is reverse order:',0dh,0ah,'$'
    
.code
.startup
    
    ;initialize segment
    
    mov ax,@data
    mov ds,ax
    
    ;prompt message to enter string
    
    lea dx,prompt
    mov ah,9
    int 21h  
    
    ;take input
    
    mov cx,0                  ;counter for characters
    mov ah,1
input_loop:
    
    
    int 21h
    cmp al,0dh
    je end_input
    inc cx
    push ax
    jmp input_loop
    
end_input:
    
    ;prompt final message
    
    mov ah,9
    lea dx,final
    int 21h
    
output_loop:
    
    ;show output
    
    pop bx
    mov dl,bl
    mov ah,2
    int 21h 
    loop output_loop
            
.exit
end