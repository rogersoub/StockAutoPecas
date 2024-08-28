<?php
include_once('config.php');

if(isset($_POST['editar'])){
    $id = $_POST['id'];
    $user3 = $_POST['user2']; 
    $email3 = $_POST['email2'];
    $senha3 = $_POST['senha2'];
    $telefone3 = $_POST['telefone2'];
    $data_n3 = $_POST['data2'];

    $sql_update = "UPDATE clientes SET usuario='$user3', email='$email3', senha='$senha3',telefone='$telefone3', data_n='$data_n3' WHERE id='$id' ";

    $result = $conexao->query($sql_update); 

     header('Location: sistema.php');
}
?>