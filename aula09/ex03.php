<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional IF</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

</head>
<body>
    <div>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é igual a $m<br>";
            if ($m >=7){
                $sit = "APROVADO";
            }
            elseif ($m >5 && $m <6){
                $sit = "RECUPERAÇÃO";
            }
            else{
                $sit = "REPROVADO";
            }

        echo "Situação do aluno: $sit";

        ?>
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>