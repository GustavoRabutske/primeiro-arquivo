<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo em PHP no GitHub</title>
    <meta charset="UTF-8">
    <style>
        h1,p{
            text-align: center;
        }
        body{
            background-color: aliceblue;
        }
        fieldset {
            width: 35%;
            margin: 30px auto;
            padding-left: 20px;
        }

        div.alinha-botoes {
             text-align: center; /*recurso para alinharmos botões no centro de uma div*/
        }
    </style>
</head>
<body>
    <h1>Calculadora simples de somar números</h1>
    <form method="post">
    <fieldset>
    <label>Informe A: </label> <input name="a" type="number" step="0.1"> <br> <br>
    <label>Informe B: </label> <input name="b" type="number" step="0.1"> <br> <br>
    <div class="alinha-botoes">
    <button name="somar">Somar</button>
    </div>
    </fieldset>
    </form>

</body>
</html>

 <?php
    if(isset($_POST['somar'])){
     $a = strip_tags($_POST['a']);
     $b = strip_tags($_POST['b']);

     $somar = $a + $b;
     echo "<p> A soma de a + b é: $somar </p>";
    }
    ?>
<html>
<body>
    <form action="somar.php">
        <div class="alinha-botoes">
        <button>Limpar resultado</button>
        </div>
    </form>
    </body> 
</html>
