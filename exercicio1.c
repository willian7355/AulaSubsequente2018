/*
1 -  
 Declarar 3 variáveis do tipo real, sendo que uma delas,
 alimentará o valor do salário líquido, a outra para
 armazenar o salário bruto, e a última variável, irá
 armazenar a diferença entre o salário bruto e o salário 
 líquido.
*/

#include <stdio.h>
int main (){
	float salarioLiquido, salarioBruto, diferenca;
	
	salarioLiquido = 1500.45;
	salarioBruto = 1850.23;
	diferenca = salarioBruto - salarioLiquido;
	printf("\nSalário Bruto RS %f", salarioBruto);
	printf("\nSalário Liquido RS %.2f", salarioLiquido);
	printf("\nVocê teve RS %.2f de desconto em seu 
	salário\n\n", diferenca);
	return 0;
}