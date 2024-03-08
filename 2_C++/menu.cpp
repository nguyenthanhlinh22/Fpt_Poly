#include <stdio.h>

void Menu();		
int ChonMenu();		
void XuLyMenu();	


void Menu() {
	cout << "=================MENU================\n";
	cout << "1. diem n co bao nhieu so nguyen";
	cout << "2. Kiem tra so nguyen to\n";
	cout << "3. Tong cac so nguyen to\n";
	cout << "=====================================\n";
}
int ChonMenu()
{
	int n = 0;
	cout << "\n\nMoi chon menu: ";
	cin >> n;
	if (n > 0 || n < 99)
		return n;
	else return ChonMenu();
}
void XuLyMenu() 
{
	int chon = ChonMenu();
	int a = 5; int b = 6;
	switch (chon)
	{
	case 1:		
		cout << "1. Vua ga vua cho.\n";
		VuaGaVuaCho();
		break;
	case 2:
		cout << "2. Kiem tra so nguyen to\n";
		cout << TimSoNT(5);
		break;
	case 3:
		cout << "3. Tong cac so nguyen to\n";
		cout << TinhTongCacSoNT(11);
		break;
	case 4:
		cout << "4. Dao nguoc so\n";
		cout << DaoNguocSo(123);
		break;
	case 5:
		cout << "5. Tim so sao cho a*b = 2(a+b)\n";
		TimSoTichABBang2TongAB(100);
		break;
	case 6:
		cout << "6. Tinh gia thua cua mot so\n";
		cout << TinhGiaiThua(6);
		break;
	case 7:
		cout << "7. Tim day Fibonaci\n";
		for (int i = 0; i < 5; i++)
		{
			cout << Finbonaci(i) << "\t";
		}
		Finbonaci2(7);
		break;
	case 8:
		cout << "7. Hoan vi\n";
		//int a = 5; int b = 6;
		HoanVi(a, b);
		cout << a << "\t" << b;
		break;
	case 9:
		VeHinhTamGiac(4, 5);
		break;
	case 99:
		cout << "Thoat!!!\n";
		exit(1);
		break;
	}
}
