#include <stdio.h>
int main(){
	int a; /*declarei uma variável com o identificador
	(a) do tipo inteiro*/
	float b;/*declarei uma variável com o identificador
	(b) do tipo real*/
	 int c, d;
   	a = 10;
	c = 15;
	d = a + c;
	printf("\n Valor armazenado na variável a = %d\n", a);
	printf("\n Valor armazenado na variável c = %d\n", c);
	printf("\n A soma de %d com %d é = %d\n", a, c, d);	
	//escreva("Valor armazenado na variável a = ", a)
	b = 5.8;
	float e = 1.2;
	float f;
	f = b + e;
	printf("\n Valor armazenado na variável b = %.1f\n", b);
	printf("\n Valor armazenado na variável e = %.2f\n", e);
	printf("\n A soma de %.2f com %.2f é = %.2f\n", b, e, f);
	return 0;
}