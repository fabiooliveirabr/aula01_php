<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Página 2 - Estrutura de repetição</h1>

    <?php
        $alunos = ["Antônio", "Matheus", "Eroaldo", "Vanessa"];
        $idades = [78, 26, 16, 21];

        // echo $alunos[3];
        // echo "<br>";
        // echo $idades[3];

        foreach($alunos as $item){
            echo $item."<br>";
        }

        foreach($idades as $item){
            echo $item."<br>";
        }
       

        // for($x=0; $x<=3; $x++){
        //     echo "Estudante: ".$alunos[$x]."<br>";
        //     echo "Idade: ".$idades[$x]."<br><br>";
        // }

        // for($x=1; $x<=10; $x++){
        //     echo "<div class='caixas'>Repetição</div>";
        //     echo "<div class='caixas'>SENAI</div>";
        // }

        // $contador = 1;

        // do{
        //     echo "Isso é uma repetição<br>";
        // }while($contador > 200);

        // while($contador > 200){
        //     echo "<div class='caixas'> 
        //             $contador Algum conteúdo do site
        //           </div>";
        //     $contador++;
        // }
    ?>

</body>
</html>