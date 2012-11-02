;; Concatenate two string and store into another string


org 100h


.model small
.data

    string_one db 'Hello$'
    string_two db 'World$'
    string_three db 50h dup(?)
    size_one db 0
    size_two db 0
    
.code
.startup

    mov cl,0
    lea si,string_one

count_one:

    mov al,[si]
    cmp al,'$'
    jz end_count_one
    inc cl
    inc si
    jmp count_one
    
end_count_one:

    mov size_one,cl
    mov cl,0
    lea si,string_two
    
count_two:

    mov al,[si]
    cmp al,'$'
    jz end_count_two
    inc cl
    inc si
    jmp count_two
    
end_count_two:

    mov size_two,cl 
    
    mov cl,size_one
    lea si,string_one
    lea di,string_three

copy_one:

    mov al,[si]
    mov [di],al
    inc si
    inc di
    dec cl
    jnz copy_one
    
    mov cl,size_two
    lea si,string_two
    
copy_two:

    mov al,[si]
    mov [di],al
    inc si
    inc di
    dec cl
    jnz copy_two
    
    mov [di],'$'
    
    mov ah,9
    lea dx,string_three
    int 21h
            
.exit
end