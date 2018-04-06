using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht6
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna matka > ");
            string input = Console.ReadLine();
            int matkanpituus = Int32.Parse(input);
            double bensanhinta = 1.595;
            double kulutus = 0.0702;
            double bensaameni = matkanpituus * kulutus;
            double kustannus = bensaameni * bensanhinta;
            Console.WriteLine("Bensaa kuluu " + bensaameni + " litraa, kustannus " + kustannus + " euroa");
        }
    }
}
