<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$" placeholder="ex:. João Silva"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone"/>

        <label>Digite seu email:</label>
        <input type="email" name="email"/>

        <input type="submit" value="Enviar para o servidor">
    </form>
    </pre> <!--Formata de maneira prática-->

    <hr/> <!--Insere uma linha (divisória)-->

    <?php
        $nome = '';

        //Olá, <nome>! Seja bem-vindo(a).

        if(isset($_POST['nome'])){ //isset é uma função do PHP que verifica se há valor em uma variável

            //estamos atribuindo o valor do campo "nome" digitado no formulário
            //à nossa variável chamada $nome
            $nome = $_POST['nome']; 

            //Estamos imprimindo a mensagem de boas vindas. 
            //Concatenamos uma string constante com a variável "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a).</p>';
        }
    ?>
</body>
</html>