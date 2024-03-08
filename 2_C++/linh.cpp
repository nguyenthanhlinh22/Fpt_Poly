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
    int n;
    printf("\nNhap n = ");
    scanf("%d", &n);
    if(n < 2){
        printf("\n%d khong phai so nguyen to", n);
        return 0;
    }
    int count = 0;
    for(int i = 2; i <= sqrt(n); i++){
        if(n % i == 0){
            count++;
        }
    }
    if(count == 0){
        printf("\n%d la so nguyen to", n);
    }else{
        printf("\n%d khong phai so nguyen to", n);
    }
}
