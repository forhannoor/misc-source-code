; This program takes string input from user
; Process it
; Display the capital letter that comes first in alphabet
; Display the capital letter that comes last in alphabet
; Display no cap message if none is entered  


org 100h

.model small
.stack 100h
.data

    prompt db 'Enter a string:',0dh,0ah,'$'
    no_cap_msg db 0dh,0ah,'No caps entered$'
    cap_msg db 0dh,0ah,'First cap is '
    first db ']'
     db ' and last cap is '
    last db '@$'
     
.code
.startup

    mov ax,@data
    mov ds,ax
    
    lea dx,prompt
    mov ah,9
    int 21h
    
    mov ah,1
    
input:

    int 21h
    cmp al,0dh
    je end_
    cmp al,'A'
    jnge input
    cmp al,'Z'
    jnle input
    cmp al,first
    jnl check_last
    mov first,al
    jmp input
    
check_last:

    cmp al,last
    jng end_
    mov last,al
    jmp input
    
end_:
    
    cmp first,']'
    je no_cap_msg_display
    lea dx,cap_msg   
    jmp display

no_cap_msg_display:

    lea dx,no_cap_msg

display:

    mov ah,9
    int 21h    
               
.exit
end            