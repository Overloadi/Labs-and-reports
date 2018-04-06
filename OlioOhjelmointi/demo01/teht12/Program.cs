using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht12
{
    class Program
    {
        static void Main(string[] args)
        {
            string input;
            int number;
            int[] taulukko = new int[5];
            for (int x = 0; x < 5; x++)
            {
                Console.WriteLine("Anna luku > ");
                input = Console.ReadLine();
                number = int.Parse(input);
                taulukko[x] = number;
            }
            Console.WriteLine("Luvut ovat ");
            for (int y = taulukko.Length - 1; y >= 0; y++)
            {
                Console.Write(taulukko[y]+',');
            }
        }
    }
}
