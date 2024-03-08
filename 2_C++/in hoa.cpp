#include<stdio.h>
#include<string.h>   
int main(){
	char name[20][30];
	for(int i=0; i<20; i++){
		printf(" Moi ban nhap ten thu %d : ",i+1);
		gets(name[i]);
	}
	printf("\n Danh sach ten da nhap: \n");
	for (int i=0; i<20; i++){
		printf("%d .",i+1);
		strupr(name[i]);   
		puts(name[i]);
	}
}

	


