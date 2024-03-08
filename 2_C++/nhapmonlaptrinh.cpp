#include<stdio.h>
int main(){
	float r;
	printf("                --- THI CUOI KI ---                     \n");
	printf("              COM108-NHAP MON LAP TRINH       \n ");
	printf(" XAY DUNG CHUONG TRINH TINH THE TICH HINH CAU \n");
	printf("\n--------------------------------------------\n");
	printf("\n Nhap ban kinh hinh cau r = ");
	scanf("%f",&r);
	printf("\n The tich hinh cau V = 4/3 * 3.14 * %.1f *%.1f *%.1f = %.1f .",r,r,r,(4 / 3) * 3.14 * r*r*r);
	
    int n;
  	long P = 1;
  	do{
    	printf("\n Nhap vao so nguyen n lon hon 0: ");
    	scanf("%d", &n);
    if(n <= 0){
      	printf("\n So n phai lon hon 0, vui long nhap lai !");
    	}
  	}while(n <= 0);
 
    printf("Cac uoc so cua %d la: ",n);
    for(int i = 1; i < n; i++){
        if(n % i == 0){
      		printf("%4d", i);
      		P = P * i;      		

}
}
}
