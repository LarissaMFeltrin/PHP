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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. <br/>";
                if ($i < 16){
                    $tipoVoto = "Não vota";
                }
                elseif (($i >=16 && $i <18) || ($i>65)){   /* || significa OU */
                        $tipoVoto = "Voto Opcional";
                }
                else{
                        $tipoVoto = "Voto Obrigatorio";
                }
                
                echo "Para essa idade, $tipoVoto";
        ?>
        <a href="ex02.html">Voltar</a>
    </div>
</body>
</html>