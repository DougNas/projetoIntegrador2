<?php

    if(!empty($_GET['id']))
    {
        require("conecta.php");

        $id = $_GET['id'];
        
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

    $sql = "UPDATE tbbancotalentos SET nome='$nome', 
                                idade=$idade,
                                email='$email', 
                                telefone='$telefone', 
                                cidade='$cidade', 
                                setor='$setor', 
                                cargo='$cargo', 
                                anosExperiencia='$experiencia',
                                notaEntrevista='$nota',
                                avaliacao='$avaliacao'
            WHERE id=$id;";

        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Ação atualizada com Sucesso</h1>";
            echo "<a href='listaCandidato.php'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    
    }
    
?>