<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de propinas</title>
</head>
<body>
    <?php

        $cuenta=300;
        number_format($cuenta);

        define('PORC',0.15); // % de propina
        $propina=$cuenta*PORC;
        number_format($propina);
        
        $total=$propina + $cuenta;
        number_format($total);

        echo "La cuenta es de $cuenta € <br>La propina es $propina € <br>El total es de $total €";

    ?>
</body>
</html>