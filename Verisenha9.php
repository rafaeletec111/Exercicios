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
    $senha = "1";
    $comprimin = 8;
    if (strlen($senha) >= $comprimin) {
        echo "A senha atende aos comprimento mínimo.";
    } else {
        echo "A senha deve ter pelo menos 8 caracteres.";
    }
    ?> 
    

</body>
</html>