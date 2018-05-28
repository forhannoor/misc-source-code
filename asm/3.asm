;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;; lower case to upper case ;;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


.MODEL SMALL
.STACK 100H
.DATA

	CR		EQU		0DH
	LF		EQU		0AH
	MSG1	DB 		'Enter a lowercase letter: $'
	MSG2	DB 		0DH, 0AH, 'In upper case it is: '
	CHAR	DB		?, '$'
	
.CODE

	MAIN PROC
		
		MOV AX, @DATA
		MOV DS, AX		; INITIALIZE DATA SEGMENT
		
		LEA DX, MSG1
		MOV AH, 9
		INT 21H
		
		MOV AH, 1
		INT 21H
		SUB AL, 32		; MAKE IT UPPERCASE
		MOV CHAR, AL	; STORE IN THE MEMORY
	
		LEA DX, MSG2
		MOV AH, 9
		INT 21H
		
		MOV AH, 4CH		; DOS EXIT
		INT 21H
		
	MAIN ENDP

END MAIN