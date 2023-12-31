<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>Perfil de ".$_SESSION['name']."</title>";?>
</head>
<body>
<script src="./script.js"></script>
    <header>
        <div class="header-circle"></div>
        <nav>
            <div class="nav-menu"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 50 50" style="fill:#FFFFFF;">
                <path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"></path>
                </svg></div>
            <form action="http://localhost/gitClone/Devdossier/search/" method="GET">

                <input type="text" id="search-box" name="q" placeholder="Pesquisar" autocomplete='off' required/>
                <button type="submit" id="search-button" value="Pesquisar"> <img src="./img/search.svg" alt=""></button>

            </form>
            <div class="nav-redirect">

                <a class="nav-item" href="">Sobre nós</a>
                <a class="nav-item" href="">Sobre nós</a>
                <a class="nav-item" href="">Sobre nós</a>
            </div>
            <div class="user-icon">

            </div>
        </nav>
    </header>
    <main>
        <main href=""></main>
        <div class="container-itens">
            <a href="#">
                <div class="container-item">
                    <img src="./img/javascript.svg" alt="#" />
                    <span style="color: #EAFF67;">JavaScript</span>
                </div>
            </a>

            <div class="container-item">
                <img src="./img/css.svg" alt="#" />
                <span style="color: #7CA5F5;">CSS</span>
            </div>

            <div class="container-item">
                <img src="./img/html.svg" alt="#" />
                <span style="color: #EE7F2F;">HTML</span>
            </div>

            <div class="container-item">
                <img src="./img/php.svg" alt="#" />
                <span style="color: #9FC4FB;">PHP</span>
            </div>

            <div class="container-item">
                <img src="./img/sql.svg" alt="#" />
                <span style="color: #92A2D9;">Modelagem</span>
            </div>

            <div class="container-item">
                <img src="./img/modelagem.svg" alt="#" />
                <span style="color: #2555FF;">SQL </span>
            </div>

            <div class="container-item">
                <img src="./img/java.svg" alt="#" />
                <span style="color: #EA2D2E;">Java</span>
            </div>


            <div class="container-item">
                <img src="./img/python.svg" alt="#" />
                <span style="color: #FFCF25;">Python</span>
            </div>
        </div>
        <!-- <footer>
            <div>
                <p>&copy; 2023 DevDossier </p>
            </div>
            <div>
                <ul>
                    <li><a href="#">Desenvolvimento de Sistemas</a></li>

                </ul>
            </div>
        </footer> -->
    </main>
</body>
</html>