using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace punto1
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Console.BackgroundColor=ConsoleColor.White;
            Console.ForegroundColor=ConsoleColor.Red;

            //variables
           
            Console.Write("Escalera Agente A:");
            int n1 = Convert.ToInt32 (Console.ReadLine());
            Console.Write("");

            //Escalera
            for (int i = 1; i <= n1; i++){
                // Imprimir espacios en blanco
                for (int j = 1; j <= n1 - i; j++)
                {
                    Console.Write(" ");
                }

                // Imprimir asteriscos
                for (int k = 1; k <= i; k++)
                {
                    Console.Write("*");
                }

                // Nueva línea después de cada escalón
                Console.ReadLine();
            }

            Console.Write("Escalera Agente B:");
            int n2=Convert.ToInt32 (Console.ReadLine());
            Console.WriteLine("");

            //Escalera invertida
            for (int i = n2; i >= 1; i--){
                // Imprimir espacios en blanco
                for (int j = 1; j <= n2 - i; j++)
                {
                    Console.Write(" ");
                }

                // Imprimir asteriscos
                for (int k = 1; k <= i; k++)
                {
                    Console.Write("*");
                }

                // Nueva línea después de cada escalón
                Console.ReadLine();
            }

            Console.Write("Escalera Agente C:");
            int n3=Convert.ToInt32 (Console.ReadLine());
            Console.WriteLine("");

            for (int i = n3; i >= 1; i--) {
                // Imprimir espacios en blanco
                for (int x = 1; x < i; x++) 
                {
                    Console.Write(" ");
                }
                for (int y = i; y <= 2 * n3 - 1; y++) 
                {
                 Console.Write("*");
                }
                Console.ReadLine();
            }

            // Imprimir la mitad inferior del diamante
            for (int i = 1; i <= n3; i++) {
                // Imprimir espacios en blanco
                for (int x = 1; x < i; x++) 
                {
                    Console.Write(" ");
                }

                // Imprimir #
                for (int y = i; y <= 2 * n3 - 1; y++) 
                {
                     Console.Write("*");
                }
                Console.ReadLine();
            }
        
        }
    }
}