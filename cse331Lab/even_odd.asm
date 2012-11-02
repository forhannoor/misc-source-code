;;even odd checker.range is very small.just 0-9.
;;press enter to exit program.


org 100h

.model small
.stack 100h
.data

    even_msg db 0dh,0ah,'Even',0dh,0ah,'$'
    odd_msg db 0dh,0ah,'Odd',0dh,0ah,'$'
    
.code
.startup    

repeat:

    mov ah,1
    int 21h
    cmp al,0dh
    je end_
    sub al,48
    test al,1
    jz even
    jmp odd

even:
    
    mov ah,9
    lea dx,even_msg
    int 21h
    jmp repeat

odd:

    mov ah,9
    lea dx,odd_msg
    int 21h
    jmp repeat

end_:
                     
.exit
end                       