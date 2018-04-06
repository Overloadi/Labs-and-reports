using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace teht5
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Anna sekunnit > ");
            string input = Console.ReadLine();
            int sekunnit = Int32.Parse(input);
            int tunnit = sekunnit / 3600;
            int minuutit = sekunnit % 3600;
            minuutit = minuutit / 60;
            int sekunnitjaljella = sekunnit % 60;
            Console.WriteLine("tunnit: " + tunnit + " minuutit: " + minuutit + " sekunnit: " + sekunnitjaljella);
        }
    }
}
