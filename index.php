<?php
if(isset($_POST['submit1'])) {
  
    include_once('config.php');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];

    $resul = mysqli_query($conexao, "INSERT INTO clientes(usuario,email,senha,telefone,data_n) VALUES ('$user','$email','$senha','$telefone','$data')");

    header('Location: index.php');
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
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>

    <form id="signin" action="logar.php" method="POST">
      <input type="email" name="email1" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" name="senha1" placeholder="Senha" required />
      <i class="fas fa-lock iPassword"></i>
      <button type="submit" name="submit">Logar</button>
    </form>

    <form id="signup" action="index.php" method="POST">
      <input type="text" placeholder="Usuario" id="user" name="user" required />
      <i class="bi bi-person-fill iUser2"></i>
      <input type="email" placeholder="Email" id="email" name="email" required />
      <i class="fas fa-envelope iEmail2"></i>
      <input type="password" placeholder="Senha" id="senha" name="senha" required />
      <i class="fas fa-lock iPassword2"></i>
      <input type="tel" placeholder="Telefone" id="telefone" name="telefone" required />
      <i class="bi bi-telephone-fill iTel2"></i>
      <br><br>
      <label for="data_n" class="date"><br>Data de Nascimento:</label>
      <input type="date" class="data" id="data" name="data" required />
      <button type="submit1" id="submit1" name="submit1">Cadastrar</button>
    </form>
  </div>
</div>

  <script src="_js/login.js"></script>
</body>
</html>
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

form {
  position: absolute;
  margin-top: 80px;
  transition: .5s;
  width: 400px;
  height: 500px;
}

.buttonsForm {
  margin-top: 30px;
  position: relative;
  border-radius: 10px;
  box-shadow: 0 0 7px 0 #d63a25;
}

.buttonsForm button {
  cursor: pointer;
  background: transparent;
  border: none;
  position: relative;
  padding: 10px 28px;
  color: black;
}

.btnColor {
  position: absolute;
  width: 108px;
  height: 100%;
  background: #d63a25;
  color: white;
  border-radius: 10px;
  transition: .4s;
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

#signup {
  left: 650px;
}

.iEmail {
  top: 39px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}

.iEmail2 {
  top: 112px;
  position: absolute;
  left: 0;
  padding: 10px 10px;
  color: black;
}

.iPassword {
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