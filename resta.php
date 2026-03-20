<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero1 = $_POST['numero1'] ?? null;
    $numero2 = $_POST['numero2'] ?? null;
    
    if (isset($numero1) && isset($numero2) && is_numeric($numero1) && is_numeric($numero2)) {
        
        $resultado = $numero1 - $numero2;
        
        echo "Resultado: " . $numero1 . " - " . $numero2 . " = " . $resultado;
        
    } else {
        echo "Error: Por favor ingresa números válidos en ambos campos";
    }
    
} else {
    echo "Error: Método de petición no válido";
}
?>c