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
$soma = 0;
$numero = 1 ;

while ($numero <= 100) {

    $soma += $numero;
    $numero++;
}
echo "A soma dos números de 1 a 100 é: " . $soma;   
    ?>
</body>
</html>