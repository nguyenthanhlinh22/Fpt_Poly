#include<stdio.h>
#include<math.h>
int main(){
	float a,b,c,x,x1,x2;
	int cauhoi;
	char dapan;
	float delta;
	printf(" Moi chon cau hoi de tra loi: cau : ");
	scanf(" %d",&cauhoi);
	switch(cauhoi){
		case 1:
			printf("\n GIAI PHUONG TRINH BAC 1: ax + b = 0.");
			printf("\n Moi nhap so a :");
			scanf(" %f",&a);
			printf("\n Moi nhap so b :");
			scanf(" %f",&b);
			printf("\n Phuong trinh co nghiem la : x=-b/a ");
			printf("\n Dap an. \n A.PTVN.    B.%f.      C.%f.     D.Khong cau nao dung. ",b/a,-b/a);
			printf("\n Moi chon dap an.");
			scanf(" %c",&dapan);
			switch(dapan){
				case 'A':
				printf("\n Sai.");
				break;
				case 'B':
				printf("\n Sai.");
				break;
				case 'C':
				printf("\n Dung.");
				break;
				case 'D':
				printf("\n Sai");
				break;
				}
		break;
		case 2:
			printf("\n GIAI PHUONG TRINH BAC 2: ax^2 + bx + c = 0.");
			printf("\n Moi nhap so a :");
			scanf(" %f",&a);
			printf("\n Moi nhap so b :");
			scanf(" %f",&b);
			printf("\n Moi nhap so c :");
			scanf(" %f",&c);
			if (a==0){
				printf("\n Phuong trinh co nghiem la :");
				printf("\n Dap an. \n A.PTVN.    B.%f.      C.%f.     D.Khong cau nao dung. ",-c/b,c/b);
			printf("\n Moi chon dap an.");
			scanf(" %c",&dapan);
			switch(dapan){
				case 'A':
					printf("\n Sai. ");
					break;
				case 'B':
					printf("\n dung.");
				    break;
				case 'C':
					printf("\n sai. ");
					break;
				case 'D':
					printf("\n Sai");
					break;
				}
			}
			if (a!=0){
				delta=b*b-4*a*c;
				if(delta<0){
					printf("\n Phuong trinh co nghiem la :");
					printf("\n Dap an. \n A.PTVN.    B.PT co nghiem sap dung.      C.Phong Trinh co 10 nghiem.     D.Khong co dap an nao dung. ");
					printf("\n Moi chon dap an.");
					scanf(" %c",&dapan);
					switch(dapan){
						case 'A':
						printf("\n Dung");
						break;
						case 'B':
						printf("\n sai");
						break;
						case 'C':
						printf("\n sai");
						break;
						case 'D':
						printf("\n Sai");
						break;
							}
				} else if (delta==0) {
					x= -b/(2*a);
					printf("\n Phuong trinh co nghiem la :");
					printf("\n Dap an. \n A.PT co nghiem kep x= %f.    B.PTVN.      C.Phong Trinh co 2 nghiem x1=%f va x2=%f.     D.Khong co dap an nao dung. ",x,x*2,x/3);
					printf("\n Moi chon dap an.");
					scanf(" %c",&dapan);
					switch(dapan){
						case 'A':
						printf("\n Dung");
						break;
						case 'B':
						printf("\n sai");
						break;
						case 'C':
						printf("\n sai");
						break;
						case 'D':
						printf("\n Sai");
						break;
						}
				}else if (delta>0){
					x= -b/(2*a);
					x1 = (-b + sqrt(delta))/(2*a);
					x2 = (-b - sqrt(delta))/(2*a);
					printf("\n Phuong trinh co nghiem la :");
					printf("\n Dap an. \n A.PTVN.    B.PT co nghiem kep x= %f.      C.Khong co dap an nao dung.     D.Phong Trinh co 2 nghiem x1=%f va x2=%f. ",x,x1,x2);
					printf("\n Moi chon dap an.");
					scanf(" %c",&dapan);
					switch(dapan){
						case 'A':
						printf("\n sai");
						break;
						case 'B':
						printf("\n sai");
						break;
						case 'C':
						printf("\n sai");
						break;
						case 'D':
						printf("\n Dung");
						break;
						}
					}
			}
		break;
			
	}
}

