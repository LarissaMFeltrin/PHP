<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
    <?php
      $n1 = 3;
      $n2 = 2;
      $s = $n1 + $n2;
      echo "A soma vale ". ($n1+$n2);
      echo "<br/> A Subtração vale ". ($n1-$n2);
      echo "<br/> A Multiplicação vale ". ($n1*$n2);
      echo "<br/> A Divisão vale ". ($n1/$n2);
      echo "<br/> O Modulo vale ". ($n1%$n2);
    ?>
    </div>
</body>
</html>