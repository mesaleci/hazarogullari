/* 1th GED Regiment Software Department*/ 
#include<stdio.h>
#include<stdlib.h>

int main()
{
	int tamsayi1,tamsayi2,toplam;
	
	printf("ilk tamsayiyi giriniz\n");
	scanf("%d",&tamsayi1);
	printf("ikinci tamsayiyi giriniz\n");
	scanf("%d",&tamsayi2);
	toplam = tamsayi1+tamsayi2;
	printf("Sonuc = %d \a",toplam);
	system("pause");
	return 0;
}
