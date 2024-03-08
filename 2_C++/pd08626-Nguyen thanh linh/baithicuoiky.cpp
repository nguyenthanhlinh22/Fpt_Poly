#include<stdio.h>
struct nhanvien{
	char ten[30];
	int tuoi;
	int luong;
};
int main(){
	struct nhanvien ds[100];
	int n,temp;
	float max=0;
	printf(" XAY DUNG CHUONG TRINH DANH SACH NHAN VIEN.\n");
	printf("\n--------------------------------------------------------\n");
	printf("\n Nhap so luong nhan vien n = ");
	scanf("%d",&n);
	for(int i=0 ; i<n ; i++){
		printf("\n Nhap ten nhan vien thu %d : ",i+1);
		fflush(stdin);
		gets(ds[i].ten);
		printf("\n Nhap tuoi nhan vien thu %d : ",i+1);
		scanf("%d",&ds[i].tuoi);
		printf("\n Nhap luong nhan vien thu %d : ",i+1);
		scanf("%d",&ds[i].luong);	
	}
	printf("\n Danh sach nhan vien.\n ");
	printf("\n %5s | %-20s | %10s | %30s \n ","STT","Ten NV","Tuoi","Luong NV");
	for(int i=0 ; i<n ; i++){
		printf("\n %5d | %-20s | %10d | %30d VND",i+1,ds[i].ten,ds[i].tuoi,ds[i].luong);
	}
	printf("\n");
	for(int i=0 ;i<n ; i++){
		if(max < ds[i].luong){
			max=ds[i].luong;
			temp=i;
		}
	}
	printf("\n Ten nhan vien co muc luong co nhat la: \n");
	printf("\n %-20s | %10d | %30d VND",ds[temp].ten,ds[temp].tuoi,ds[temp].luong);
}
