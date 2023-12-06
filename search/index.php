<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultados de Busca</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <script src="../script.js"></script>
    <header>
        <div class="header-circle"></div>
        <nav>
            <div class="nav-menu"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 50 50" style="fill:#FFFFFF;">
                <path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"></path>
                </svg></div>
            <form action="http://localhost/gitClone/Devdossier/search/" method="GET">

                <input type="text" id="search-box" name="q" placeholder="Pesquisar" required/>
                <button type="submit" id="search-button" value="Pesquisar"> <img src="../img/search.svg" alt=""></button>

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
        <div class="container-itens search-itens">
        <?php
$search = str_replace(' ', '', strtolower($_GET['q']));

include "./sql/connection.php";

$conn->select_db('DEVDOSSIER');

$sql = "SELECT * FROM TITLE JOIN PAGE ON TITLE.COD_PAGE = PAGE.COD_PAGE WHERE TITLE_SEARCH LIKE '%$search%' OR NAME LIKE '%$search%'";


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $img = $row['NAME'];
        $type = strtoupper($row['NAME']);
        $title = $row['TITLE_REAL'];
        $desc = $row['DESC_TITLE'];
        $num = $row['COD_TITLE'];
        
        echo "<div class='search-item'>
        <img src='../img/$img.svg' alt='#' />
        <a class='$img' href='./../linguagem/$img.html#$img.$num'>$title | $type</a>
        <p>$desc</p>
    </div>";
    }
} else {
    echo "<p class='result'>Tópico não Encontrado<p>";
}
?>
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