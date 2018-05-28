;; compare two string
;; if they are equal,display that
;; if not,display them in lexicographical order


include 'emu8086.inc'


org 100h


define_print_string
define_get_string


.model small
.data   

    str1 20 dup(?)
    str2 20 dup(?)
    
    prompt db 0dh,0ah,'Enter string:',0
    yes_msg db 0dh,0ah,'They are same.',0   
    
    size_one db 0
    size_two db 0
    
.code
.startup
    
    lea si,prompt
    call print_string
    
    lea di,str1
    mov dx,20
    call get_string
    
    call print_string
    
    lea di,str2
    mov dx,20
    call get_string
  
    mov cl,0
    lea si,str1
    
count_one:

    mov al,[si]
    cmp al,0
    jz end_one
    inc si
    inc cl
    jmp count_one

end_one:
    
    mov size_one,cl
    mov cl,0
    lea si,str2
    
count_two:

    mov al,[si]
    cmp al,0
    jz end_two
    inc si
    inc cl
    jmp count_two

end_two:
    
    mov size_two,cl
    
    mov al,size_one
    mov bl,size_two
    cmp al,bl
    jg no
    jl no
    jz check_yes

no:
    
    lea si,str1
    lea di,str2
    mov al,[si]
    mov bl,[di]
    cmp al,bl
    jg display_second
    jmp display_first

display_first:

    lea si,str1
    call print_string
    lea si,str2
    call print_string    
    jmp end_
    
display_second:

    lea si,str2
    call print_string
    lea si,str1
    call print_string    
    jmp end_
    
    
check_yes:

    lea si,str1
    lea di,str2
    mov cl,size_one
    
compare:

    mov al,[si]
    mov bl,[di]
    cmp al,bl
    jnz no
    inc si
    inc di
    dec cl
    jnz compare

yes:

    lea si,yes_msg
    call print_string        
        
end_: 
       
.exit
end