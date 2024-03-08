#include<stdio.h>

int main(){
	printf("\n                          -- NGUYEN THANH LINH-- \n");
	printf("\n                          --      WE18307     -- \n");
	printf("Ban muon mang bao nhieu Hang: ");
	int hang;
		scanf("%d", &hang);
		printf("Ban muon mang bao nhieu cot: ");
	int cot;
		scanf("%d", &cot);
	int mang[hang][cot];
	for(int i=0; i<hang ; i++){
		for(int j=0; j<cot; j++){
			printf(" Moi ban nhap gia tri cua hang %d va cot %d : ",i,j);
			scanf("%d",&mang[i][j]);
		}
	}
		printf("\n Gia tri cua mang la: \n");
	for (int i=0; i<hang; i++){
		for(int j=0; j<cot; j++){
			printf(" %d\t ",mang[i][j]);
		}
	}
		printf("\n Cac so chan trong mang la:\n");
    for(int i=0; i<hang ; i++){
    	for(int j=0; j<cot; j++){
        	if(mang[i][j]%2==0){
            printf("%d \t",mang[i][j]);
            }
        }
    }
   		 printf("\n Cac so le trong mang la:\n");
    for(int i=0; i<hang ; i++){
    	for(int j=0; j<cot; j++){
        	if(mang[i][j]%2!=0){
            printf("%d \t",mang[i][j]);
            }
        }
    }
}
