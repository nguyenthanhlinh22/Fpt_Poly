#include<stdio.h>
#include<windows.h>
struct sinhvien{
	char mssv[10];
	char tensv[20];
	char nganhhoc[30];
	float diemtb;
};
int main(){
	int i, n,count=1;
	printf(" Nhap so luong sinh vien muon them : ");
	scanf("%d",&n);
	struct sinhvien nhomsv[n];
	struct sinhvien sv;
	char xeploai[10];
	char mssv[10];
	for(i=0; i<n; i++){
		printf("\n Nhap ma so sinh vien %d : ",count);
		fflush(stdin);
		gets(nhomsv[i].mssv);
		printf("\n Nhap ten sinh vien %d : ",count);
		gets(nhomsv[i].tensv);
		printf("\n Nhap nganh hoc sinh vien %d : ",count);
		gets(nhomsv[i].nganhhoc);
		printf("\n Nhap diem TB sinh vien %d : ",count);
		scanf("%f",&nhomsv[i].diemtb);
		count++;
	}
	for( i=n-1; i>0; i--){
		for(int j=1; j<=i; j++){
			if(nhomsv[j-1].diemtb < nhomsv[j].diemtb){
				sv = nhomsv[j-1];
				nhomsv[j-1] = nhomsv[j];
				nhomsv[j] = sv;
			}
		}
	}
	printf("\n %10s | %-20s | %-20s | %5s | %10s\n","MSSV","Ho ten","Nganh hoc","Diem","Xep loai");
	for(i=0 ; i<n ; i++){
		if (nhomsv[i].diemtb>=9){
			strcpy(xeploai,"Xuat sac");
		}else if (nhomsv[i].diemtb>=8){
			strcpy(xeploai,"Gioi");
		}else if (nhomsv[i].diemtb>=6.5){
			strcpy(xeploai,"Kha");
		}else if (nhomsv[i].diemtb>=5){
			strcpy(xeploai,"Trung Binh");
		}else {
			strcpy(xeploai,"Yeu");
		}
		printf("\n %10s | %-20s | %-20s | %5.1f | %10s \n",nhomsv[i].mssv,nhomsv[i].tensv,nhomsv[i].nganhhoc,nhomsv[i].diemtb,xeploai);
	}
		
		printf("\n Nhap MSSV can tim trong danh sach : ");
		fflush(stdin);
		gets(mssv);
		for(i=0 ; i<n ; i++){
			if(strcmp(nhomsv[i].mssv,mssv)==0){
				printf("\n %10s | %-20s | %-20s | %5s | %10s\n","MSSV","Ho ten","Nganh hoc","Diem","Xep loai");
				printf("\n %10s | %-20s | %-20s | %5.1f | %10s \n",nhomsv[i].mssv,nhomsv[i].tensv,nhomsv[i].nganhhoc,nhomsv[i].diemtb,xeploai);
			}else{
				printf("\n Ban da nhap sai ma MSSV. Moi ban nhap lai.");	
			}
		}
}
