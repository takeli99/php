<?php
    // Ejercicio 1.a
    echo "Ejercicio 1.a: "; 
    $var1 = "Hola";
    $var2= "Mundo";

    $texto = $var1." ".$var2;

    $var3 = $texto;

    echo $var3;

    //Ejercicio 1.b
    echo "<br>";

    echo "Ejercicio 1.b: ";

    $var1 = true;

    is_bool($var1);

    echo $var1;

    // Ejercicio 1.c

    echo "<br>";

    echo "Ejercicio 1.c: ";

    $var1 = 3.14;

    echo $var1;

    // Ejercicio 1.d

    echo "<br>";

    echo "Ejercicio 1.d: ";
    $arrays = array ("1", "2", "3");

    $array = array ("clave1" => 1, "clave2" => 2, "clave3" => 3);

    $resultado = $array;

    print_r ($resultado);

    // Ejercicio 2

    echo "<br>";

    echo "Ejercicio 2: ";

    $var1 = false;

    echo $var1;

    // Al cambiar la variable a false en pantalla no sale nada debido a que da por entendido que el número cero no es nada por tanto muestra algo vacio, es decir nada.

    // Ejercicio 3

    echo "<br>";

    echo "Ejercicio 3: ";

    $var4 = str_replace(" ", "", $var3);

    echo $var4;

    // Ejercicio 4

    echo "<br>";

    echo "Ejercicio 4: ";

    $textaco= "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
    dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
    utilizando variables pero no lo usaremos en las constantes o globales. (1
    punto)"; // Tenemos que poner la barra \ entre las comillas y el objeto. 

    echo $textaco;

    // Ejercicio 5

    echo "<br>";

    echo "Ejercicio 5: ";
    
    echo strlen($textaco);

    // Ejercicio 6

    echo "<br>";

    echo "Ejercicio 6: ";

    $varmundo = "Hello World";

    $arrayvocal = array ("a", "e", "i", "o", "u");

    $resultado = str_replace($arrayvocal, "", $varmundo);

    echo $resultado; // Se crea un array en donde pongamos todas las vocales y luego con el comando str_replace remplazamos en nuestra frase el array que contiene las vocales.

    // Ejercicio 7
    echo "<br>";

    echo "Ejercicio 7: ";

    $nada;

    echo is_null($nada); // Al crear la variable usando el "is_null" a parte de que sale un 1, indicando que es verdadero, tambien te sale un mensaje de advertencia
    // indicandote que la variable esta vacia. Sin embargo al usar "empty" te sale directamente el uno indicando que es verdadero. 


    // Ejercicio 8
    echo "<br>";

    echo "Ejercicio 8: ";

    $mundo = intval($varmundo);

    echo $mundo; //Sale un cero porque la cadena no puede ser interpretada como un número valido, ya que en nuestro caso la cadena de texto no tiene ningun numero


    // Ejercicio 9

    echo "<br>";

    echo "Ejercicio 9a: ";

    $numero = 144;

    $raiz = sqrt($numero);

    echo $raiz;

    echo "<br>";

    echo "Ejercicio 9b: ";

    $potencia = pow(2,8);

    echo $potencia;

    echo "<br>";

    echo "Ejercicio 9c: ";

    $division = 100%6;

    echo $division;

    echo "<br>";

    echo "Ejercicio 9d: ";

    $numero1 = 3;
    $numero2 = 6;
    
    function calcularMCD($numero1, $numero2){
        if ($numero1 == 0) return $numero2; // En esta linea usamos el if para que vaya comprobando si el numero 1 es igual a 0. Y nos devuelve solamente el numero 2
        return calcularMCD($numero2 % $numero1, $numero1); // Aqui lo que hace es sacar el resto de la division numero2 y numero1 y el numero1
    }
    
    echo calcularMCD($numero1,$numero2); // En este ejercicio hemos usado un "bucle" de una manera más limpia que usar un do while o un for. Una vez que el resto es 0 ya
    // de forma "automatica" saca cual es el MCD de los numeros. Lo que hace es basicamente ir comprobando hasta que el numero 1 es igual a 0 y te devuelve como resultado
    // el numero 2
    


?>