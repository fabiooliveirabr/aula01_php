<?php
    //Criação de variáveis
    $aluno = "Antônio";
    $idade = 78;
    $altura = 1.69;
    $situacao = false;

    if($idade>=80){
        echo "Seu fim está próximo<br>";
    }elseif($idade < 18){
        echo "Menor de idade <br>";
    }elseif($idade<=78 && $idade >= 70){
        echo "Coroa acabado<br>";
    }else{
        echo "Viva la vida loca<br>";
    }



    // if($idade < 60 || $altura >= 1.50){
    //     echo "Convocado para a guerra<br>";
    // }else{
    //     echo "Escapou da guerra.<br>";
    // }   


    // if($idade >= 80){
    //     echo "Já pode se aposentar.<br>";
    // }else{
    //     echo "Não pode se aposentar.<br>";
    // }


    echo "<b>Nome do estudante:</b> $aluno <br>";
    echo "Sua idade é " . $idade . " anos<br>";
    echo "Sua altura é " . $altura . "metros<br>";
    echo "Status da matrícula: " . $situacao;
    
    
    // echo " <h1 id='titulo'> Ola Mundo!</h1>";
    // Isso é um comentário
   
    # Isso é um comentário

    /*Isso é uma
    comentário de
    várias linhas*/



?>