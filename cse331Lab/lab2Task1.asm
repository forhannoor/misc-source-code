;; Declare an array and fill it with random numbers
;; Declare another array and keep it empty
;; Copy the first array to the second array in reverse order


org 100h

.model small
.data

    array_one db 1,2,3,4,5
    array_two db 5 dup(?)
    
.code
.startup

    mov cx,4
    lea si,array_one
    lea di,array_two
    
 inc_loop:
 
    inc di
    loop inc_loop
    
    mov cx,5

copy_loop:

    mov al,[si]
    mov [di],al
    inc si
    dec di
    loop copy_loop
    
.exit
end