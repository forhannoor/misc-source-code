;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; Should display the sequence below in 8255 perpheral device ;;
;; 0000 0000                                                  ;;
;; 1000 0000                                                  ;;
;; 1100 0000                                                  ;;
;; 1110 0000                                                  ;;
;; 1111 1000                                                  ;;
;; 1111 1100                                                  ;;
;; 1111 1110                                                  ;;
;; 1111 1111                                                  ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


.MODEL SMALL
.DATA

CNT3      EQU	  3FD6H     ; port C address
BPORT3    EQU	  3FD2H     ; port B address
XOR_OP    DB 	  80H       ; initial divisor 0000 0000 1000 0000

.CODE

MAIN PROC

    START: 
        MOV SP, 4000H     ; initialize stack pointer
        MOV AL, 90H       
        LEA DI, XOR_OP    ; load xor operand
        MOV BL, 8         ; defines how many times the xor operation will be performed

        MOV DX, CNT3
        OUT DX, AL
        MOV AL, 00H       ; initial value 0000 0000
        MOV DX, BPORT3

    J1:
        OUT DX, AL
        MOV CX, 0FFFFH
        LOOP $            ; delay

    XOR AL, [DI]          ; perform xor operation to invert a bit
    SHR [DI], 1           ; make the xor operand half
    DEC BL
    CMP BL, 0 
    JNZ J1                ; jump if BL is not zero yet 

MAIN ENDP
END START