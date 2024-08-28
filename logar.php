<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email1']) && !empty($_POST['senha1'])) {
        include_once('config.php');
        $email = $_POST['email1'];
        $senha = $_POST['senha1'];

        $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.html');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>