#include <iostream>
#include <string>
using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */
string workText;
float dane[100];
int potega;

void pochodna (int a)
{
	//cout << dane[a] << "(1/" << a+1 << ")" << "x^" << a+1;  //v1 przedstawiania calki jako iloczynu
	//cout << (dane[a-1] / (a-1)) << "*x^" << a-1;
	cout << a * dane[a]<< "x^" << a-1;
}

int main(int argc, char** argv) 
{
	
	cout << "ten program pokazuje pierwsza pochodna funkcji" << endl;
	cout << "wprowadz wspolczynnik najwiekszej potegi:" << endl;
	cin >> potega;
	cout << "wprowadz wspolczynnik x od najmniejszej potegi" << endl;
	for(int i = 0; i < potega+1;i++) 
	{
		cout << "a" << i << "=";
		cin >> dane[i];
	}
	cout << "nasza funkcja:" << endl;
	
	for(int i = potega; i >= 0;i--)
	{
		if(i==0)
		{
			if(dane>=0)
			{
				cout << dane[i];
			}
			else
			{
				cout << "(" << dane[i] << ")" << endl;
			}
			
		}
		else
		{
			cout << dane[i] << "*x^" << i;
			if(dane[i-1]>=0)
			{
				cout << "+";
			}
		}
	}
	
	cout << endl;
	cout << "pierwsza pochodna:" << endl;
	
	for(int b = potega; b >= 1; b--)
	{
		if(b-1==0)
		{
			cout << dane[b-1];
		}
		else if(dane[b-1]<=0)
		{
			pochodna(b);
		}
		else
		{
			pochodna(b);
			cout << "+";
		}
		//cout << pochodna(b);
		//cout << "+";
	}
	return 0;
}
