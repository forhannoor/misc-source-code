
; You may customize this and other start-up templates; 
; The location of this template is c:\emu8086\inc\0_com_template.txt

org 100h

    
    mov si,0
    
    mov cx,20
    ;mov ah,0
loop_:

    mov ax,array[si]
    mov di,ax
    mov dx,array2[di]
    add dx,1
    mov array2[di],dx
    inc si
    inc si
    loop loop_      

ret


array dw 20 (0,1,2,3,4,5,6,7,8,9,10,9,8,7,6,5,4,3,2,1)
;array dw 20 DUP (2)
array2 dw 11 dup (0)