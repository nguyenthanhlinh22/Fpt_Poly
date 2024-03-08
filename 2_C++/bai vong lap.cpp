#include<stdio.h>
 int main(){
    int option;
	char cont;
    do {
    	printf("Chuc nang 1\n");
    	printf("Chuc nang 2\n");
    	printf("3.Exit\n");
    	printf("Moi nhap lua chon cua ban: ");
    	scanf("%d", &option);
    		switch(option) {
    		    case 1:
    		      	printf("Chuc nang 1 duoc chay!\n");
    		      	printf("Ban co muon tiep tuc chung trinh? (Y/N) \n");
    		      	scanf(" %c", &cont);
					break;
    		    case 2:
    		   		printf("Chuc nang 2 duoc chay\n!");
    		   		printf("Ban co muon tiep tuc chung trinh? (Y/N) \n");
    		      	scanf(" %c", &cont);
    		     	break;
    		    case 3 :
    		    	cont = 'N';
    		    	break;
    	}
	} while(cont == 'Y');
}

