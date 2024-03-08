#include<stdio.h>
#include<math.h>
int main(){
	float a,b,c,x,x1,x2;
	float delta;
	printf("\n GIAI PHUONG TRINH BAC 2: ax^2 + bx + c= 0.");
	printf("\n Moi nhap so a:");
	scanf("%f", &a);
	printf("\n Moi nhap so b:");
	scanf("%f", &b);
	printf("\n Moi nhap so c:");
	scanf("%f", &c);
	if (a==0){
		printf("\n Phuong trinh co nghiem la:");
		printf("\n x= %.2f/%.2f = %.2f", -c,b,-c/b);
	}
	if (a!=0){
		delta=b*b-4*a*c;
		printf("\n delta = b*b-4*a*c = %.2f",b*b-4*a*c);
		if(delta<0){
			printf("\n Vi delta < 0 nen:");
			printf("\n Phuong trinh vo nghiem  :");			
		}else if ( delta==0){
			x= -b/(2*a);
			printf("\n Phuong trinh co kep la: ");
			printf("\n x= -b/(2*a) = %.2f", -b/(2*a));
		}else if (delta>0){
			x1 = (-b + sqrt(delta))/(2*a);
			x2 = (-b + sqrt(delta))/(2*a);
			printf("\n Phuong trinh co nghiem la:  ");
			printf("\n x1 = (-b + sqrt(delta))/(2*a)= %.2f",x1 );
						printf("\n x2 = (-b - sqrt(delta))/(2*a)= %.2f",x2 );

			
		}
	}
}
