<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/_css/agendamento.css">
    <title>Login</title>
</head>

<body>
    <!-- CABECALHO -->
    <header>
        <nav class="navegacao">
            <a href="#" class="logo">S<span>TO</span>CK AU<span>TO</span>PE<span>ças</a>
                <ul class="nav-menu">
                    <li class="nav-intem"><a class="nvi" href="index.html">Home</a></li>
                    <li class="nav-intem"><a class="nvi" href="sobre-nos.html">Sobre</a></li>
                    <li class="nav-intem"><a class="nvi" href="agendamento.html">Agendamento</a></li>
                    <li class="nav-intem"><a class="nvi" href="pecas.html">Peças</a></li>
                    <li class="nav-intem"><a class="nvi" href="fale-conosco.html">Contato</a></li>
                    <li class="nav-intem iLogin"><a class="LG" href="#">Login</a></li>
                </ul>
        </nav>
    </header>        
            <div class="b">
            <div id="agendamento" method="post" action="malto:rogersoubrand1a@gmail.com">
                <legend class="agen">Login</legend>
                <form>
                    <br id="usuario">
        
                        <br><label form="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="25" maxlength="30" placeholder="Nome Completo" required/><span class="validity"></span> 
                        <p><label form="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="20" maxlength="30" placeholder="Melhor E-mail"/></p>
                        <br>
                        <p><label form="cNum">Número:</label> <input type="tel" name="tNum" id="cNum" size="20" minlength="9" maxlength="19" placeholder="Melhor Número" required/><span class="validity"></span></p> 
                        <p><label form="cNum">Senha:</label> <input type="password" name="tNum" id="cNum" size="20" minlength="5" maxlength="20" placeholder="Melhor Senha" required/><span class="validity"></span></p> 
                        <p><label form="cNome">Endereço:</label> <input type="text" name="tNome" id="cNome" size="25" maxlength="50" placeholder="Seu endereço" required/><span class="validity"></span></p> 
                    <br><br>
                    <input class="but" type="submit" value="Enviar"/>
                </form>
            </div>
        </div>
    <!-- RODAPE -->
    <footer id="rodape">
        <p>Empresa - Stock AutoPeças &copy;</br>
            <a href="" target="_blank">Instagram</a>
            <a href="" target="_blank">Facebook</a>
        </p>
    </footer>
</body>

</html>