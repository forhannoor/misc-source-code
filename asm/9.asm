.MODEL SMALL
.STACK 100H
.DATA

	MSG			DB		'ENTER THREE INITIALS: $'
	FIRST		DB		?, 0DH, 0AH
	SECOND		DB		?, 0DH, 0AH
	THIRD		DB 		?, '$'

.CODE

	MAIN PROC
		
		MOV AX, @DATA
		MOV DS, AX
		
		MOV AH, 9
		LEA DX, MSG
		INT 21H
		
		MOV AH, 1
		INT 21H
		MOV FIRST, AL
		
		INT 21H
		MOV SECOND, AL
		
		INT 21H
		MOV THIRD, AL
		
		MOV AH, 2
		MOV DL, 0DH
		INT 21H
		
		MOV DL, 0AH
		INT 21H
		
		MOV AH, 9
		LEA DX, FIRST
		INT 21H
		
		MOV AH, 4CH
		INT 21H
		
	MAIN ENDP

END MAIN