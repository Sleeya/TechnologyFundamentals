﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _1.Centuries_to_Minutes
{
    class Program
    {
        static void Main(string[] args)
        {
            int centuaries = int.Parse(Console.ReadLine());
            int years = 100 * centuaries;
            int days = (int)(years * 365.2422);
            int hours = days * 24;
            int minutes = hours * 60;

            Console.WriteLine($"{centuaries} centuries = {years} years = {days} days = {hours} hours = {minutes} minutes");
        }
    }
}
