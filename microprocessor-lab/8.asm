;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; write a program to display a '?', read two decimal digits ;;
;; whose sum is less than 10, find their sum and display it  ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


.MODEL SMALL
.STACK 100H
.DATA

	NUM1	DB		0
	NUM2	DB		0
	MSG 	DB		0DH, 0AH, 'SUM IS : '
	SUM		DB		?, '$'

.CODE

	MAIN PROC
		
		MOV AX, @DATA
		MOV DS, AX
		
		MOV AH, 2
		MOV DL, '?'
		INT 21H
		
		MOV AH, 1
		INT 21H
		SUB AL, 48
		MOV NUM1, AL
		
		MOV AH, 1
		INT 21H
		SUB AL, 48
		MOV NUM2, AL
		
		MOV DL, NUM1
		ADD DL, NUM2
		ADD DL, 48
		MOV SUM, DL
		
		MOV AH, 9
		LEA DX, MSG
		INT 21H
		
		MOV AH, 4CH
		INT 21H
		
	MAIN ENDP

END MAIN