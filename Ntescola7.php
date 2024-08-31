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
    $notas = 5;
    if($notas >= 90 && $notas <= 100)
    {
        echo "A Nota é A";
    }
    else if ($notas >= 80 && $notas <= 90 )
    {
        echo "A Nota é B";
    }
    else if ($notas >= 70 && $notas <= 79)
    {
        echo "A Nota é C";
    }

    else if ($notas >= 60 && $notas <= 69)
    {
        echo "A Nota é D";
    }

    else 
    {
        echo "A Nota é F";
    }

    ?>  
</body>
</html>
