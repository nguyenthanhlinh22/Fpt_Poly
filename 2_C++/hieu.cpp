#include<stdio.h>
int main(){
	printf("Mang 1 chieu chua co san gia tri: \n");
	int number1 =5;
	int number2 =10;
	int number3 = 15;
	int numbers[3] = {5,10,15};
	printf("So thu nhat: %d\n", numbers[0]);
	printf("So thu hai: %d\n", numbers[1]);
	printf("So thu ba: %d\n", numbers[2]);
	printf("=======================\n");
	printf("Mang 1 chieu chua co san gia tri: \n");
	printf("Ban muon nhap vao bao nhieu so: ");
	int count;
	scanf("%d", &count);
	int myArr[count];
	for(int i = 0; i<count; i++){
		int num;
		printf("Moi nhap so thu %d: ", (i+1));
		scanf("%d", &num);
		myArr[i] = num;
	}
    printf("Gia tri mang vua nhap bao gom : \n ");
    for(int j = 0; j< count; j++){
    	printf(" %d", myArr[j]);
    	
	}

}
