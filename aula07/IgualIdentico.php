<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b)? "SIM":"NÃO"; //igual
        echo "As variaveis A e B são iguais? $r";
    ?>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)? "SIM":"NÃO"; //IDENTICO
        echo "<br/>As variaveis A e B são iguais? $r";
    ?>

    </div>
</body>
</html>