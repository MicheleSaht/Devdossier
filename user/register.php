<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Conta</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="header-circle"></div>
    <div class="formArea">
        <div class="form">
            <form action="?" method="post">
                <input type="text" name="name" placeholder="Nome" maxlength="15" required autofocus autocomplete="off"><br>
                <input type="email" name="email" placeholder="Email" required autocomplete="off"><br>
                <input type="password" name="password" placeholder="Senha" minlength="8" required><br>
                <input type="submit" value="Cadastrar" class="button" name="btnCadastro">
                
                <p style="margin-top:15px;color:#fff">Já possui uma conta? <a href="./login.php">Entrar</a></p>
            </form>
        </div>
    </div>
    
    <?php
if(isset($_POST['email'])){
    include __DIR__ . '/../search/sql/connection.php';

    $conn->select_db('DEVDOSSIER');

    $email = $_POST['email'];
    $nome = $_POST['name'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $sql = "SELECT email FROM USER WHERE email = '$email'";
    $sql_query = $conn->query($sql) or die("Falha na execução do código SQL");
    $quantidade = $sql_query -> num_rows;
    if ($quantidade == 1) {
        echo "<p class ='msg'>Email já possui registro.</p>";
    } else {
        $sql = "INSERT INTO USER (email, name, password) VALUES ('$email', '$nome', '$senha')";
        
        if ($conn->query($sql) === TRUE) {
            echo "('Conta Registrada.')";
            header("Location: ./login.php"); 
        } else {
            echo "<script>console.log('Erro ao adicionar dado:)</script>";
        }
        
    }
    
    $conn->close();
}
?>
</body>
</html>