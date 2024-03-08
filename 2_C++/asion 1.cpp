
#include<stdio.h>
#include <math.h>
#include <windows.h>

void soNguyenTo(float x){
	int i;
	int check=0; 
	for(i=2;i<x;i++){
		if((int)x%i==0){
		check = 1;
		break;
		}
	}
	if(check==0){
		printf("%.2f la so nguyen to.\n",x); 
	} else{
		printf("%.2f khong phai la so nguyen to. \n",x); 
	}
}
void soChinhPhuong(float x){
	int i;
	int check=0; 
	 for(i=1;i<x;i++){
	 	if(i*i==x){ 
	 	check = 1;
		 break;
		 }
	 }if(check==1){
	 	printf("%.2f la so chinh phuong.\n",x); 
	 } else{
	 	printf("%.2f khong phai la so chinh phuong. \n",x);
	 } 
}
void soNguyen(float x){
  if(x==(int)x){
    printf("%.2f la so nguyen",x);
  }else{
    printf("%.2f khong phai la so nguyen",x);
  }
}
main(){
	float a;
	int x,y;
	printf("*-------------- Asignment------------------*\n");
	printf("   ===============MENU==============\n"); 
	LOI: 
	printf(" L------------------------------------------O\n");
	printf("|     1. Kiem tra so.                        |           \n");
	printf("|     2. Tim uoc chung, boi chung.           |           \n");	
    printf("|     3. Chuong trinh tinh tien karaoke.     |           \n");
	printf("|     4. Tinh tien dien.                     |           \n"); 
	printf("|     5. Chuc nang doi tien.                 |           \n");
	printf("|     6. Vay lai xuat ngan hang.             |           \n");
	printf("|     7. Vay mua xe.                         |           \n");
	printf("|     8. Sap xep thong tin sinh vien.        |          \n");
	printf("|     9. Game FPT-Lott.                      |            \n");
	printf("|     10. Chuong trinh tinh toan 2 phan so   |\n");
	printf("|     11. Thoat khoi chuong trinh.           |       \n");
    printf(" E------------------------------------------V\n\n"); 
	printf("Xin moi ban chon chuc nang: ");
	int so; scanf("%d",&so);
	switch(so){ 
	case 1:
		printf("Chao mung ban den voi chuc nang so 1!\n");
		printf("Kiem tra so:\n");
		printf("moi ban nhap so muon kiem tra:"); scanf("%f",&a);
		soNguyenTo(a);
		soChinhPhuong(a);
		soNguyen(a);
		break; 
	  case 2:
		printf("Chao mung ban den voi chuc nang so 2!\n");
		printf("Tim uoc chung, boi chung\n");
		break;
	   	 	default:
		    printf("Moi ban chon lai:\n");
		
		 
				    			
	} 
	return 0;
}

