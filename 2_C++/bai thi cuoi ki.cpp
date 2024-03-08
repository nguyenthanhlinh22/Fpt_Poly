
#include<stdio.h>
int main(){
    int N;
    int Sum=0;
    do  {    
        printf("\nNhap N = ");
        scanf("%d", &N);
        if(N <= 0)
        {
            printf("\n N phai > 0. Xin nhap lai !");
        }
    }while(N <= 0);
    
    int i=1;
    while(i<=N-1)
    {
        if(N%i==0) 
        {
            Sum+=i;
        }
        i++; 
    }    
    printf("tong cac uoc cua %d la: %d",N,Sum);
}

