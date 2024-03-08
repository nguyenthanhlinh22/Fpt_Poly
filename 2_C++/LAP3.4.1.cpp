#include<stdio.h>
#include<math.h>
int main(){
	float a,b,c,x,x1,x2,diem,soDien,tienDien;
	int cauhoi;
	char dapan;
	float delta;
	printf(" MENU bai tap LAP 3");
	printf("\n Moi chon cau hoi de tra loi: cau : ");
	scanf(" %d",&cauhoi);
	switch(cauhoi){
		case 1:
			printf(" XAY DUNG CHUONG TRINH TINH HOC LUC.");
			printf("\n Nhap vao diem cua sinh vien (0-10): ");
			scanf("%f",&diem);
			if (diem>10){
				printf("\n Ban da nhap sai diem. xin moi nhap lai");
			}else if (diem>=9){
				printf("\n Hoc luc xuat sac.");
			}else if (diem>=8){
				printf("\n Hoc luc gioi.");
			}else if (diem>=6.5){
				printf("\n Hoc luc kha.");
			}else if (diem>=5){
				printf("\n Hoc luc trung binh.");
			}else if (diem>=3.5){
				printf("\n Hoc luc yeu.");
			}else {
				printf("\n Hoc luc kem.");
			}
			break;
		case 2:
			printf(" Giai Phuong Trinh Bac 1 ax+b=0 ");
			printf("\n Moi Nhap so a: ");
			scanf("%f",&a);
			printf("\n Moi nhap so b: ");
			scanf("%f",&b);
			if (a==0){
				if (b==0){
				printf("\n Phuong trinh co vo so nghiem.");
				}else if(b!=0){
					printf("\n Phuong trinh vo nghiem.");
				}
			}else {
				printf("\n Phuong trinh co nghiem la : -b/a: -%f/%f=%f",b,a,-b/a);
			}
			break;
		case 3:
			printf("\n GIAI PHUONG TRINH BAC 2: ax^2 + bx + c = 0.");
			printf("\n Moi nhap so a :");
			scanf(" %f",&a);
			printf("\n Moi nhap so b :");
			scanf(" %f",&b);
			printf("\n Moi nhap so c :");
			scanf(" %f",&c);
			if (a==0){
				printf("\n Phuong trinh co nghiem la :");
				printf("\n x= %.2f/%.2f = %.2f",-c,b,-c/b);	
			}
			if (a!=0){
				delta=b*b-4*a*c;
				printf("\n delta = b*b-4*a*c = %.2f",b*b-4*a*c);
				if(delta<0){
					printf("\n Vi delta < 0 nen: ");
					printf("\n Phuong trinh vo nghiem  :");
				} else if (delta==0) {
					x= -b/(2*a);
					printf("\n Phuong trinh co nghiem kep la :");
					printf("\n x= -b/(2*a) = %.2f",-b/(2*a));
				} else if (delta>0){
					x1 = (-b + sqrt(delta))/(2*a);
					x2 = (-b - sqrt(delta))/(2*a);
					printf("\n Phuong trinh co nghiem la :");
					printf("\n 	x1 = (-b + sqrt(delta))/(2*a) = %.2f ",x1);
					printf("\n 	x2 = (-b - sqrt(delta))/(2*a) = %.2f ",x2);
				}
			}
			break;
		case 4:
			printf("\n XAY DUNG CHUONG TRINH TINH TIEN ÐIEN");
			printf(" Nhap so dien da dung trong thang : ");
			scanf("%f",&soDien);
			if(soDien<=50){
				tienDien = soDien*1678;
			}else if (soDien<=100){
				tienDien = 50*1678 + (soDien-50)*1734;
			}else if (soDien<=200){
				tienDien = 50*1678+50*1734+(soDien-100)*2014;
			}else if (soDien<=300){
				tienDien = 50*1678+50*1734+100*2014+(soDien-200)*2536;
			}else if (soDien<=400){
				tienDien = 50*1678+50*1734+100*2014+100*2536+(soDien-300)*2834;
			}else {tienDien= 50*1678+50*1734+100*2014+100*2536+100*2834+(soDien-400)*2927;
			}
			printf("\nTiendien = %.2f",tienDien);
			break;
	}
}

