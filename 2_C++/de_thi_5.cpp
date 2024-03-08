//#include<stdio.h>
//int main(){
//	int a,b,c;
//	printf("+---------------------- CAU 1: ----------------------+");
//	printf("\n Moi Nhap so nguyen a : ");
//	scanf("%d",&a);
//	printf("\n Moi Nhap so nguyen b : ");
//	scanf("%d",&b);
//	printf("\n Moi Nhap so nguyen c : ");
//	scanf("%d",&c);
//	printf("\n Trung Binh cong cua a,b,c la : ( %d + %d + %d ) / 3 = %d .",a,b,c,(a+b+c)/3);
//}

//------------------------------------------------------------------------------------------

//#include<stdio.h>
//int main(){
//	int n,i,max=0,dem=0;
//	int mang1chieu[n];
//	printf("+---------------------- CAU 2: ----------------------+");
//	printf("\n Mang co bao nhieu so nguyen ? Moi nhap : ");
//	scanf("%d",&n);
//	for( i=0 ; i<n ; i++){
//		printf("\n Nhap so nguyen thu %d trong mang : ",i+1);
//		scanf("%d",&mang1chieu[i]);
//	}
//	printf("\n Mang 1 chieu: mang1chieu[%d] = { ",n);
//	for( i=0 ; i<n ;i++){
//		if ( i < n-1){
//		printf("%d , ",mang1chieu[i]);
//		}else{
//			printf("%d ",mang1chieu[i]);
//		}
//	}
//	printf("} \n");
//	printf("\n+----------------------Tim phan tu MAX trong mang : ----------------------+ \n");
//	for( i=0 ; i<n ;i++){
//		if (max < mang1chieu[i]){
//		max = mang1chieu[i];
//		}
//	}
//	printf("\n Phan tu MAX trong mang la MAX = %d .\n",max);
//	printf("\n+--------------------- Dem so phan tu chia het cho 3 :---------------------+ \n");
//	for( i=0 ; i<n ;i++){
//		if (mang1chieu[i] %3 == 0){
//			printf(" %d \t",mang1chieu[i]);
//			dem++;
//		}
//	}
//	printf("\n So phan tu chia het cho 3 la co: %d so (trong mang)",dem);
//}

//------------------------------------------------------------------------------------------

#include<stdio.h>
struct sinhvien{
	char ten[30];
	int tuoi;
	float diemtoan;
	float diemtin;
	float diemhoa;
};
int main(){
	struct sinhvien dssv[100];
	int n,i;
	printf("\n+--------------------- CAU 3 :---------------------+ \n");
	printf("\n Co bao nhieu sinh vien can nhap : ");
	scanf("%d",&n);
	printf("\n+--------------------- Nhap vao mang tung sinh vien :---------------------+ \n");
	for( i=0 ;i < n; i++){
		fflush(stdin);
		printf("\n Sinh vien thu %d : Ten: ",i+1);
		gets(dssv[i].ten);
		printf("\n Sinh vien thu %d : Tuoi: ",i+1);
		scanf("%d",&dssv[i].tuoi);
		printf("\n Sinh vien thu %d : Diem Toan: ",i+1);
		scanf("%f",&dssv[i].diemtoan);
		printf("\n Sinh vien thu %d : Diem Tin: ",i+1);
		scanf("%f",&dssv[i].diemtin);
		printf("\n Sinh vien thu %d : Diem Hoa: ",i+1);
		scanf("%f",&dssv[i].diemhoa);
		printf("\n+------------------------------------------+ \n");
	}
	printf("\n %-20s | %5s | %10s | %10s | %10s ","Ten","Tuoi","Diem Toan","Diem Tin","Diem Hoa");
	for( i=0 ;i < n; i++){
		printf("\n %-20s | %5d | %10.1f | %10.1f | %10.1f ",dssv[i].ten,dssv[i].tuoi,dssv[i].diemtoan,dssv[i].diemtin,dssv[i].diemhoa);
	}
}
