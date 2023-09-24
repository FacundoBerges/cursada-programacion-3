<?php 

    /*
    Aplicación No 1 (Sumar números)

    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.
    

    Berges Facundo 
    */

    $total = 0;
    $cantidad = 0;

    for ($i = 1; $total + $i < 1000; $i++) { 
      $total += $i;
      $cantidad = $i;
    }
    
    echo "Numeros sumados: $total";
    echo "<br/>Cantidad de numeros sumados: $cantidad";

?>