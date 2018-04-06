using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht3
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna 1. luku> ");
            string ekaluku = Console.ReadLine();
            Console.WriteLine("Anna 2. luku> ");
            string tokaluku = Console.ReadLine();
            Console.WriteLine("Anna 3. luku> ");
            string kolmasluku = Console.ReadLine();
            int eka = Int32.Parse(ekaluku);
            int toka = Int32.Parse(tokaluku);
            int kolmas = Int32.Parse(kolmasluku);
            double summa = eka + toka + kolmas;
            double keskiarvo = summa / 3;
            Console.WriteLine("Lukujen summa on " + summa + " ja keskiarvo on " + keskiarvo);
        }
    }
}
