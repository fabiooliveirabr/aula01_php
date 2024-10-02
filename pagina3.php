<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página 3 - Utilizando funções</h1>
    
    <?php
        //Exemplo de função sem retorno e parametros
        function exibirMensagem(){
            echo "Olá Mundo!";
        }

        // Exemplo de função sem retorno e com parametros
        function exibirMensagem2($nome, $cidade){
            echo "Bem vindo $nome <br>";
            echo "Sua cidade é $cidade";
        }

        exibirMensagem2("Antônio", "Paulista");
        $n = "Matheus";
        $c = "Olinda";
        exibirMensagem2($n, $c);

        //Função com retorno e parametros
        function somarValores($a, $b, $c){
            $resultado = $a + $b + $c;
            return $resultado;
        }
        echo "O resultado é: ".somarValores(78, 226, 18);

        $valor = somarValores(30, 50, 63.6);
        echo "O resultado é: ". $valor;

        //Função com retorno e parametros
        function fazerLogin($usuario, $senha){
            if($usuario=="admin" && $senha="sport876"){
                return true;
            }else{
                return false;
            }
        }

        $status = fazerLogin("antonio", "palmeiras123");
        if($status){
            echo "Logado com sucesso!";
        }else{
            echo "Usuário e/ou senha incorretos";
        }
        





    ?>
</body>
</html>