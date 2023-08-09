<?php
function descuento(int $precio, float $decuento) {
    $resultado = ($precio * ($decuento/100));
    echo $resultado;
    //return  $resultado;
}

descuento(50000, 10);
//$resultado = descuento(50000, 10);
//echo $resultado;


function esPalindromo(string $palabra){
    if ($palabra = "Acaso hubo búhos acá"){
        echo "es palindromo";

    }
    
    else {
        echo "no es palindromo";
    }
    return $palabra;
}

?>
