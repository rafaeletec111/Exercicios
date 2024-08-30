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
    $idade = 19;
    if($idade <= 12)
    {
        echo "Criança";
    }
    else if($idade <= 17 )
    {
        echo "Adolescente";
    }
    else if($idade <= 64)
    {
        echo "Adulto";
    }
    else if($idade > 65)
    {
        echo "Idoso";
    }
    
    ?>
</body>
</html>