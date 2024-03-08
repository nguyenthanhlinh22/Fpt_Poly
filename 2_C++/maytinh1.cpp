#include<stdio.h>
void tong2so(){
	int number1, number2;
	printf("\n Moi nhap so thu nhat:");
	scanf("%d",&number1);
	printf("\n Moi nhap so thu hai:");
	scanf("%d",&number2);
	printf("\n %d + %d = %d",number1,number2,number1+number2);
}
void hieu2so(){
	int number1, number2;
	printf("\n Moi nhap so thu nhat:");
	scanf("%d",&number1);
	printf("\n Moi nhap so thu hai:");
	scanf("%d",&number2);
	printf("\n %d - %d = %d",number1,number2,number1-number2);
}void tich2so(){
	int number1, number2;
	printf("\n Moi nhap so thu nhat:");
	scanf("%d",&number1);
	printf("\n Moi nhap so thu hai:");
	scanf("%d",&number2);
	printf("\n %d * %d = %d",number1,number2,number1*number2);
}void thuong2so(){
	int number1, number2;
	printf("\n Moi nhap so thu nhat:");
	scanf("%d",&number1);
	printf("\n Moi nhap so thu hai:");
	scanf("%d",&number2);
	printf("\n %d / %d = %d",number1,number2,number1/number2);
}
int main(){
	int option;
	char cont;
	printf("\n  ================================================================================================================");
	printf("\n 						NHAP MON LAP TRINH \n");
	printf("\n 						Lop: WEB18307 \n");
	printf("\n 						MSSV: PD08626 \n");
	printf("\n 				    	Ho Va Ten: NGUYEN THANH LINH \n");
	printf("\n  ================================================================================================================");
	do{
		printf("\n 1. Chuong trinh: Tong cua 2 so.");
		printf("\n 2. Chuong trinh: Hieu cua 2 so");
		printf("\n 3. Chuong trinh: Tich cua 2 so.");
		printf("\n 4. Chuong trinh: Thuong cua 2 so.");
		printf("\n 5. Chuong trinh: Thoat.");
		printf("\n  Moi ban chon lua chon chuong trinh.");
		scanf("%d", &option);
		switch(option) {
			case 1:
				printf("\n 1. Chuong trinh: Tong cua 2 so .");
				tong2so();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
			case 2:
				printf("\n 2. Chuong trinh: Hieu cua 2 so.");
				hieu2so();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
			case 3:
				printf("\n 2. Chuong trinh: Tich cua 2 so.");
				tich2so();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
			case 4:
				printf("\n 2. Chuong trinh: Thuong cua 2 so.");
				thuong2so();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
			case 5:
				cont = 'N';
				break;
		break;		
		}
			
	} while(cont=='Y');
	
}

