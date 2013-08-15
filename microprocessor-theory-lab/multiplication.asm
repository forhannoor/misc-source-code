;; Multiply a number by another number using procedure
;; Both the numbers should come from user input
;; For the time being,both numbers should be of one digit


org 100h


.model small
.data 

    prompt_message db 0dh,0ah,'### This program takes two numbers and multiply them ###',0dh,0ah,'$'
    input_message db 0dh,0ah,'Input number:',0dh,0ah,'$'
    result_message db 0dh,0ah,'Product :',0dh,0ah,'$'
    
    num1 db 0
    num2 db 0
    product db 0
     
.code
.startup

    ;initialize segment
    
    mov ax,@data
    mov ds,ax
    
    ;prompt purpose if this program
    
    mov ah,9
    lea dx,prompt_message
    int 21h
    
    ;prompt for input
    
    lea dx,input_message
    int 21h
    
    ;input first number
    
    mov ah,1
    int 21h
    sub al,48
    mov num1,al
    
    ;prompt for input
    
    mov ah,9
    lea dx,input_message
    int 21h
    
    ;input second number
    
    mov ah,1
    int 21h
    sub al,48
    mov num2,al
    
    ;call multiplication procedure
    
    call multiply
    
    ret
    
    
    multiply proc
        
        mov al,num1
        mov bl,num2
        mov dl,product
        
        loop_:
        
            add dl,al
            dec bl
            jnz loop_
            
            mov product,dl
            
        ret
        
    multiply endp    
    
.exit
end