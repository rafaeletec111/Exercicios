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
$numero = 6;
$fatorial = 1;


for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}
echo "O fatorial de $numero é $fatorial.";
?>
</body>
</html>