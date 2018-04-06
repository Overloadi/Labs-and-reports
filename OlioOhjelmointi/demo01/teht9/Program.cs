using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht9
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna luku > ");
            string input = Console.ReadLine();
            int luku = int.Parse(input);
            int summa = 0;
            summa += luku;
            while (luku != 0)
            {
                Console.WriteLine("Anna luku > ");
                input = Console.ReadLine();
                luku = int.Parse(input);
                summa += luku;
            }
            Console.WriteLine("Lukujen summa on " + summa);
        }
    }
}
