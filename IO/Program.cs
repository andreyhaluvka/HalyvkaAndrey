using System;
using System.Diagnostics.Eventing.Reader;
using System.Runtime.InteropServices; 

namespace IO
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // #1 
            // Вариант 8
            // запрашивает с клавиатуры сумму вклада и процент по вкладу,
            // и выводит на экран следующее сообщение
            // (вклад без капитализации – все начисления в конце года):



             Console.Write("Введите сумму вклада = ");
              double summa = double.Parse(Console.ReadLine());
              Console.Write("Введите процент по вкладу = ");
              double percent = double.Parse(Console.ReadLine());
              double summa_vklada = summa / 100 * percent;
              Console.Write("Через год начислят = " + summa_vklada);


            // #2
            // Вариант 8
            // Периметр треугольника, заданного координатами вершин x1, y1, x2, y2, x3, y3
               Console.Write("Введите ax = ");
               int ax = int.Parse(Console.ReadLine());
               Console.Write("Введите ay = ");
               int ay = int.Parse(Console.ReadLine());
               Console.Write("Введите bx = ");
               int bx = int.Parse(Console.ReadLine());
               Console.Write("Введите by = ");
               int by = int.Parse(Console.ReadLine());
               Console.Write("Введите cx = ");
               int cx = int.Parse(Console.ReadLine());
               Console.Write("Введите cy = ");
               int cy = int.Parse(Console.ReadLine());

               double AB = Math.Sqrt(Math.Pow(bx - ax, 2) + Math.Pow(by - ay, 2));
               double BC = Math.Sqrt(Math.Pow(bx - cx, 2) + Math.Pow(by - cy, 2));
               double AC = Math.Sqrt(Math.Pow(cx - ax, 2) + Math.Pow(cy - ay, 2));
               double P = AB + BC + AC;
               Console.Write("Периметр равен = " + P);
                

            // #3
            // Вариант 8
            // какая из цифр трехзначного числа больше: первая или вторая

            Console.Write("Введите трёхзначное число - ");
            int n = int.Parse(Console.ReadLine());
            int n1 = n / 100;
            int n2 = n % 100 / 10;
            
                
            if (100 <= n && n <= 999)
                if (n1 > n2) 
            { 
                Console.WriteLine($"Первая цифра больше: {n1} > {n2}");
            }
                else if (n1 < n2)
            {
                Console.WriteLine($"Вторая цифра больше: {n2} > {n1}");
            }
                else
            { 
                Console.WriteLine($"Цифры равны: {n1} = {n2}"); 
            }
            else
            { Console.WriteLine("Введено неверное число"); }
            Console.ReadKey();


        }
    }
}
