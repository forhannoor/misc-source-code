;; Optimized version of problem 1,given by AHS


org 100h


.model small
.data
    
    array db 20 dup(?) 
    array2 db 10 dup(?)
    sum db 0
    max db 0
    min db 0
    average db 0
    remainder db 0  
    divisor db 10
    
.code
.startup

    mov ah,1
    mov cx,10
    mov si,0

input_loop:
    
    ;; take 10 numbers from user and store them into array 
    ;; numbers are seperated in array
    
    int 21h
    sub al,48
    shl al,3
    add al,2
    mov array[si],al
    inc si
    int 21h
    sub al,48
    mov array[si],al 
    inc si
    int 21h
    loop input_loop
    
    mov si,0 
    mov di,0
    mov cx,10

array2_loop:
    
    ;; initialize array 2 
    ;; numbers are no longer seperate now
    
    mov al,array[si]
    inc si
    mov bl,array[si]
    inc si
    add al,bl
    mov array2[di],al
    inc di
    loop array2_loop    
    
    mov bl,0
    mov si,0
    mov cx,10
    
sum_loop:
    
    ;; find sum
    
    mov al,array2[si]
    add bl,al
    inc si
    loop sum_loop
    
    ;; find average
    
    mov sum,bl
    mov al,sum
    mov ah,0
    div divisor
    mov average,al
    mov remainder,ah 
    
    mov si,0
    mov cx,10
    mov al,0

max_loop:
    
    ;; find maximum
    
    mov bl,array2[si]
    cmp al,bl
    jl set_max
    inc si
    dec cx
    jnz max_loop
           
set_max:

    mov al,bl
    inc si
    dec cx
    jnz max_loop
    
    mov max,al 
    
    mov si,0
    mov cx,10
    mov al,max
    
min_loop:

    ;; find minimum
    
    mov bl,array2[si]
    cmp al,bl
    jg set_min
    inc si
    dec cx
    jnz min_loop
    
set_min:

    mov al,bl
    inc si
    dec cx
    jnz min_loop
    
    mov min,al    
               
.exit
end