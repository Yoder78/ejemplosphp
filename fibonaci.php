<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Serie de Fibonaci</title>
</head>
<body>
    
</body>
</html>
<?php
 
$a=1;
$b=0;

$r=1;

$cont =1;

do{
    echo $r."<\n>";
    $a = $b;
    $b = $r;
    $r = $a+$b;

    $cont++;
} while ($cont <=10);
?>