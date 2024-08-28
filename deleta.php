<?php
if(!empty($_GET['id'])){//se a busca por id não estiver vazia

    include_once('config.php');

    $id=$_GET['id'];

    // auxiliar
    $email=$_GET['email'];
    if($email=="auxiST@stock.com.br"){
        
        $sqlSelect = "SELECT * FROM clientes WHERE email=$email" ;
        $result = $conexao->query($sqlSelect);
        header('Location: sistema.php');
        echo "Acesso negado";
    }else{

    $sqlSelect = "SELECT * FROM clientes WHERE id=$id" ;//seleciona tudo de um a linha se o id for igual ao da var

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows >0)
    {
        $sqlDelete = "DELETE FROM clientes WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header('Location: sistema.php');

    }

    
    
    
}
?>