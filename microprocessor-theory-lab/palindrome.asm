;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;Palindrome checker                             ;;
;;Gets string from user                          ;;
;;Prompts "Yes" if it's a palindrome             ;;
;;Prompts "No" if it's not                       ;;
;;                                               ;;
;;                                               ;;
;;                        Forhan Nooe            ;;
;;                        North South University ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;




include 'emu8086.inc'


org 100h


;inputs string
lea di,str1
mov dx,20 
call get_string 


lea si,str1
mov cl,0


;count number of chars in string
count_chars:

    mov al,[si]
    cmp al,0
    jz end_count_chars
    inc cl
    inc si
    jmp count_chars
    
    
end_count_chars:
 
    mov size,cl
    lea si,str1
    lea di,str2
    dec cl
    

increment_loop:    
    
    inc di
    dec cl
    jnz increment_loop
    
    
    mov cl,size
    ;dec cl


;reverse copy loop
copy_loop:

    mov al,[si]
    mov [di],al
    inc si
    dec di
    dec cl
    jnz copy_loop 
    
    
    lea si,str1
    lea di,str2
    mov cl,size


;compare loop
compare_loop:

    mov al,[si]
    mov bl,[di]
    cmp al,bl
    jnz end_compare
    inc si
    inc di
    dec cl
    jnz compare_loop
    
end_compare:

    cmp cl,0
    jz palindrome
    jmp non_palindrome
    
palindrome:

    lea si,yes
    call print_string
    jmp end_
    
non_palindrome:

    lea si,no
    call print_string
    
end_:                        

ret


str1 db 20 dup(?)
str2 db 20 dup(?) 
yes db 0dh,0ah,'Yes',0
no db 0dh,0ah,'No',0
size db 0 
define_get_string
define_print_string


end