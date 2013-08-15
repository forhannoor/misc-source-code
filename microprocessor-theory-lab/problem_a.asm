org 100h 

.model small
.data

    array db 50 dup(?)
    
.code
.startup

    lea di,array
    mov [di],1
    inc di
    mov [di],1	
.exit
end