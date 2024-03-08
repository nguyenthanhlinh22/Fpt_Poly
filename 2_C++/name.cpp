#include<stdio.h> 
#include<string.h>
using namespace std;
int main(){
	char str[25];
	char names[10][20];
	for(int i=0; i<10;i++){
		printf("MOI nhap ten %:\n",i+1);
		gets(names[i]);
	}
	
	printf("danh sach ten da nhap:\n");
	for(int i=0;i<=strlen(str);i++){
      if(str[i]>=97&&str[i]<=122)
         str[i]=str[i]-32;
		
	
}
  
   }

   


