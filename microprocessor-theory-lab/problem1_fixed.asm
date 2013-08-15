;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; Write a complete assembly program to read 10 2-digit numbers     ;;
;; Each number separated by a single space from the keyboard        ;;
;; Convert them from character to numbers                           ;;
;; Calculate the average, lowest and highest score                  ;;
;; Display them on the screen                                       ;;
;; Using library functions this program becomes too simple          ;;
;; So no library function is used                                   ;;
;;                                                                  ;;
;; To display results,vars option from emulator has to be used      ;;
;;                                                                  ;;
;;                                      Forhan Noor                 ;;
;;                                      forhannoor@gmail.com        ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

 
 
org 100h


.model small
.stack 100h
.data

    array db 20 dup(?)  ;numbers will be stored temporarily
    array2 db 10 dup(?) ;numbers will be stored permanently
    sum db 0            ;total sum
    average db 0        ;average(only decimal part)
    lowest db 0         ;lowest score
    highest db 0        ;highest score
    
.code
.startup 
    
    lea si,array
    
input_loop:
    
    ;; taking numbers from user and pushing them into stack
    
    mov ah,1
    int 21h
    cmp al,' '        ;numbers are seperated by space
    jz input_loop
    cmp al,0dh
    jz end_input_loop ;as soon as enter is pressed,end of input 
    sub al,48         ;to get number from character
    mov [si],al
    inc si
;    push ax           ;pushing numbers into stack
    jmp input_loop
    
end_input_loop:
    
;    mov cx,20
;    mov si,0
    
;array_copy_loop:
    
    ;; popping numnbers from stack
    ;; copying them into array
    
;    pop ax
;    mov array[si],al  ;copying numbers into temporary array 
;    inc si
;    loop array_copy_loop
       
    mov cx,10
    mov si,0
    mov di,0
    mov bl,0
    
num_loop:
    
    ;; copying into another array as two digits number
    
    mov dl,0
    mov al,array[si]
    mov bl,al   
    shl al,3
    shl bl,1
    add al,bl
    add dl,al
    inc si
    mov al,array[si]
;    shl al,3
;    add al,2
    add dl,al         ;getting 2digit numbers from each consecutive array indices
    inc si
    mov array2[di],dl ;copying numbers into temporary array
    inc di
    loop num_loop     
    
    mov cx,10
    mov dl,0
    mov si,0
    
sum_loop:
    
    ;; get the sum
    
    mov al,array2[si]
    add dl,al         ;getting total sum
    inc si
    loop sum_loop
    
    mov sum,dl        ;storing sum in a variable called sum
    
    ;; get the average
    
    mov dl,sum
    sub dl,2
    shr dl,3          ;getting average
    mov average,dl    ;storing average in a variable called average
    
    mov dl,0
    mov cx,10
    mov si,0
    
highest_loop:
    
    ;; get the highest score
    
    mov al,array2[si]
    cmp al,dl
    jg set_highest
    inc si
    dec cx
    jnz highest_loop 
    jmp end_highest
    
set_highest:

    mov dl,array2[si]
    inc si
    dec cx
    jnz highest_loop
    
end_highest:

    mov highest,dl    ;get highest score 
    
    mov dl,highest
    mov cx,10
    mov si,0
    
lowest_loop:

    ;; get the lowest score
    
    mov al,array2[si]
    cmp al,dl
    jl set_lowest
    inc si
    dec cx
    jnz lowest_loop
    jmp end_lowest
    
set_lowest:

    mov dl,array2[si]
    inc si
    dec cx
    jnz lowest_loop         

end_lowest:

    mov lowest,dl     ;get lowest score
         
.exit
end