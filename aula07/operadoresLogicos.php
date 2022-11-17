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
//Mostrar se um eleitor é obrigado a votar ou não
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos";       
        $tipo = ($idade >=18 && $idade<65) ? "OBRIGATORIOA" : "NÃO OBRIGATORIO"; 
        echo "<br/>E desse forma seu voto é $tipo";
    ?>
    </div>
</body>
</html>