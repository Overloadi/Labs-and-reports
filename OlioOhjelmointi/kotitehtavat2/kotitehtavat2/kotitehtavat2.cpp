#include <iostream>
#include "stdafx.h"

using namespace std;

int viesti[5] = { 79, 73, 75, 69, 65 };
int avain[5] = { 1, 3, 0, 4, 2 };
int tulos[5];
int paikka;

int sekoita(int viesti[5], int avain[5]) {
	for (int k = 0; k < 5; k++) {
		paikka = avain[k];
		tulos[paikka] = viesti[k];
	}
	for (int i = 0; i < 5; i++) {
		cout << tulos[i] << endl;
	}
	return 0;
}

int main() {
	int kulli = sekoita(viesti, avain);
}