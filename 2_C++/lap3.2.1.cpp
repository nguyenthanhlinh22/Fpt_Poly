#include <stdio.h>

int main(){
    float a,b;

    printf("Nhap gia tri a: "); scanf("%f", &a); 
    printf("Nhap gia tri b: "); scanf("%f", &b);

    if(a==0){
        if(b==0){
            printf("phuong trinh vo so nghiem");
            } else {printf("phuong trinh vo nghiem");}
        }else{
            printf("phuong trinh co 1 nghiem la: %f", -b/a);
        }

    return    0;
}
