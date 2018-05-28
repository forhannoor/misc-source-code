;; Another string concatenation example
;; This time using string operations


org 100h


.model small
.data

    str1 db 50 dup(?)
    str2 db 50 dup(?) 
    str3 db 100 dup(?)
    size1 dw 0
    size2 dw 0
    
.code
.startup
    
    mov ax,@data
    mov ds,ax
    mov es,ax
    
    lea di,str1 
    mov ah,1
    mov cx,0
    cld
    
input:

    int 21h
    cmp al,0dh
    jz end_
    inc cx
    stosb
    jmp input
    
end_:

    mov size1,cx
    
    lea di,str2
    mov cx,0 
    mov ah,1
    cld
    
input2:
    
    int 21h
    cmp al,0dh
    jz end2_
    inc cx
    stosb
    jmp input2
    
end2_:

    mov size2,cx
        
    lea si,str1
    lea di,str3
    cld
    mov cx,size1    
    
    rep movsb
    
    lea si,str2
    mov cx,size2
    
    rep movsb
    
    mov [di],'$'
    
    mov ah,9
    lea dx,str3
    int 21h    
          
.exit
end