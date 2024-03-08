#include <cstdlib> 
#include <iostream> 
#include<iomanip> 
  
using namespace std; 
  
void displaymenu(){ 
cout<<"==================================================="<<"\n"; 
cout<<"                         MENU                                  "<<"\n"; 
cout<<"==================================================="<<"\n"; 
cout<<"     1. Cong"<<"\n"; 
cout<<"     2. Tru"<<"\n"; 
cout<<"     3. Nhan"<<"\n"; 
cout<<"     4. Chia"<<"\n"; 
cout<<"     5. Chia lay phan du"<<"\n"; 
     } 
int Cong(int a,int b){ 
    return(a+b); 
} 
  
int Tru(int a, int b){ 
    return(a-b); 
} 
  
int Nhan(int a, int b){ 
    return(a*b); 
} 
float Chia(int a,int b){ 
      return(a/b); 
} 
int Phandu(int a, int b){ 
    return(a%b); 
} 
  
int main(int argc, char *argv[]) 
{ 
 //hien thi menu 
displaymenu(); 
int luachon; 
int a; 
int b; 
char confirm; 
do 
{ 
cout<<"Nhap lua chon cua ban (1-5):"; 
cin>>luachon; 
cout<<"Nhap hai so nguyen:"; 
cin>>a>>b; 
cout<<"\n"; 
switch(luachon){ 
 case 1:cout<<"Ket qua:"<<Cong(a,b);break; 
 case 2:cout<<"Ket qua:"<<Tru(a,b);break; 
 case 3:cout<<"Ket qua:"<<Nhan(a,b);break; 
 case 4:cout<<"Ket qua:"<<Chia(a,b);break; 
 case 5:cout<<"Ket qua:"<<Phandu(a,b);break; 
 default:cout<<"Khong hop le"; 
                   }                    
cout<<"\nNhan y hoac Y de tiep tuc:"; 
       cin>>confirm; 
}while(confirm=='y'||confirm=='Y'); 
  
   return 0; 
}
