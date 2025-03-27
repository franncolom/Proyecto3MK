<?php 
    $nombre = "Francisco";
    $edad = 17;
    $altura = 1.82;
    $mayorEdad = false;

    echo "hola mundo";

    /* 
    IDENTIFICA DIFICULTADES QUE PODRIAMOS TENER
    CON LAS SIGUIENTES VARIABLES EN UN PROYECTO REAL 
    */
    
    $nombreCompleto = "Juan Perez"; // En un proyecto real no se puede cambiar el valor de la variable
    $Edad = 25; // No se puede cambiar el valor de la variable y es recomendable ponerlo en minusculas (solo si es una palabra, en caso de ser dos palabras usar, ejemplo: edadUsuario).
    $estAtura = 1.75; // No se puede cambiar el valor de la variable y el nombre de la variable no tiene buenas prácticas.
    $numero = "10"; // Lo mismo de las mayorias de las variables, no se puede cambiar el valor de la variable.
    //Apellido = ´Fernández´; // Hay muchos errores, empezaron por que falta el signo de dolar ($), no tiene sentido que haya una variable Apellido ya que hay una variable de $nombreCompleto y esa ya tiene el firstName y lastName, no se puede cambiar el valor de la variable y como ultimo las comillas que se usan no son correctas, se deberan usar "" o ''.
    //pais_de_origen="Uruguay" // Fata signo de peso ($), no se puede cambiar el valor de la variable y le falta el punto y coma (;) al final..
    //$salario = $2000; // En una variable Int, solo permite numeros, y en este caso se usan otros caracteres como ($) y no se puede cambiar el valor de la variable.
?>