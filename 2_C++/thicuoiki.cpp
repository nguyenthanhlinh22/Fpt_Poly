#include<stdio.h>
void soNguyenPD07578(int n,int a){
	printf("\n Tong S = ");
	for(int i=1; i<=n; i++){
		printf("%d",i);
		if(i!=n){
			printf(" + ");
		}else{
			printf("");
		}
		a=a+i;	
	}
	printf(" = %d",a);
}
struct kichcoTiviPD07578{
	int dai;
	int rong;
	char tentivi[20];
};
int main(){
	char mssv[10];
	char hoten[50];
	float diem;
	struct kichcoTiviPD07578 kctv[30];
	int option,a=0,n;
	float trungbinhdai=0,trungbinhrong=0;
	char cont;
	do{
		printf("\n+-------------------Menu-------------------+\n");	
		printf("\n 1. Thong tin ca nhan.");
		printf("\n 2. Tinh tong tu 1 den N.");
		printf("\n 3. Thong tin Ti Vi.");	
		printf("\n 0. Thoat.");
		printf("\n+------------------------------------------+\n");
		do{
			printf("\n Moi chon.");
			scanf("%d", &option);
		} while(option<0 || option>3);
			switch(option) {
				case 1:
					printf("\n 1. Thong tin ca nhan. Dang chay.");
					printf("\n Nhap Ho Ten sinh vien. ");
					fflush(stdin);
					gets(hoten);
					printf("\n Nhap Ma so sinh vien. ");
					gets(mssv);
					printf("\n Nhap Diem sinh vien. ");
					scanf("%f",&diem);
					printf("%10s | %-20s | %5s |\n","MSSV","Ho ten","Diem");
					printf("%10s | %-20s | %5.1f |\n",mssv,hoten,diem);
					printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
					scanf(" %c",&cont);
					break;
				case 2:
					printf("\n 2. Tinh tong tu 1 den N. Dang chay.");
					printf("\n Moi nhap 1 so Nguyen duong bat ky: N = ");
					scanf("%d",&n);
					soNguyenPD07578(n,a);
					printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
					scanf(" %c",&cont);
					break;
				case 3:
					printf("\n 3. Thong tin Ti Vi. Dang chay.");
					printf("\n+-------------------Thong tin Ti Vi cua hang-------------------+\n");
					do{
						printf("\n Moi nhap so luong Ti Vi : ");
						scanf("%d",&n);
					} while(n<=1);
						for(int i=1 ; i<=n ; i++){
							printf("\n Nhap Ten va kich co cho ti vi thu %d",i);
							printf("\n Ten Ti vi : ");
							fflush(stdin);
							gets(kctv[i].tentivi);
							printf("\n Dai : ");
							scanf("%d",&kctv[i].dai);
							printf("\n rong : ");
							scanf("%d",&kctv[i].rong);
						}
						printf("%-5s | %-20s | %10s          x %10s \n","Vi tri","Ten Tivi","dai","rong");
						for(int i=1 ; i<=n ; i++){
							printf(" %-5d | %-20s | %10d          x %10d \n",i,kctv[i].tentivi,kctv[i].dai,kctv[i].rong);
							trungbinhdai=(trungbinhdai+kctv[i].dai);
							trungbinhrong=(trungbinhrong+kctv[i].rong);
						}
						printf("\n Kich co trung binh tiVi dai x rong:: %5.1f  x %5.1f ",trungbinhdai/n,trungbinhrong/n);
						printf("\n Vi tri Ti Vi co kich co lon nhat la: ");
						float max;
						int index;
						for(int i=1 ; i<=n ; i++){
							a=kctv[i].dai*kctv[i].rong;
							if(a>max){
								max=a;
								index=i;
							}
					}
}
}

					
