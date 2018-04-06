#include <iostream>
#include <string>

using namespace std;

int dataset[10] = { 12, 3, 4, 6, 11, 2, 1, 9, 10, 8 };
int parilliset[10];
int parittomat[10];

int luokittelu() {
	for (int i = 0; i < 10; i++) {
		if (dataset[i] % 2 == 0) {
			parilliset[i] = dataset[i];
		}
		else {
			parittomat[i] = dataset[i];
		}
	}
	cout << "Parilliset: ";
	for (int i = 0; i < 10; i++) {
		cout << parilliset[i] << " ";
	}
	cout << endl << "Parittomat ";
	for (int i = 0; i < 10; i++) {
		cout << parittomat[i] << " ";
	}

	return 0;
}

int main() {
	int joo = luokittelu();
}