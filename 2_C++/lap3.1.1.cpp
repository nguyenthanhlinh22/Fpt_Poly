#include <stdio.h>
int main(){
int n,diem;
    printf("Moi nhap diem:\n"); scanf("%d",& diem);
    while(0>diem||diem>10); 
    //diem lon hon 0 hoac diem lon hon 10 thi yeu cau nhap lai
    if(diem>=9){
        printf("hoc luc xuat sac");
    }else if(diem>=8){
        printf("hoc luc gioi");
    }else if(diem>=6.5){
        printf("hoc luc kha");
    }else if(diem>=5){ 
        printf("hoc luc trung binh");
    }else if(diem>=3.5){
        printf("hoc luc yeu");
    }else
    printf("hoc luc kem");
}
