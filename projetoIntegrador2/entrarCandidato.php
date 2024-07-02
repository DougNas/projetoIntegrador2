<?php

    require("conecta.php");

    /* Após a conexão com o banco de dados, pagina insere as informações no banco de dados atraves de um insert into */

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];
    $experiencia = $_POST['experiencia'];
    $nota = $_POST['nota'];
    $avaliacao = $_POST['avaliacao'];

    $sql = "INSERT INTO tbbancotalentos (nome, idade, email, telefone, cidade, setor, cargo, anosExperiencia, notaEntrevista, avaliacao)
    VALUES ('$nome', $idade, '$email', '$telefone', '$cidade', '$setor', '$cargo', $experiencia, $nota, '$avaliacao')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Cadastro realizado com Sucesso</h1>";
        echo "<a href='cadastroCandidato.html'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>