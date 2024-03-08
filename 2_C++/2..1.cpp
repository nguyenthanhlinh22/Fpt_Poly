#include<stdio.h>
#include<math.h>
int main (){
	float number;
			int demo=0;
			printf(" \n \n Chuong trinh kiem tra so nguyen. \n");
			printf(" Moi nhap vao 1 so bat ki: ");
			scanf("%f",&number);
			if (number == (int)number){
				printf(" Day la so nguyen. \n");
			}else{
				printf(" Day khong phai la so nguyen. \n");
			}
}
