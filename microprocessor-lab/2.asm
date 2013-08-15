.MODEL SMALL
.STACK 100H
.DATA

	MSG DB 'HELLO WORLD$'

.CODE

	MAIN PROC

		MOV AX, @DATA
		MOV DS, AX		; initialize data segment

		LEA DX, MSG		; load message
		MOV AH, 9		; prepare to display string
		INT 21H			

		MOV AH, 4CH		; exit to DOS
		INT 21H

	MAIN ENDP

END MAIN