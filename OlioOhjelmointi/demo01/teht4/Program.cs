using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht4
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna ikäsi > ");
            string ika = Console.ReadLine();
            int ika2 = Int32.Parse(ika);
            if (ika2 < 18) { Console.WriteLine("alaikäinen"); }
            else if (ika2 >= 18 && ika2 <= 65) { Console.WriteLine("aikuinen"); }
            else if (ika2 > 65) { Console.WriteLine("seniori"); }
        }
    }
}
