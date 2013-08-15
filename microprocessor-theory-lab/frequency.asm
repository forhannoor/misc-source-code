;purpose of this program is to search through an 
;array of numbers and find out frequency of each 
;number , given a range of numbers


org 100h

.model small
.data

    array dw 20 (1,2,3,4,5,6,7,8,9,0,9,8,7,6,5,4,3,2,1,0)
    array2 dw 10 dup(?)
    
.code
.startup

    mov si,0
    mov cx,20

loop_:

    mov ax,array[si]
    mov di,ax
    mov bx,array2[di]
    inc bx
    mov array2[di],bx
    inc si
    inc si
    loop loop_    
    
.exit
end