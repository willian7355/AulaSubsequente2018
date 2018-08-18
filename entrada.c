//entrada de valores
/*
scanf(<tipo do argumento>, 
&nome da variavel);
& acessa endereço da memória
tipo do argumento
%d = int (inteiros)
%f = float (real)
%c = char (caractere)
%s = char [] (vetor de caractere)
*/
#include<stdio.h>
#include<stdio_ext.h>//LIMPEZA DE BUFFER DE TECLADO
int main(){
	int idade;
	float peso;
	char genero; //apenas um caracter
	char nome[30]; //vetor de caracter que simula uma String
	
	printf("\nInforme o seu Nome: ");
	scanf("%s",nome);
	
	printf("\nInforme o seu genero [M][F][X]: ");
	__fpurge(stdin);//LIMPEZA DE BUFFER DE TECLADO
	scanf("%c",&genero);
	
	printf("\nInforme a sua Idade: ");
	scanf("%d",&idade);

	printf("\nInforme o seu Peso: ");
	scanf("%f",&peso);

	printf("\nNome: %s",nome);
	printf("\nGenero: %c", genero);	
	printf("\nVocê tem %d anos de Idade: ", idade);
	printf(" e pesa %.2f quilos: \n", peso);
	return 0;	
}