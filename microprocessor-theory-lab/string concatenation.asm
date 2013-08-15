;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;                            ;;
;;    string concatenation    ;;
;;                            ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


include 'emu8086.inc'


org 100h

define_get_string
define_print_string

.model small
.data
    
    prompt1 db 0dh,0ah,'Input first string:',0dh,0ah,'$'
    prompt2 db 0dh,0ah,'Input second string:',0dh,0ah,'$'
    result db 0dh,0ah,'Concatenated string:',0dh,0ah,'$'
    str1 db 20 dup(?)
    str2 db 20 dup(?)
    constr db 40 dup(?)
    size1 dw 0
    size2 dw 0
    
.code                     
.startup

    ;initialize segments
    mov ax,@data
    mov ds,ax
    mov es,ax
    
    mov ah,9
    lea dx,prompt1
    int 21h
    
    ;input first string
    lea di,str1
    mov dx,20
    call get_string
    
    lea si,str1
    mov cx,0

loop1_:                      

    ;get size of first string
    mov al,[si]
    cmp al,0
    jz end1_
    inc cx
    inc si
    jmp loop1_    

end1_:
    
    mov size1,cx
    
    mov ah,9
    lea dx,prompt2
    int 21h
    
    ;input second string
    lea di,str2
    mov dx,20
    call get_string
    
    lea si,str2
    mov cx,0

loop2_:                      

    ;get size of second string
    mov al,[si]
    cmp al,0
    jz end2_
    inc cx
    inc si
    jmp loop2_    

end2_:
    
    mov size2,cx 
    
    lea di,constr
    lea si,str1
    mov cx,size1
    rep movsb
    
    lea si,str2
    mov cx,size2
    rep movsb
            
    mov ah,9
    lea dx,result
    int 21h
            
    lea si,constr
    call print_string
    
.exit
end