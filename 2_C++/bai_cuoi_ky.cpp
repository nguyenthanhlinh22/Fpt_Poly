  #include<stdio.h>
#include<math.h>
#include<windows.h>
#include<stdlib.h>
#include<time.h>


int UCLN(int a, int b){ 									
    while( a != b){
        if (a > b)
            a = a - b;
        else
            b = b - a;
    }
    return a; 
} 

void tienkara(int giodau,int  giocuoi){ 					
	int T=150000;
	int tonggio,tiengio,km4,kmv;
	tonggio= giocuoi-giodau;
	printf("\n Gio cuoi %dh - Gio dau %dh = %dh .",giocuoi,giodau,tonggio);
	printf("\n Tien gio: %d ",(tonggio*T));
	if(giodau>=14 && giodau<=17){
		printf("\n Khuyem mai cung gio vang 10%. ");
		if(tonggio>3){
			printf("\n Tien gio vuot qua 3h.");
			km4=(tonggio-3)*0.3*T;
			tiengio=tonggio*T-km4;
			printf("\n So gio vuot: %d => Tien KM: %d",(tonggio-3),km4);
		}else{
			tiengio=tonggio*T;
		}
		kmv= tiengio*0.1;
		printf("\n Tien gio truoc KMV: %d",tiengio);
		printf(" Tien KMV: %d", kmv);
		tiengio=tiengio-kmv;
	}else{
		if(tonggio>3){
			printf("\n Tien gio vuot qua 3h");
			km4=(tonggio-3)*0.3*T;
			tiengio=tonggio*T-km4;
			printf("\n So gio vuot: %d => Tien KM: %d ",(tonggio-3),km4);
		}else{
			tiengio=tonggio*T;
		}
	}
	printf("\n Tien phai tra : %d",tiengio);
}

void doitien(){                        				// doi tien 5
	int sotien, i, j;
		do{
		printf("\n Hay nhap vao so tien > 1 (don vi VND) :");
		scanf("%d",&sotien);
		}while(sotien<=1);
		printf("\n %d,000. VND.",sotien);
		int menhgia[9]={500,200,100,50,20,10,5,2,1};
		int totien[9]={0};
		for(i=0; i<9; i++){
			if(i==0){
				while(sotien<=menhgia[i]){
					i++;
				}
			}
			j=(int)(sotien/menhgia[i]);
			printf("\n %d to %d,000. VND.",j,menhgia[i]);
			sotien-=(j*menhgia[i]);
			if(sotien==0){
				break;
			}
		}
}

void laisuatvay(int tienvay){                        // lai xuat  6
	int tienlai;
	int tiengoc= tienvay/12;
	int tientra,tiencon;
	tiencon=tienvay;
	printf("\n----------------------------------------------------------------------------");
	for (int i=1; i<=12; i++){
		tienlai= tiencon*0.05;
		tientra= tiengoc+ tienlai;
		tiencon= tiencon - tiengoc;
		printf("\n| Ky han | Lai phai tra | Goc phai tra | So tien Phai tra | So tien con lai | ");
		printf("\n----------------------------------------------------------------------------");
		printf("%\n|%6d  |",i);
		printf("%12d  |",tienlai);
		printf("%12d  |",tiengoc);
		printf("%15d   |",tientra);
		printf("%15d  |",tiencon);
		printf("\n----------------------------------------------------------------------------");
	}
}
void tragopxe(){                                 // vay xe 7
	printf("\n Han muc cho phep 500 trieu. Don vi tinh  500,000,000 = 500,000 k VND \n");
		int tienxe;
		int tienvay;
		int tientratruoc;
		int phantramvay;
		printf("\n Moi ban nhap gia tri cua chiec xe ban mua: ");
		scanf("%d",&tienxe);
		printf("\n Moi ban nhap vao so phan tram vay toi da : ");
		scanf("%d",&phantramvay);	
		tienvay=tienxe*phantramvay/100;
		tientratruoc = tienxe - tienvay;
	    if(tienvay >500000){
			printf(" Tien tra truoc: %d k VND.\n",tienxe-tienxe*phantramvay/100);
			printf(" Tien vay: %d k VND.\n",tienvay);
	    	printf("\n Tien ban vay vuot qua han muc,xin hay dem tien nhieu hon.");
		}else{
			printf(" Tien tra truoc: %d k VND.\n",tienxe-tienxe*phantramvay/100);
			printf(" Tien vay: %d k VND.\n",tienvay);
			int tienlai,nam=1;
			int tiengoc= tienvay/288;
			int tientra,tiencon;
			tiencon=tienvay;
			printf("\n----------------------------------------------------------------------------");
			for (int i=1; i<=288; i++){
				tienlai= tiencon*0.06;
				tientra= tiengoc+ tienlai;
				tiencon= tiencon - tiengoc;
				printf("\n| Ky han | Lai phai tra | Goc phai tra | So tien Phai tra | So tien con lai | ");
				printf("\n----------------------------------------------------------------------------");
				printf("%\n|%6d  |",i);
				printf("%12d  |",tienlai);
				printf("%12d  |",tiengoc);
				printf("%15d   |",tientra);
				printf("%15d  |",tiencon);
				printf("\n----------------------------------------------------------------------------");
				if (i%12==0){
					nam++;
					printf("\n============================== Ket Thuc %d nam ==============================",nam);
				}
			}
		}
}
void soxo(){                                           // soxo Fpoly 9
	int randomNumber;
	int numberA,numberB,count=0;
	printf("\n Moi ban lua chon so thu 1: ");
	scanf("%d",&numberA);
	printf("\n Moi ban lua chon so thu 2: ");
	scanf("%d",&numberB);
	srand(time(0));
	printf("\n So Trung Thuong \n");
	printf("------------------------------------------------------\n");
	for( int i=0; i<2; i++){
		randomNumber = rand() % 15;
		printf("%10d",randomNumber);
		if(numberA == randomNumber || numberB == randomNumber){
			count++;
		}
	}
	printf("\n------------------------------------------------------\n");
	if(count ==0){
		printf(" Chuc Ban May Man Lan Sau. \n");
	}else if(count==1){
		printf(" Chuc Mung Ban May Man Trung Giai Nhi. \n");
	}else{
		printf(" Chuc Mung Ban May Man Trung Giai Nhat. \n");
	}
}

struct phanso{                                // phan so 10
	int tu;
	int mau;
};
struct phanso nhap(){
	struct phanso p;
	printf("\n Nhap Phan tu so: ");
	scanf("%d",&p.tu);
	while(1){
		printf("\n Nhap Phan mau so khac 0 : ");
		scanf("%d",&p.mau);
		if(p.mau!=0){
			break;
		}
	}
	return p;
}
int ucln(int a, int b){
	if(a<0){
		a=a*-1;
	}
	if(b<0){
		b=b*-1;
	}
	while(a!=b){
		if(a>b){
			a-=b;
		}else {
			b-=a;
		}
	}
	return a;
}
struct phanso rutgon(struct phanso p){
	if(p.tu!=0){
		int u= ucln(p.tu,p.mau);
		p.tu/=u;
		p.mau/=u;
	} 
	return p;
}
int bcnn(int a, int b){
	int u= ucln(a,b);
	return a*b/u;
	}
struct phanso cong(struct phanso a, struct phanso b){
	struct phanso tong;
	tong.mau= bcnn(a.mau,b.mau);
	tong.tu= tong.mau/ a.mau*a.tu + b.tu*tong.mau/b.mau;
	tong = rutgon(tong);
	return tong;
}
struct phanso tru(struct phanso a, struct phanso b){
	struct phanso hieu;
	hieu.mau= bcnn(a.mau,b.mau);
	hieu.tu= hieu.mau/ a.mau*a.tu - b.tu*hieu.mau/b.mau;
	hieu = rutgon(hieu);
	return hieu;
}
struct phanso nhan(struct phanso a, struct phanso b){
	struct phanso tich;
	tich.tu = a.tu * b.tu;
	tich.mau = a.mau * b.mau;
	tich= rutgon(tich);
	return tich;
}
struct phanso chia(struct phanso a, struct phanso b){
	struct phanso thuong;
	thuong.tu = a.tu * b.mau;
	thuong.mau = a.mau * b.tu;
	thuong= rutgon(thuong);
	return thuong;
}
void bai2phanso(){
	struct phanso p = nhap();
	struct phanso q = nhap();
	struct phanso tong = cong(p,q);
	struct phanso hieu = tru(p,q);
	struct phanso tich = nhan(p,q);
	struct phanso thuong = chia(p,q);
	printf("\n %d/%d +  %d/%d = %d/%d ",p.tu,p.mau,q.tu,q.mau,tong.tu,tong.mau);
	printf("\n %d/%d -  %d/%d = %d/%d ",p.tu,p.mau,q.tu,q.mau,hieu.tu,hieu.mau);
	printf("\n %d/%d *  %d/%d = %d/%d ",p.tu,p.mau,q.tu,q.mau,tich.tu,tich.mau);
	printf("\n %d/%d /  %d/%d = %d/%d ",p.tu,p.mau,q.tu,q.mau,thuong.tu,thuong.mau);
}
int main(){
	int cauhoi,demo=0;
	
	char cont;
	printf("\n 						Lop: WEB18307 \n");
	printf("\n 						MSSV: PD08626 \n");
	printf("\n 						Ho Va Ten: nguyen thanh linh  \n");
	do{
		printf("\n 1. Chuc nang so 1: Kiem tra so nguyen.");
		printf("\n 2. Chuc nang so 2: Tim Uc so chung va boi so chung cua 2 so.");
		printf("\n 3. Chuc nang so 3: Chuong trinh tinh tien cho quan Karaoke.");
		printf("\n 4. Chuc nang so 4: Tinh tien dien.");
		printf("\n 5. Chuc nang so 5: Chuc nang doi tien.");
		printf("\n 6. Chuc nang so 6: Chuc nang tinh lai suat vay ngan hang vay tra gop 12 thang.");
		printf("\n 7. Chuc nang so 7: Chuong trinh vay tien mua xe.");
		printf("\n 8. Chuc nang so 8: Sap xep thong tin sinh vien.");
		printf("\n 9. Chuc nang so 9:  Xay dung game FPOLY-LOTT (2/15).");
		printf("\n 10. Chuc nang so 10: Chuong trinh tinh toan phan so.");
		printf("\n 11. Chuc nang so 11: Exit . \n");
		printf("\n  Moi ban chon lua chon Chuc nang : ");
		scanf("%d", &cauhoi);
		switch(cauhoi){
			
			
			case 1:
				printf("\n 1. Chuc nang so 1 duoc chay.");
				printf("\n 1. Chuc nang so 1: Kiem tra so nguyen.");
				float number;
				printf("\n Moi nhap vao 1 so bat ki: ");
				scanf("%f",&number);
				if (number == (int)number){
					printf(" \n So %.2f la so nguyen. ",number);
				}else{
					printf("\n So %.2f khong phai la so nguyen.",number);
				}
				if (number<2){
					printf("\n So %f khong phai la so nguyen to.",number);
				}else{
					for(int i = 1; i <= number; i++){
						if((int)number%i==0){
							 demo+=1;
							}
						i++;
						}	
					if (demo==2){
					printf("\n So %.2f la so nguyen to.",number);
					}else{
					printf("\n So %.2f khong la so nguyen to.",number);
					}	
				}
        		if(number == (int)number){
        			if(sqrt(number)* sqrt(number) == number){
        			printf("\n So %.2f la so chinh phuong!\n", number);
    				}else{
        			printf("\n So %.2f khong phai so chinh phuong!\n", number);
   					}
        		}else{
 					printf("\n so %.2f  khong phai so chinh phuong!\n", number);
					}	
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
					
			case 2:
				printf("\n 2. Chuc nang so 2 duoc chay.");
				printf("\n 2. Chuc nang so 2: Tim Uc so chung và boi so chung cua 2 so.");
				int a, b ;
			    printf("\n Nhap a:");				//nhap a
			    scanf("%d",&a);
			    printf("\n Nhap b:");				//nhap b
			    scanf("%d",&b);
			    printf("\n UCLN là :%d",UCLN(a,b));	
    			printf("\n BCNN la: %d", (a*b)/UCLN(a, b));			//in ket qua ra man hinh
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 3:
				printf("\n 3. Chuc nang so 3 duoc chay.");
				printf("\n 3. Chuc nang so 3: Chuong trinh tinh tien cho quan Karaoke.");
				int giodau,giocuoi;
				do{
					printf("\n Moi ban nhap gio dau va gio cuoi.");
					printf("\n Nhap gio dau: ");
					scanf("%d",&giodau);
					printf("\n Nhap gio cuoi: ");
					scanf("%d",&giocuoi);
				}while(giodau<12 || giocuoi>23);
				tienkara(giodau,giocuoi);
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 4:
				printf("\n 4. Chuc nang so 4 duoc chay.");
				printf("\n 4. Chuc nang so 4: Tinh tien dien.");
				float soDien,tienDien;
				printf(" \nNhap so dien da dung trong thang : ");
				scanf("%f",&soDien);
				if(soDien<=50){
					tienDien = soDien*1678;
				}else if (soDien<=100){
					tienDien = 50*1678 + (soDien-50)*1734;
				}else if (soDien<=200){
					tienDien = 50*1678+50*1734+(soDien-100)*2014;
				}else if (soDien<=300){
					tienDien = 50*1678+50*1734+100*2014+(soDien-200)*2536;
				}else if (soDien<=400){
					tienDien = 50*1678+50*1734+100*2014+100*2536+(soDien-300)*2834;
				}else {tienDien= 50*1678+50*1734+100*2014+100*2536+100*2834+(soDien-400)*2927;
				}
				printf("\nTiendien = %.2f",tienDien);
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 5:
				printf("\n 5. Chuc nang so 5 duoc chay.");
				printf("\n 5. Chuc nang so 5: Chuc nang doi tien.");
				doitien();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 6:
				printf("\n 6. Chuc nang so 6 duoc chay.");
				printf("\n 6. Chuc nang so 6: Chuc nang tinh lai suat vay ngan hang vay tra gop 12 thang.");
				int tienvay;
				printf("\n Nhap so tien muon vay : ");
				scanf("%d",&tienvay);
				laisuatvay(tienvay);
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 7:
				printf("\n 7. Chuc nang so 7 duoc chay.");
				printf("\n 7. Chuc nang so 7: Chuong trinh vay tien mua xe.");
				tragopxe();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 8:
				printf("\n 8. Chuc nang so 8 duoc chay.");
				printf("\n 8. Chuc nang so 8: Sap xep thong tin sinh vien.");
				int n,i,j;
				struct sinhvien{
					char hoten[50];
					float diem;
				};
				struct sinhvien sv;
				struct sinhvien dssv[50];
				char xeploai[10];
				printf("\n Co bao nhieu sinh vien? : ");
				scanf("%d",&n);
				//nhap mang
				for(i=0; i<n; i++){
					printf("\n Nhap ho ten sinh vien thu %d : ",i+1);
					fflush(stdin);    //lam sach bo dem
					gets(dssv[i].hoten);
					printf("\n Nhap diem TB sv thu %d : ",i+1);
					scanf("%f",&dssv[i].diem);
					getchar();
				}
				for( i=n-1; i>0; i--){
					for(j=1; j<=i; j++){
						if(dssv[j-1].diem < dssv[j].diem){
							sv = dssv[j-1];
							dssv[j-1] = dssv[j];
							dssv[j] = sv;
						}
					}
				}
				printf("%-20s | %5s | %10s\n","Ho ten","Diem","Xep loai");
				for(int i=0; i<n; i++){
					if (dssv[i].diem>=9){
						strcpy(xeploai,"Xuat sac");
					}else if (dssv[i].diem>=8){
						strcpy(xeploai,"Gioi");
					}else if (dssv[i].diem>=6.5){
						strcpy(xeploai,"Kha");
					}else if (dssv[i].diem>=5){
						strcpy(xeploai,"Trung Binh");
					}else {
						strcpy(xeploai,"Yeu");
					}
					printf("%-20s | %5.1f | %10s\n",dssv[i].hoten,dssv[i].diem,xeploai);
				}
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 9:
				printf("\n 9. Chuc nang so 9 duoc chay.");
				printf("\n 9. Chuc nang so 9:  Xay dung game FPOLY-LOTT (2/15).");
				soxo();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 10:
				printf("\n 10. Chuc nang so 10 duoc chay.");
				printf("\n 10. Chuc nang so 10: Chuong trinh tinh toan phan so.");
				bai2phanso();
				printf("\n Ban co muon tiep tuc chuong trinh? (Y/N).");
				scanf(" %c",&cont);
				break;
				
				
			case 11:
				cont = 'N';
				break;
		break;		
		}
			
	} while(cont=='Y');
	
}
