<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero1 = 10; 
    $numero2 = 5; 
    $operacao = "soma"; 

    if ($operacao == "soma") {
        $resultado = $numero1 + $numero2;
        echo "A soma desses numeros são: " . $resultado;
    } elseif ($operacao == "subtração") {
        $resultado = $numero1 - $numero2;
        echo "Resultado desta subtração é: " . $resultado;
    } elseif ($operacao == "multiplicação") {
        $resultado = $numero1 * $numero2;
        echo "Resultado da multiplicação é: " . $resultado;
    } elseif ($operacao == "divisão") {
        $resultado = $numero1 / $numero2;
        echo "Resultado da divisão é: " . $resultado;
    } else {
        echo "Operação inválida. Use 'soma', 'subtração', 'multiplicação' ou 'divisão'.";
    }
    ?>
    
</body>
</html>