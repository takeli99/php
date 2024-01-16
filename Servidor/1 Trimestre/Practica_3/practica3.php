<?php 
    // Ejercicio 1
    if(isset($_POST["precio"])) { //isset comprueba si la variable esta activa, es decir si hay un numero dentro de ese input
        $precio = $_POST["precio"];
        if($precio < 50) {
            echo "Los gastos de envio son 3,95";
        } else if ($precio >= 50 && $precio < 75) {
            echo "Los gastos de envio son 2,95";
        } else if ($precio >= 75 && $precio < 100) {
            echo "Los gastos de envio son 1,95";
        } else if ($precio >= 100) {
            echo "Los gastos de envio son gratuitos";
        }
    }
    // Ejercicio 2
    if(isset($_POST["precio1"])) {
        $precio = $_POST["precio1"];
        switch ($precio) {
            case $precio < 50: {
                echo "Los gastos de envio son 3,95";
                break;
            }
            case $precio >= 50 && $precio < 75; {
                echo "Los gastos de envio son 2,95";
                break;
            }
            case $precio >=75 && $precio < 100: {
                echo "Los gastos de envio son 1,95";
                break;
            }
            default: {
                echo "Los gastos de envio son gratuitos";
                break;
            }
        }
    }
    // Ejercicio 3
    if(isset($_POST["numero1"])) {
        $numeros = array(
            $_POST["numero1"],
            $_POST["numero2"],
            $_POST["numero3"],
            $_POST["numero4"],
            $_POST["numero5"]
        );
            $mayor = $numeros[0];
            for ($i = 1; $i < 5; $i++) {
                if ($numeros[$i] > $mayor) {
                    $mayor = $numeros[$i];
                }
            }
            echo "El número mayor es: $mayor";
    }
    // Ejercicio 4
    if(isset($_POST["boton"])) {
        $matriz = array (
            array (3, 1),
            array (2, 0)
        );
        foreach ($matriz as $fila) {
            foreach ($fila as $valor) {
                echo $valor. ' ';
            }
            echo "<br>";
        }
    }
    // Ejercicio 5
    if(isset($_POST["boton2"])){
        $matriz1 = array (
            array (1, 0),
            array (0, 1)
        );

        $matriz2 = array (
            array (0, 1),
            array (1, 0)
        );

        for($i=0;$i<2;$i++){
            for($j=0;$j<2;$j++){
                $matriztotal[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
                echo $matriztotal[$i][$j];
            }

            echo "<br>";
        }
    }
?>