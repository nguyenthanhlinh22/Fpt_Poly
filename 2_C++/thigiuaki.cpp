#include <stdio.h>

int main()
{
            int i,in,idem=0;
            printf("Nhap vao so nguyen: ");
            scanf("%d",&in);
            printf("Cac uoc so la: ");
    for(i=1;i<=in;i++)
	if(in%i == 0)
{
	printf("%d, ",i);
	idem++;
}

    printf("\nSo uoc so la %d",idem);
}
// Viet chuong trinh nhap so nguyen duong n.Kiem tra n co phai la so nguyen to hay khong?




// Viet chuong trinh nhap so nguyen duong n.Kiem tra n co phai la so nguyen to hay khong?



//#include <iostream>
//using namespace std;
//
//bool KTSNT(int x)
//{
//	if(x<2)
//		return false;
//	for(int i=2; i<=x/2; i++)
//		if(x%i==0)
//			return false;
//	return true;
//}
//
//int main()
//{
//	unsigned int n;
//	cout<<"Nhap vao so nguyen duong n: ";
//	cin>>n;
//	if(KTSNT(n)==true)
//		cout<< n << " la so nguyen to!";
//	else
//		cout<< n <<" khong la so nguyen to!";
//	cout<<endl;
//}


//#include "stdio.h"
//#include "math.h"
//int kiemtrasonguyento(int x){
//	if(x<=1) return 0;
//	for(int j=2; j<sqrt(x); j++){
//		if (x%j==0) return 0;
//	}
//	return 1;
//	
//}
//int main(){
//	int n;
//	do{
//		printf("nhap n=");
//		scanf("%d", &n);
//		
//	}while(n<1);
//	for(int i=2; i<=n; i++){
//		if(kiemtrasonguyento(i)){
//			printf("%d", i);
//		}
//	}
//}
//#include <stdio.h>
//#include <math.h>
// 
//int main(){
//    int n;
//    printf("\nNhap n = ");
//    scanf("%d", &n);
//    if(n < 2){
//        printf("\n%d khong phai so nguyen to", n);
//        return 0;
//    }
//    int count = 0;
//    for(int i = 2; i <= sqrt(n); i++){
//        if(n % i == 0){
//            count++;
//        }
//    }
//    if(count == 0){
//        printf("\n%d la so nguyen to", n);
//    }else{
//        printf("\n%d khong phai so nguyen to", n);
//    }
//}

 




