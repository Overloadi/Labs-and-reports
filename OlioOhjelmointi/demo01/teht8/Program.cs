using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht8
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

            if (eka >= toka && eka >= kolmas) { Console.WriteLine("Suurin luku on: " + eka); }
            else if (toka >= eka && toka >= kolmas) { Console.WriteLine("Suurin luku on: " + toka); }
            else if (kolmas >= eka && kolmas >= toka) { Console.WriteLine("Suurin luku on: " + kolmas); }
        }
    }
}
