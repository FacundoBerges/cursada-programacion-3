<?php 

    /*
    Aplicación No 2 (Mostrar fecha y estación)

    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página 
    con distintos formatos (seleccione los formatos que más le guste). 
    Además indicar que estación del año es. 
    Utilizar una estructura selectiva múltiple.
    

    Berges Facundo 
    */

    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $date = new DateTime();
    $day = date("d");
    $month = date("m");
    $season = "";
    
    if(($month == 3 && $day >= 20) || $month == 4 || $month == 5 || ($month == 6 && $day < 21))
    {
      $season = "Otoño";
    } 
    else if (($month == 6 && $day >= 21) || $month == 7 || $month == 8 || ($month == 9 && $day < 23))
    {
      $season = "Invierno";
    }
    else if (($month == 9 && $day >= 23) || $month == 10 || $month == 11 || ($month == 12 && $day < 22))
    {
      $season = "Primavera";
    }
    else 
    {
      $season = "Verano";
    }

    echo "<h1>Fecha actual:</h1>";
    echo "<p>" . date_format($date, 'd-m-Y H:i:s') . "</p>";
    echo "<p>" . date_format($date, 'D-M-y') . "</p>";
    echo "<p>" . date_format($date, 'd-m-y H:i:s') . "</p>";
    echo "<p>" . date_format($date, 'd-M-Y G:i:s') . "</p>";
    
    echo "<h2>Estación del año: " . $season . "</h2>";
    
?>