#include<stdio.h>
int main(){
    float chuDien, tienDien;
    printf("Nhap so chu dien");
    scanf("%f",&chuDien);
    if(chuDien<=50){
        tienDien = chuDien*1678;
    }else if (chuDien<=100){
        tienDien = 501678 + (chuDien-50)*1734;
    }else if (chuDien<=200){
        tienDien = 501678+501734+(chuDien-100)*2014;
    }else if (chuDien<=300){
        tienDien = 501678+501734+1002014+(chuDien-200)*2536;
    }else if (chuDien<=400){
        tienDien = 501678+501734+1002014+1002536+(chuDien-300)*2834;
    }else {tienDien= 501678+501734+1002014+1002536+1002834+(chuDien-400)*2927;
    }
    printf("\nTiendien = %.1f",tienDien);
    return 0;
    }
