<?php
if(!empty($_GET['id'])){

    include_once('config.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM `clientes` WHERE id=$id";

    $result = $conexao->query($sqlSelect); 

    if($result->num_rows >0){
        
        while($user_data = mysqli_fetch_assoc($result)){//
            
            $user2 = $user_data['usuario']; 
            $email2 = $user_data['email'];
            $senha2 = $user_data['senha'];
            $telefone2 = $user_data['telefone'];
            $data_n2 = $user_data['data_n'];
        }
    } else {
        header('Location: sistema.php');
    }
} else {
    header('Location: sistema.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Login/Cadstro</title>
  <link rel="stylesheet" href="_css/estilo.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav class="navegacao">
            <a href="#" class="logo">S<span>TO</span>CK AU<span>TO</span>PE<span>ÇAS</a>
        </nav>
</header>
  <div class="body">
  <div class="container">
    <h1 class="nedit">Editar Usuario</h1>
    <form id="signin" action="editsave.php" method="POST">
      <input type="text" placeholder="Usuario" id="user" name="user2" value="<?php echo $user2 ?>" required />
      <i class="bi bi-person-fill iUser2"></i>
      <input type="email" placeholder="Email" id="email" name="email2" value="<?php echo $email2 ?>" required />
      <i class="fas fa-envelope iEmail2"></i>
      <input type="password" placeholder="Senha" id="senha" name="senha2" value="<?php echo $senha2 ?>" required />
      <i class="fas fa-lock iPassword2"></i>
      <input type="tel" placeholder="Telefone" id="telefone" name="telefone2" value="<?php echo $telefone2 ?>" required />
      <i class="bi bi-telephone-fill iTel2"></i>
      <br><br>
      <label for="data_n" class="date"><br>Data de Nascimento:</label>
      <input type="date" class="data" id="data" name="data2" value="<?php echo $data_n2 ?>" required />
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <button type="submit1" id="submit1" name="editar">editar</button>
    </form>

    </div>
  </div>
</body>
</html>
<script src="_js/login.js"></script>
<style>
  :root{
    --red:#d63a25;
    --white:#fff;
    --dark:#1e1c2a;
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
    font-weight: 500;
    transition: all 0.5s;
}
.navegacao ul li .nvi:hover{
    color: var(--red);
}
.navegacao i{
    color: #000000;
    cursor: pointer;
    font-size: 1.9rem;
    transition: all 0.5s;
}

.navegacao i:hover{
    color: var(--red);
}
.body {
  width:99.2vw;
  height:100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
}

.container {
  background-color: white;
  padding: 6px;
  width: 450px;
  height: 540px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  overflow: hidden;
  border-radius: 25px;
  box-shadow: 0 0 20px 0 #1e1c2a;
}
.nedit {
  position: relative;
  top: 30px;
}
form {
  position: absolute;
  margin-top: 80px;
  transition: .5s;
  width: 400px;
  height: 500px;
}

input[type="text"], input[type="email"], input[type="password"], input[type="tel"] {
  border: none;
  margin-top: 40px;
  border-radius: 60px;
  padding: 10px 0 8px 35px;
  outline: none;
  width: 100%;
  background: #ccc;
  color: black;
}

.data {
  background: #ccc;
  border: none;
  padding: 8px;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
}

.date {
  color: white;
}

button[type="submit"] {
  background: #d63a25;
  color: white;
  border-radius: 20px;
  width: 100%;
  border: none;
  outline: none;
  padding: 10px 0 10px 0px;
  font-size: 15px;
  margin-top: 60px;
  cursor: pointer;
  transition: .4s;
}
button[type="submit"]:hover {
  background: #fc4c35;
}

button[type="submit1"] {
  background: #d63a25;
  color: white;
  border-radius: 20px;
  width: 100%;
  border: none;
  outline: none;
  padding: 10px 0 10px 0px;
  font-size: 15px;
  margin-top: 28px;
  cursor: pointer;
  transition: .4s;
}
button[type="submit1"]:hover {
  background: #fc4c35;
}

.divCheck {
  margin: 20px 0 0 5px;
  width: 80%;
  font-size: 14px;
  color: white
}

#signin {
  left: 25px;
}

.iEmail2 {
  top: 112px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}

.iPassword2 {
  top: 186px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}

.iUser2 {
  top: 36px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}

.iTel2 {
  top: 260px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}
</style>