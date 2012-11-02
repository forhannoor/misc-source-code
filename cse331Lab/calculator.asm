;; This program works as a simple calculator
;; It asks the user to choose between four basic arithmetic operations
;; Then it takes inputs,performs calculations and display it
;; Then again it asks whether the user want to use it again


include 'emu8086.inc'


org 100h 

define_print_string
define_scan_num
define_print_num
define_print_num_uns

.model small
.data 

    prompt db 0dh,0ah,'This program works as a simple calculator.Do you want to use it?[y/n] ',0 
    prompt2 db 0dh,0ah,'Use same function again?[y/n]',0
    blank db 0dh,0ah,'',0
    options db 0dh,0ah,'1.ADD 2.SUBTRACT 3.MULTIPLY 4.DIVIDE [Choose between 1-4]',0
    disp_result db 0dh,0ah,'Result is:',0 
    disp_remainder db 0dh,0ah,'Remainder is:',0
    
    op1 db 0dh,0ah,'Input operand 1 (in case of division,it is the dividend):',0
    op2 db 0dh,0ah,'Input operand 2 (in case of division,it is the divisor):',0
    
    operand1 dw 0
    operand2 dw 0
    result dw 0 
    m_result dw 0
    div_result db 0
    remainder db 0 
    
    flag db 0
    
.code
.startup

start_:
    
    ;; Prompt the user the purpose of this application 
    
    lea si,prompt
    call print_string
    lea si,blank
    call print_string
    
    ;; Check whether the user want to use it or not
    
    mov ah,1
    int 21h
    cmp al,'n'
    jz end_         ;; if n is entered,program terminates
    cmp al,'y'
    jnz start_      ;; if other than n or y is entered,it asks user again
    
    ;; Display the user options
    
    lea si,options
    call print_string
    lea si,blank
    call print_string
    
    ;; Take input to choose between options
    
    mov ah,1
    int 21h
    cmp al,'1'
    jz add_
    cmp al,'2'
    jz sub_
    cmp  al,'3'
    jz mul_
    cmp al,'4'
    jz div_ 

input proc
    
    ;; Input first number
    
    lea si,op1
    call print_string
    lea si,blank
    call print_string
    call scan_num
    mov operand1,cx
    
    ;; Input second number
    
    lea si,op2
    call print_string
    lea si,blank
    call print_string
    call scan_num
    mov operand2,cx 
    
    ret 
    
input endp

display_result proc
    
    mov dl,flag
    cmp dl,0              ;; If flag is 0,display result.Else display result and remainder
    jnz div_result_disp
    
    lea si,disp_result
    call print_string
    mov ax,result
    call print_num
    
    ret 
    
div_result_disp:
    
    ;; Display result and remainder
    
    lea si,disp_result
    call print_string
    mov ah,0
    mov al,div_result
    call print_num
    
    lea si,blank
    call print_string
    
    lea si,disp_remainder
    call print_string
    
    mov al,remainder
    mov ah,0
    call print_num
    
    ret

display_result endp    
    
add_:
    
    call input   
    mov ax,operand1
    mov bx,operand2
    add ax,bx
    mov result,ax
    call display_result
    
    ;; Check if user wants to use same function again
    
    lea si,prompt2
    call print_string
    mov ah,1
    int 21h
    cmp al,'y'
    jz add_
    jmp start_
    
sub_: 

    call input
    mov ax,operand1
    mov bx,operand2
    sub ax,bx
    mov result,ax
    call display_result 
    
mul_:

    call input
    mov ax,operand1
    mov bx,operand2
    mul bx
    mov m_result,dx
    mov result,ax
    call display_result 
    
div_:

    call input
    
end_:
    
.exit
end