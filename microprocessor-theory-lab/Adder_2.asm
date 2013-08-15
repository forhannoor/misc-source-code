;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;                                                   ;;
;; Simple adder                                      ;;
;; Takes two numbers from user                       ;;
;; And prints out the sum                            ;;
;;                                                   ;;
;;                            Forhan Noor            ;;
;;                            North South University ;;
;;                                                   ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;



include 'emu8086.inc'


org 100h


define_scan_num
define_print_num_uns
define_print_string

.model small
.data

    num1 dw 0
    num2 dw 0
    num3 dw 0
    
    design db 0dh,0ah,'*******************************************************',0
    prompt db 0dh,0ah,'***This program takes two numbers and prints the sum***',0
    blank db 0dh,0ah,'',0
    message1 db 0dh,0ah,'Enter first number :',0dh,0ah,0
    message2 db 0dh,0ah,'Enter second number:',0dh,0ah,0
    message3 db 0dh,0ah,'Sum:',0dh,0ah,0
    
.code
.startup
    
    lea si,design
    call print_string
    
    lea si,prompt
    call print_string
    
    lea si,design
    call print_string
    
    lea si,blank
    call print_string
    call print_string
    
    lea si,message1
    call print_string
    call scan_num
    mov num1,cx
    
    lea si,blank
    call print_string
    
    lea si,message2
    call print_string
    call scan_num
    mov num2,cx
    
    mov bx,num1
    add bx,num2
    mov num3,bx
    mov ax,bx
    
    lea si,blank
    call print_string
    call print_string
    
    lea si,message3
    call print_string
    call print_num_uns
    
.exit
end