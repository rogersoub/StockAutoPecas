<?php
session_start();
include_once('config.php');

if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
$logado = $_SESSION['email'];

if(!empty($_GET['search'])){

    $data = $_GET['search'];
    $sql = "SELECT * from clientes WHERE id like '%$data%' or email like '%$data%' or usuario like '%$data%' ORDER BY id DESC";

}else{
    $sql = "SELECT * from clientes ORDER BY id DESC"; 

}

$result= $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pega os style do broodstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Banco de dados</title>
</head>
    
<body>
    <!-- CABECALHO -->
    <header>
        <nav class="navegacao">
            <a href="#" class="logo">S<span>TO</span>CK AU<span>TO</span>PE<span>ÇAS</a>
                <ul class="nav-menu">
                    <li class="nav-intem"><a href="home.html" class="btnsair">sair</a></li> 
                </ul>
        </nav>
    </header> 
    <section class="corpo">
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
    <div class="box-search">
        <input type="search" class="form-control w-100" placeholder="Pesquisar" id="pesquisar"/>
        <button class="btn btn-primary" onclick="searchData()">
        <svg xmlns='http://www.w3.org/2000/svg' width='260' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
        <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
        </svg>
        </button>
    </div>

    <div class="m-5">
        <table class="table text-black table-bg">
        <thead class=""><!-- tag que é a tabela "mãe", vai ficar fixo o tr(linhas) e th(títulos) -->
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Nascimento</th>
            </tr>
        </thead>
        <tbody><!-- tag que é a tabela filha, vai puxar os tr e td(prenchimentos) -->
            <?php
            while($user_data = mysqli_fetch_assoc($result))//enquanto user_data  receber o que vai escrever
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['usuario']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['data_n']."</td>";
                echo "<td>
                <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a>


                <a class='btn btn-sm btn-danger' href='deleta.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";//coloca o botão do lápis (LEMBRAR DE TIRAR AS ÁSPAS DUPLAD E TROCAR POR SIMPLES)
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
    </div> 
</section> 

</body>
<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });
    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
list-style: none;
text-decoration: none;
}
:root{
    --red:#d63a25;
    --white:#fff;
    --dark:#1e1c2a;
}
body{
    color: var(--dark);
    background: var(--white);
}
.navegacao{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 30px;
    box-shadow: 0 0.1rem 0.5rem #ccc;
    width: 100%;
    background: var(--white);
    transition: all 0.5s;
    position: relative;
    

}
.navegacao .logo{
    color: var(--red);
    font-size: 1.7rem;
    font-weight: 600;
}
.logo span{
    color: var(--dark);
    
}
.navegacao ul{
    display: flex;
    align-items: center;
    gap: 5rem;
}
.navegacao ul li .nvi{
    color: var(--dark);
    font-size: 17px;
    font-weight: 900;
    transition: all 0.5s;
}
.navegacao ul li .nvi:hover{
    color: var(--red);
}
.btnsair {
    position: relative;
    background: var(--red);
    padding: 15px 20px;
    border: none;
    border-radius: 15px;
    color: white;
    top: 8px;
    transition: 0.4s;
}
.btnsair:hover {
    color: white;
    background: red;
}
section.corpo{
    width: 100%;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 10%;
}

/* PARTE DO FORMULÁRIO */

a{
    text-decoration: none;
}

.table-bg{
    background: rgba(0, 0, 0, 0.1);
    border-radius: 15px; 
   
}
.box-search{
    position: relative;
    justify-content:center;  
    top: -250px;
    left: 500px;
}
  