<?php

    /* Criação de função para pesquisa no banco de dados, utilizando informações como ID, nome, setor ou cargo */

    session_start();
        require('conecta.php');
    
        if(!empty($_GET['search']))
        {
            $data = $_GET['search'];
            $sql = "SELECT * FROM tbbancotalentos WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cargo LIKE '%$data%' or setor LIKE '%$data%' ORDER BY notaEntrevista DESC";
        }
        else
        {
            $sql = "SELECT * FROM tbbancotalentos ORDER BY notaEntrevista DESC";
        }
        $result = $conn->query($sql);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Douglas Nascimento">
    <meta name="keywords" content="RH, Recursos Humanos, banco de talentos, profissão">

    <title>Listar Candidatos</title>

    <link rel="icon" type="image/png" href="Image/iconeDev.png">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container mt-5">

        <h1 align=center class="titulo">Listar Candidatos do Banco de Talentos</h1>
        <hr>

        <!-- Barra de pesquisa para filtro por termo procurado -->

        <div class="box-search" style="display: flex; justify-content: center; gap: .5%;">
            <input type="search" class="form-control" placeholder="Buscar candidato por cod, nome, setor ou função" id="pesquisar">
            <button onclick="searchData()" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        
        <hr>

    </div>

    <div class="container mt-5">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome:</th>
                <th scope="col">Data de Cadastro:</th>
                <th scope="col">E-Mail:</th>
                <th scope="col">Setor:</th>
                <th scope="col">Função:</th>
                <th scope="col">Nota:</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['dataCadastro']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['setor']."</td>";
                        echo "<td>".$user_data['cargo']."</td>";
                        echo "<td>".$user_data['notaEntrevista']."</td>";
                        echo "<td>

                            <a class='btn btn-sm btn-primary' href='modifica.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='excluir.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>

                            </td>";
                        echo "</tr>";
                    }
                    ?>

            </tr>
            </tbody>
        </table>

        <br />
        <a href="index.html"><input type="button" class="btn btn-primary" value="Voltar"></a>

    </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'listaCandidato.php?search='+search.value;
    }
</script>


</html>