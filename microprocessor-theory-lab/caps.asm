.model small
.stack 100h
.data

    prompt_msg db 'Input a string',0dh,0ah,'$'
    no_cap_msg db 0dh,0ah,'No cap found','$'
    cap_msg db 0dh,0ah,'First letter is '
    first db '['
     db ' and last letter is '
    last db '@$'
    
.code
.startup

    mov ax,@data
    mov ds,ax
    mov ah,9
    lea dx,prompt_msg
    int 21h
    
    mov ah,1
    int 21h
    
while_:

    cmp al,0dh
    je end_while
    cmp al,'A'
    jnge end_if
    cmp al,'Z'
    jnle end_if
    cmp al,first
    jnle check_last
    mov first,al
    
check_last:

    cmp al,last
    jnge end_if
    mov last,al
    
end_if:

    int 21h
    jmp while_
    
end_while:

    mov ah,9
    cmp first,'['
    jne cap
    lea dx,no_cap_msg
    jmp display
    
cap:
    
    lea dx,cap_msg
    
display:

    int 21h
    .exit
    end