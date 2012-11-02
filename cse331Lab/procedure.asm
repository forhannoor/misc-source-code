; simple procedure example


org 100h

.model small
.data
.code
.startup

main proc
    
    mov ax,4
    mov bx,4
    call multiply
    ret

main endp


multiply proc
    
    repeat:
    
        mov dx,0
        test bx,1
        jz end_
        add dx,ax
        ;jmp repeat
        
    end_:
    
        shl ax,1
        shr bx,1
        cmp bx,0
        jnz repeat
        
        ret

multiply endp

.exit
end