using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht1
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna luku > ");
            string input;
            input = Console.ReadLine();
            switch (input)
            {
                case "1": Console.WriteLine("Annoit luvun yksi"); break;
                case "2": Console.WriteLine("Annoit luvun kaksi"); break;
                case "3": Console.WriteLine("Annoit luvun kolme"); break;
                default: Console.WriteLine("Annoit jonkun muun luvun"); break;
            }
        }
    }
}
