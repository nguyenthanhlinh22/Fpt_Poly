#include<stdio.h>

int main(){
	int a[7]={1,2,6,2,9,1,5};
	int i,j,temp;
	for(i=0;i<6;i++){
		for(j=i+1;j<7;j++){
			if(a[i]>a[j])
			{
				temp=a[i];
				a[i]-a[j];
				a[j]=temp;
			}
		}
		for(int k = 0 ; k < 7; k++){
			printf("%d\t",a[k]);
		}
	}
}
