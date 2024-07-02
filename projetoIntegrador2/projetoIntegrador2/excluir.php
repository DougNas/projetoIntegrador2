<?php

    /* Procedimento para exclusão de registros */
    
    if(!empty($_GET['id']))
    {
        require("conecta.php");

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tbbancotalentos  WHERE id=$id";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tbbancotalentos  WHERE id=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: listaCandidato.php');
   
?>