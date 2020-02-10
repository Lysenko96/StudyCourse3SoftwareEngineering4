#include<iostream>
#include<conio.h>
using namespace std;
void main()
{
	int y = 0;
	int x1 = 0;
	int x2 = 0;
	int x3 = 0;
	int x4 = 0;
	int f = 0;
	cout << "Enter y = ";
	cin >> y;
	cout << "Enter x1 = ";
	cin >> x1;
	cout << "Enter x2 = ";
	cin >> x2;
	cout << "Enter x3 = ";
	cin >> x3;
	cout << "Enter x4 = ";
	cin >> x4;
	cout << endl;
	cout << "\t" << x1 << "\t" << x2 << endl;
	cout << "U = " << endl;
	cout << "\t" << x3 << "\t" << x4 << endl;
	cout << endl;
	cout << "\t" << x1 << "\t" << x3 << endl;
	cout << "Ut = " << endl;
	cout << "\t" << x2 << "\t" << x4 << endl;
	cout << endl;
	cout << "A = U * Ut" << endl;
	cout << endl;
	cout << "\t" << pow(x1, 2) << "\t" << pow(x2, 2) << endl;
	cout << "A = " << endl;
	cout << "\t" << pow(x3, 2) << "\t" << pow(x4, 2) << endl;
	cout << endl;
	cout << "det A = " << (pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)) << endl;
	cout << endl;
	cout << "\t" << pow(x4, 2) << "\t" << pow(x3, 2) << endl;
	cout << "Minor = " << endl; // Минор
	cout << "\t" << pow(x2, 2) << "\t" << pow(x1, 2) << endl;
	cout << endl;
	cout << "\t" << pow(x4, 2) << "\t" << -(pow(x2, 2)) << endl;
	cout << "Aa = " << endl; // Матрица Алгебраических дополнений
	cout << "\t" << -(pow(x3, 2)) << "\t" << pow(x1, 2) << endl;
	cout << endl;
	cout << "\t" << pow(x4, 2) << "\t" << -(pow(x3, 2)) << endl;
	cout << "at = " << endl; // Транспонированная матрица
	cout << "\t" << -(pow(x2, 2)) << "\t" << pow(x1, 2) << endl;
	cout << endl;
	cout << "C = A(-1)" << endl;
	cout << endl;
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x4, 2);
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x2, 2)) << endl;
	cout << " C = " << endl; // Обратная матрица A(-1)
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x3, 2));
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x1, 2) << endl;
	cout << endl;
	cout << "D = C * Ut" << endl;
	cout << endl;
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x4, 2) * x1;
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x3, 2)) * x2 << endl;
	cout << "D = " << endl;
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x2, 2)) * x3;
	cout << "\t" << (1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x1, 2) * x4 << endl;
	cout << endl;
	cout << "B = y * D" << endl;
	cout << endl;
	cout << "\t" << ((1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x4, 2) * x1) * y;
	cout << "\t" << ((1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x3, 2)) * x2) * y << endl;
	cout << "B = " << endl;
	cout << "\t" << ((1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * -(pow(x2, 2)) * x3) * y;
	cout << "\t" << ((1 / ((pow(x1, 2) * pow(x4, 2)) - (pow(x2, 2) * pow(x3, 2)))) * pow(x1, 2) * x4) * y << endl;
	_getch();
}