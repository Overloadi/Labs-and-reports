#include <iostream>

using namespace std;

int taulukko[5] = { 12, 2, 5, 6, 1 };
const int taul_koko = 5;
int kuplalaskuri = 0;
int lisayslaskuri = 0;
int vaihtolaskuri = 0;

// Lajittelufunktio
int lajittelekupla() {
	for (int j = 0; j<5; j++)
	{
		//Näytetään järjestämätön taulukkoukkoukko ruudulla
		cout << "\t Alkio indeksipaikassa " << j << " : " << taulukko[j] << endl;
	}
	cout << endl;

	// Kuplalajittelu aloitetaan
	int temp;
	// Ulompi silmukka vastaa kierroksia
	for (int i2 = 0; i2 <= 4; i2++)
	{
		// Sisempää silmukkaa käytetään alkioiden vertailuun
		for (int j2 = 0; j2<4; j2++)
		{
			//Alkioiden paikanvaihto
			kuplalaskuri++;
			if (taulukko[j2] > taulukko[j2 + 1])
			{
				temp = taulukko[j2];
				taulukko[j2] = taulukko[j2 + 1];
				taulukko[j2 + 1] = temp;
				
			}
		}
	}
	// Esitetään järjestetty taulukkoukko
	cout << "  taulukkoukko kuplalajittelun jälkeen: " << endl;
	for (int i3 = 0; i3<5; i3++)
	{
		cout << "\t Alkio indeksipaikassa " << i3 << " : " << taulukko[i3] << endl;
	}
	return 0;
}

int lisayslajittelu() {
	int temp;
	int j;
	/* Suoritetaan Lisäyslajittelu (lähdetään liikkeelle
	lajiteltavan taulukon toisesta paikasta)*/
	for (int i = 1; i<5; i++)
	{
		// 
		lisayslaskuri++;
		temp = taulukko[i];
		j = i - 1;

		while ((temp < taulukko[j]) && (j >= 0))
		{
			/* Mikäli tarkasteltava arvo on pienempi
			kuin tätä aiempi taulukon arvo, siirretään
			suurempi arvo seuraavaan taulukon paikkaan */
			taulukko[j + 1] = taulukko[j];
			j = j - 1;
		}
		// Siirretään myös pienempi arvo oikeaan paikkaan
		taulukko[j + 1] = temp;
	}
	// Järjestetyn taulukon tulostaminen ruudulle
	cout << "\nJärjestetty lista:\n";
	for (int i = 0; i<5; i++)
	{
		cout << taulukko[i] << " ";
	}

	return 0;
}

int vaihtolajittelu() {
	int temp;
	int j;
	//Vaihtolajittelu
	// Uloimmalla silmukkarakenteella hoidetaan kierrokset
	for (int i = 0; i <= 5; i++)
	{
		/* Sisemmällä silmukkarakenteella hoidetaan
		alkioiden väliset vertailut, i + 1 aloittaa
		kierroksen aina yhtä paikkaa ylempää*/
		for (j = (i + 1); j < 5; j++)
		{
			vaihtolaskuri++;
			if (taulukko[i] > taulukko[j])
			{
				temp = taulukko[i];
				taulukko[i] = taulukko[j];
				taulukko[j] = temp;
			}
		}
	}
	return 0;
}

/* Pikalajittelun ositusfunktio: Syötteenä
otetaan [taulukko, lähtöindeksi, sarana-arvon indeksi]*/
int partition(int* input, int p, int r)
{
	int pivot = input[r];
	/* Käsitellään silmukkaa niin kauan
	kun indeksi on pienempi kuin taulukon
	maksimiarvo*/
	while (p < r)
	{
		/* Kasvata indeksin p arvoa
		niin kauan kun indeksin p
		alkion arvo on pienempi kuin
		sarana-arvo*/
		while (input[p] < pivot)
			p++;

		/* Vähennä indeksin r arvoa
		niin kauan kun indeksin r
		alkion arvo on suurempi kuin
		sarana-arvo*/
		while (input[r] > pivot)
			r--;

		/* Jos alkion arvo indeksipaikassa
		p on yhtäsuuri kuin alkion arvo
		indeksipaikassa r, kasvata indeksin
		p arvoa yhdellä*/
		if (input[p] == input[r])
			p++;

		/* Mikäli edellinen ehto ei toteutunut,
		tarkastellaan onko indeksin p arvo
		pienempi kuin indeksin r arvo*/
		else if (p < r)
		{
			/* Jos ehto toteutuu, vaihdetaan
			taulukon indeksien p ja r alkioiden
			paikkaa*/
			int tmp = input[p];
			input[p] = input[r];
			input[r] = tmp;
		}
	}
	/* Palautetaan indeksin r arvo quicksort-funktiolle */
	return r;
}

// Pikalajittelun rekursiivinen funktio
void quicksort(int* input, int p, int r)
{
	/* Toistetaan niin kauan kun syöte p on pienempi
	kuin r*/
	if (p < r)
	{
		// Ajetaan ositusfunktio ensimmäisen kerran
		int j = partition(input, p, r);
		/* Funktio kutsuu itseään siten, että
		sarana-arvon indeksistä vähennetään yksi
		*/
		quicksort(input, p, j - 1);
		/* Kutsuu itseään siten, että lähtöindeksiä
		kasvatetaan yhdellä*/
		quicksort(input, j + 1, r);
	}
}

// Pääohjelma
int main() {
	lajittelekupla();
	cout << endl << "Kuplalajittelun Laskuri : " << kuplalaskuri << endl;
	lisayslajittelu();
	cout << endl << "Lisayslajittelun Laskuri : " << lisayslaskuri << endl;
	vaihtolajittelu();
	cout << endl << "Vaihtolajittelun Laskuri : " << lisayslaskuri << endl;
}