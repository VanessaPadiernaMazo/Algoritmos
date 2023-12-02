using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace punto9
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Console.BackgroundColor=ConsoleColor.White;
            Console.ForegroundColor=ConsoleColor.Red;

            //variables
           
            Console.Write("");
            Console.Write("Ingrese el valor del primer número:");
            int n1 = Convert.ToInt32 (Console.ReadLine());
            Console.Write("");
            Console.Write("Ingrese el valor del segundo número:");
            int n2=Convert.ToInt32 (Console.ReadLine());
            Console.Write("");
            Console.Write("Ingrese el valor del tercer número:");
            int n3 = Convert.ToInt32 (Console.ReadLine());
            Console.Write("");
            Console.Write("Ingrese el valor del cuarto número:");
            int n4=Convert.ToInt32 (Console.ReadLine());
            Console.Write("");
            Console.Write("Ingrese el valor del quinto número:");
            int n5=Convert.ToInt32 (Console.ReadLine());
            Console.WriteLine("");

            //promedio
                int promedio =(n1+n2+n3+n4+n5)/5;
                Console.Write("  Promedio: {0}", promedio);

                Console.ReadLine();

            //mediana
                int[] datosMediana = { n1, n2, n3, n4, n5 }; 

                // Calcular la mediana
                double mediana = CalcularMediana(datosMediana);

                // Imprimir el resultado
                Console.WriteLine($"La mediana es: {mediana}");

                static double CalcularMediana(int[] datosMediana)
                {
                    // Ordenar el array
                    Array.Sort(datosMediana);

                    int n = datosMediana.Length;
                    if (n % 2 == 0)
                    {
                        // Si la cantidad de elementos es par, promedio de los dos valores centrales
                        return (datosMediana[n / 2 - 1] + datosMediana[n / 2]) / 2.0;
                    }
                    else
                    {
                        // Si la cantidad de elementos es impar, valor central
                        return datosMediana[n / 2];
                    }
                }

            //Media armónica
                // Ejemplo de un conjunto de datos
                double[] datosMediaArmonica = { n1, n2, n3, n4, n5 };

                // Calcular la media armónica
                double mediaArmonica = CalcularMediaArmonica(datosMediaArmonica);

                // Imprimir el resultado
                Console.WriteLine($"La media armónica es: {mediaArmonica}");

                static double CalcularMediaArmonica(double[] datos)
                {
                    double sumaInversos = datos.Sum(x => 1 / x);

                    // Calcular la media armónica
                    double mediaArmonica = datos.Length / sumaInversos;

                    return mediaArmonica;
                }
        }
    }
}