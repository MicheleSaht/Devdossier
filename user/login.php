<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="header-circle"></div>
    <div class="formArea">
        <div class="form">
        <form action="?" method="post">
            <input type="email" name="email_login" placeholder="Email" required autocomplete="off"><br>
            <input type="password" name="password_login" placeholder="Senha" required autocomplete="off"><br>
            <input type="submit" value="Entrar" class="btnLogin" name="btnLogin"><br>
            <p style="color:#fff">Não possui uma conta? <a href="./register.php">Cadastrar</a></p>
        </form>
    </div>
    
</div>

<?php
if(isset($_POST['email_login'])){
    include __DIR__.'/../search/sql/connection.php';
    $conn->select_db('DEVDOSSIER');
    
    $email = $conn->real_escape_string($_POST['email_login']);
    $senha = $conn->real_escape_string($_POST['password_login']);
    
    $sql = "SELECT * FROM USER WHERE email = '$email' LIMIT 1";
    $sql_query = $conn->query($sql) or die("Falha na execução do código SQL");
    
    $usuario = $sql_query->fetch_assoc();
    
    if(isset($usuario) && password_verify($senha, $usuario['PASSWORD'])){
        include 'sessionStart.php';
        
        $_SESSION['user'] = $usuario['COD_USER'];
        $_SESSION['name'] = $usuario['NAME'];
        
        header('Location: ./index.php');
    }else{
        echo "<p class ='msg'>Falha ao logar! E-mail ou senha incorretos</p>";
    }
}
?>

</body>
</html>