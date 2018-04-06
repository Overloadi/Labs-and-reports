using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht10
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] luvut = { 1, 2, 33, 44, 55, 68, 77, 96, 100 };
            foreach (int luku in luvut)
            {
                if (luku % 2 == 0) { Console.WriteLine("HEP"); }
            }
        }
    }
}
