#include <stdio.h>
#include <locale.h>//biblioteca para correçῶao de caracteres
#include<stdio_ext.h>//biblioteca para limpar buffer de teclado

int main(){	
	setlocale(LC_ALL, "Portuguese");//habilita a acentuação para o português

	printf("\e[H\e[2J");//comando para limpar tela em linux

 	printf("\nOlá seja bem vindo a Linguagem C!!!\n");
	
	int i;
	i = 10;
	printf ("\n	Informe um valor para o I:");
	scanf("%d",&i);

	printf("\nValor de i = %d\n", i);	

	printf("\nPressione uma tecla para sair\n");
		__fpurge(stdin);//comando que limpa buffer do teclado, normalmente colocando antes de uma leitura de string
	
	while (getchar() != '\n');//pausa de tela	
	
	return 0;//indica que o sistema executou sem erro
}	