;; This is the implementation of a subroutine that converts 
;; characters to numbers
 
 
org 100h

.model small
.data
    
    char_array db 10 dup(?)
    num_array db 10 dup(?)
    size db 10
    
.code
.startup

Main proc
    
    lea si,char_array
    mov cx,size
    mov ah,1

input:
    
    int 21h
    mov [si],al
    inc si
    loop input
    
    call char_to_num    
    
    ret
    
Main endp


char_to_num proc
        
    lea si,char_array
    lea di,num_array
    mov cx,size
        
loop_:

    mov al,[si]
    sub al,30h
    mov [di],al
    inc si
    inc di
    loop loop_
    
    ret
        
char_to_num endp            
        
.exit
end