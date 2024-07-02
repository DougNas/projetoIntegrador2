<?php

    /* Recupera informações do banco de dados a partir do ID e adiciona ao formulário */

    if(!empty($_GET['id']))
    {
        require('conecta.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM tbbancotalentos WHERE id=$id";
        $result = $conn->query($sqlSelect);
        while($user_data = mysqli_fetch_assoc($result)){
            
            $id=$user_data['id'];
            $data=$user_data['dataCadastro'];
            $nome=$user_data['nome'];
            $idade=$user_data['idade'];
            $email=$user_data['email'];
            $telefone=$user_data['telefone'];
            $cidade=$user_data['cidade'];
            $setor=$user_data['setor'];
            $cargo=$user_data['cargo'];
            $experiencia=$user_data['anosExperiencia'];
            $nota=$user_data['notaEntrevista'];
            $avaliacao=$user_data['avaliacao'];

        }
    
    }

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Douglas Nascimento">
    <meta name="keywords" content="RH, Recursos Humanos, banco de talentos, profissão">

    <title>Editar Informações do Candidato</title>

    <link rel="icon" type="image/png" href="Image/iconeDev.png">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container mt-5">

        <div align=center>
            <h1 id="titulo" class="titulo" >Consultar/Atualizar Candidato</h1>
            <p id="subtitulo">Atualize os dados ou clique em "voltar" para tela anterior</p>
        </div>

    <!-- Inicio do formulário, que já terá um preenchimento prévio -->

        <form method="POST" action="editarCandidato.php?id=<?php echo $id;?>">

            <fieldset class="grupo">

                <hr>
                <h4>Dados Pessoais</h4>
                <br>

                <div class="campo">
                    <label for="nome"><strong>Nome do Candidato</strong></label>
                    <input type="text" name="nome" value=<?php echo $nome;?> maxlength="60" size="60" class="shadow-lg p-1 mb-4 bg-body rounded" id="nome">
                </div>

                <div class="campo">
                    <label for="idade"><strong>Idade</strong></label>
                    <input type="number" name="idade" value=<?php echo $idade;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="idade" min="18" max="100" step="1" value="18" required>
                </div>

                <div class="campo">
                    <label for="email"><strong>E-mail</strong></label>
                    <input type="email" name="email" value=<?php echo $email;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="email">
                </div>

                <div class="campo">
                    <label for="telefone"><strong>Numero de Telefone</strong></label>
                    <input type="text" name="telefone" value=<?php echo $telefone;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="telefone" required>
                </div>

                <div class="cidade">
                    <label for="nome"><strong>Cidade/UF</strong></label>
                    <input type="text" name="cidade" value=<?php echo $cidade;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="cidade" required>
                </div>

                <hr>
           
            </fieldset> 

            <h4>Dados para Avaliação</h4>

            <div class="campo">
                <label>Setor Atual: <strong><?php echo $setor;?></strong></label>
                <br>
                <br>
                <label>
                    <input type="radio" name="setor" value="Setor Administrativo" checked>Setor Administrativo
                </label>
                <br>
                <label>
                    <input type="radio" name="setor" value="Setor de RH & DP">Setor de RH & DP
                </label>
                <br>
                <label>
                    <input type="radio" name="setor" value="Setor Operacional">Setor Operacional
                </label>
                <br>
                <label>
                    <input type="radio" name="setor" value="Setor Estrategico">Setor Estrategico
                </label>

            </div>

            <br>

            <div class="campo">
                <label for="cargo"><strong>Cargo/Função</strong></label>
                <input type="text" name="cargo" value=<?php echo $cargo;?> maxlength="60" size="60" class="shadow-lg p-1 mb-4 bg-body rounded" id="cargo" required>
            </div>

            <div class="campo">
                <label for="experiencia"><strong>Anos de Experiência</strong></label>
                <input type="number" name="experiencia" value=<?php echo $experiencia;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="experiencia" min="0" max="45" step="1" value="0" required>
            </div>

            <div class="campo">
                <label for="nota"><strong>Nota da entrevista (de 1 a 10)</strong></label>
                <input type="number" name="nota" value=<?php echo $nota;?> class="shadow-lg p-1 mb-4 bg-body rounded" id="nota" min="0" max="10" step="1" value="1" required>
            </div>

            <div class="campo">
                <label for="avaliacao"><strong>Atualize a Avaliação do Candidato: </strong></label>
                <br>
                <textarea rows="6" style="width: 26em" class="shadow-lg p-3 mb-5 bg-body rounded" id="avaliacao" name="avaliacao"><?php echo $avaliacao;?></textarea>
            </div>

            <div style="display: flex; gap: .5%;">
                <div class="campo">
                    <a href="listaCandidato.php">
                        <input type='button' value='Voltar' class="botao btn btn-primary btn-lg"> 
                    </a>
                </div>
                <div class="campo">
                    <button class="botao btn btn-primary btn-lg" type="submit" onsubmit="">Atualizar</button>            
                </div>

            </div>

        </form>

    <!-- Formulário chama o editarCandidato.php -->
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>