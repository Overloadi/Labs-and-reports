using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht11
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna luku > ");
            string input = Console.ReadLine();
            int luku = int.Parse(input);
            char tahti = '*';
            for (int x=1; x <= luku;x++)
            {
                for (int y=1; y <= x;y++)
                {
                    Console.Write(tahti);
                }
                Console.WriteLine();
            }
        }
    }
}
