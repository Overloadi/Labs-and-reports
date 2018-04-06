using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht2
{
    class Program
    {
        static int annaNumero(int pisteet)
        {
            if (pisteet < 2) { return 0; }
            else if (pisteet >= 2 && pisteet <=3 ) { return 1; }
            else if (pisteet >= 4 && pisteet <= 5) { return 2; }
            else if (pisteet >= 6 && pisteet <= 7) { return 3; }
            else if (pisteet >= 8 && pisteet <= 9) { return 4; }
            else if (pisteet >= 10 && pisteet <= 12) { return 5; }
            return -1;
        }
        static void Main(string[] args)
        {
            Console.WriteLine("Anna pistemäärä > ");
            string input = Console.ReadLine();
            int pisteet = Int32.Parse(input);
            int numero = annaNumero(pisteet);
            Console.WriteLine("Koulunumero on " + numero);

        }
    }
}
