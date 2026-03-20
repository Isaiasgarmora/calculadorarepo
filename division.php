<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $dividendo = $_POST['dividendo'] ?? null;
    $divisor = $_POST['divisor'] ?? null;
    
    if (isset($dividendo) && isset($divisor) && is_numeric($dividendo) && is_numeric($divisor)) {
        
        if ($divisor == 0) {
            echo "Error: No se puede dividir entre cero";
        } else {
            $resultado = $dividendo / $divisor;
            
            echo "Resultado: " . $dividendo . " ÷ " . $divisor . " = " . $resultado;
        }
        
    } else {
        echo "Error: Por favor ingresa números válidos en ambos campos";
    }
    
} else {
    echo "Error: Método de petición no válido";
}
?>