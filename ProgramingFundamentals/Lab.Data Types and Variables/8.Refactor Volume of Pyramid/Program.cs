﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _8.Refactor_Volume_of_Pyramid
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write($"Length: ");
            double lenghtOfPyramid = double.Parse(Console.ReadLine());
            Console.Write($"Width: ");
            double widthOfPyramid = double.Parse(Console.ReadLine());
            Console.Write($"Height: ");
            double heightOfPyramid = double.Parse(Console.ReadLine());

            double volumeOfPyramid = (lenghtOfPyramid * widthOfPyramid * heightOfPyramid)/3;

            Console.WriteLine($"Pyramid Volume: {volumeOfPyramid:f2}");

        }
    }
}
