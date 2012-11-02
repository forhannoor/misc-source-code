;; Write a program that will count number of characters 
;; in a string


org 100h

.model small
.data

    string db 'Hello$'
    
.code
.startup

    mov cl,0
    lea si,string
    
count_loop:

    mov al,[si]
    cmp al,'$'
    jz end_count_loop
    inc cl
    inc si
    jmp count_loop
    
end_count_loop:

            
.exit
end