<?php
include 'connection.php';

$dbName = "DEVDOSSIER";

$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
} else {
}

$conn->select_db($dbName);

$sql = 'CREATE TABLE PAGE(
    COD_PAGE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NUM_LIKE INT, 
    VIEWS INT,
    NAME VARCHAR(255)
)';

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>'; 
}

$sql = 'CREATE TABLE TITLE(
    COD_TITLE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    TITLE_REAL VARCHAR(255),
    TITLE_SEARCH VARCHAR(255),
    DESC_TITLE VARCHAR(255),
    ID INT, 
    COD_PAGE INT,

    FOREIGN KEY (COD_PAGE) REFERENCES PAGE(COD_PAGE)
)';

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';
}

$sql = 'INSERT INTO `devdossier`.`page` (`NUM_LIKE`, `VIEWS`, `NAME`) VALUES ("5", "10", "html"), ("4", "8", "javascript"), ("6", "12", "python"), ("3", "6", "css"), ("2", "4", "modelagem"), ("1", "2", "php"), ("5", "10", "sql"), ("8", "16", "java")';

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';
}
$sql_lines = ["INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estrutura Básica do HTML', 'estruturabásicadohtml', 'A estrutura básica de um documento HTML consiste em vários elementos principais, que incluem o !DOCTYPE, html, head e body...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estrutura de um documento HTML', 'estruturadeumdocumentohtml', 'A estrutura completa de um documento HTML envolve diversos elementos, desde a declaração do tipo de documento até o conteúdo visível...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Elementos html, head e body', 'elementoshtml,headebody', 'O html é a raiz de um documento HTML. Ele envolve todo o conteúdo da página, incluindo o head e o body. Todo o conteúdo HTML de uma página está contido dentro do html...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Comentários em HTML', 'comentáriosemhtml', 'Em HTML, os comentários são usados para incluir notas ou descrições que não são visíveis na página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tags HTML', 'tagshtml', ' Etiquetas HTML são mais referidas como tags HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tags de Parágrafo p', 'tagsdeparágrafop', 'É utilizada para definir e estruturar parágrafos de texto em um documento HTML. Cada vez que você deseja criar um novo parágrafo de texto, você envolve o texto desse parágrafo com a tag p...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tags de Cabeçalho h1 a h6', 'tagsdecabeçalhoh1ah6', 'As tags de cabeçalho h1 a h6 são usadas para criar títulos ou cabeçalhos em HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Listas Ordenadas ol', 'listasordenadasol', 'Uma lista ordenada é usada quando a ordem dos itens é importante, e os itens são numerados automaticamente...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Listas Não Ordenadas ul', 'listasnãoordenadasul', 'Uma lista não ordenada é usada quando a ordem dos itens não é importante. Os itens são marcados com marcadores, geralmente pontos...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Listas de Descrição dl, dt, dd', 'listasdedescriçãodl,dt,dd', 'As tags dl, dt, e dd são usadas para criar listas de descrição em HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Ligações a', 'ligaçõesa', 'A tag a é usada para criar links (ou hiperlinks) em uma página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Imagens img', 'imagensimg', 'A tag img é usada para exibir imagens em uma página da web. Ela permite que você insira imagens gráficas, como fotografias, ilustrações, ícones e gráficos, diretamente em seu documento HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tabelas table, tr, td, th', 'tabelastable,tr,td,th', 'As tags table, tr, td, e th são usadas em HTML para criar tabelas e organizar dados tabulares em uma página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Formulários form, input, textarea, button', 'formuláriosform,input,textarea,button', 'Elementos HTML essenciais para criar formulários interativos em uma página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Elementos de Formulário form, input, textarea, button', 'elementosdeformulárioform,input,textarea,button', 'Elementos usados para criar formulários interativos em uma página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Atributos de Elemento (src, href, alt)', 'atributosdeelemento(src,href,alt)', 'Atributos usados para configurar e personalizar elementos HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Atributos Globais (id, class, style)', 'atributosglobais(id,class,style)', 'Atributos que podem ser aplicados a praticamente todas as tags HTML...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Atributo id', 'atributoid', 'Usado para dar um identificador exclusivo a um elemento HTML em uma página. Frequentemente usado para referenciar o elemento com CSS ou JavaScript...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Atributo class', 'atributoclass', 'Usado para aplicar uma ou mais classes CSS a um elemento. Permite que você aplique estilos específicos a um grupo de elementos semelhantes...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Atributo style', 'atributostyle', 'O atributo style permite que você aplique estilos CSS diretamente a um elemento individual. Fornece controle de estilo inline...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Aninhar Elementos', 'aninharelementos', 'O aninhamento de elementos em HTML refere-se à prática de colocar um elemento HTML dentro de outro. Isso cria uma hierarquia ou estrutura de elementos dentro de uma página da web...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Elementos Semânticos (header, nav, article)', 'elementossemânticos(header,nav,article)', 'HTML semântico enfatiza o uso de elementos de maneira significativa e estruturada para tornar o conteúdo compreensível para navegadores e seres humanos...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Metatags', 'metatags', 'As meta tags em HTML fornecem informações adicionais sobre uma página da web, sendo importantes para mecanismos de busca e redes sociais...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Links e Ancoragens', 'linkseancoragens', 'Links e ancoragens são elementos essenciais para a navegação na web, permitindo a conexão entre páginas, recursos e partes específicas de uma página...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Inserir Imagens', 'inseririmagens', 'As imagens são incorporadas em uma página da web usando a tag <code>img</code>. Esta tag é um elemento vazio que utiliza atributos para especificar informações sobre a imagem a ser exibida...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Criação de Tabelas', 'criaçãodetabelas', 'As tabelas em HTML permitem organizar dados de forma tabular. A tag principal é <code>table</code>...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Cabeçalhos de Coluna e Linha', 'cabeçalhosdecolunaelinha', 'Usando as tags <code>th</code> (cabeçalho de tabela) e os atributos <code>colspan</code> e <code>rowspan</code> para criar cabeçalhos...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Células de Mesclar', 'célulasdemesclar', 'Mesclar células em tabelas usando os atributos <code>rowspan</code> e <code>colspan</code>...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Formulário de Exemplo', 'formuláriodeexemplo', 'Um formulário feito de exemplo para melhor entendimento a respeito do assunto...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Novas Funcionalidades HTML5', 'novasfuncionalidadeshtml5', 'Alguns elementos e funcionalidades do HTML5...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Formulário HTML5 com Validação', 'formuláriohtml5comvalidação', 'Um exemplo de formulário utilizando métodos de validação em HTML5...', '1');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Eventos JavaScript, Incorporação de Multimídia e CSS', 'eventosjavascript,incorporaçãodemultimídiaecss', 'Exemplificando eventos do JavaScript, a incorporação de multimídia e o CSS...', '1');","INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('JavaScript', 'javascript', 'Linguagem de programação JavaScript, conceitos e tudo mais...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('O que é?', 'oqueé?', 'É uma linguagem de programação, criado nos anos 90 pela Netscape Communications, seu objetivo é ajudar na criação de sites mais interativos e dinâmicos...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Exemplo (site com Javascript X Sem JavaScript)', 'exemplo(sitecomjavascriptxsemjavascript)', 'Alguns exemplos comparando a diferença entre os sites...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Sem JavaScript (Site - Youtube)', 'semjavascript(site-youtube)', 'Mostrando o Youtube sem a utilização do JavaScript...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Com JavaScript', 'comjavascript', 'O JavaScript permite controlar os elementos de uma página em tempo real, sem necessariamente ter que receber os dados ou uma resposta do servidor.', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('O que faz / para que serve?', 'oquefaz/paraqueserve?', 'No começo, páginas da web costumavam ser estáticas, ou seja, exibiam apenas as informações essenciais em um layout fixo, completamente diferente dos sites que vemos hoje em dia.', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Como baixar e utilizar essa linguagem?', 'comobaixareutilizaressalinguagem?', 'É Necessário fazer a instalação do Visual Studio Code...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funcionalidades importantes em Javascript', 'funcionalidadesimportantesemjavascript', 'As variáveis são usadas para armazenar dados, como strings, números, objetos JSON (JavaScript Object Notation) ou valores booleanos (true ou false)...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Strings', 'strings', 'Strings são usadas para representar vários caracteres, como texto. Elas oferecem vários métodos e funcionalidades para manipular e processar o texto...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Declarando Strings', 'declarandostrings', 'Você pode declarar strings usando aspas simples, duplas ou crases (template literals) em JavaScript...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Concatenar Strings', 'concatenarstrings', 'Você pode combinar strings usando o operador (+) ou template literals...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tamanho de uma String', 'tamanhodeumastring', 'Você pode obter o tamanho de uma string usando a propriedade length...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Acessando Caracteres', 'acessandocaracteres', 'Você pode acessar caracteres individuais em uma string usando colchetes e índices, onde o primeiro caractere sempre vai começar com o índice 0...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Métodos', 'métodos', 'JavaScript fornece diversos métodos embutidos para manipular strings...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Number', 'number', 'Number é usado para representar números inteiros e números decimais...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Eventos', 'eventos', 'Os eventos em JavaScript mostram ações em elementos que ocorrem na página web, como a passagem do mouse sobre uma imagem, cliques em botões ou pressionar uma tecla.', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas de repetição', 'estruturasderepetição', 'Estruturas como for, for in etc...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas de condição', 'estruturasdecondição', 'As estruturas condicionais são utilizadas para a tomada de decisão em um algoritmo. Quando uma expressão retorna verdadeiro ou falso...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Objetos globais', 'objetosglobais', 'As estruturas condicionais são utilizadas para a tomada de decisão em um algoritmo. Quando uma expressão retorna verdadeiro ou falso, o algoritmo executa o bloco de comandos correspondente ao resultado...', '2');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Python', 'python', 'Python é uma linguagem de programação de alto nível que foi criada por Guido van Rossum em 1991...', '3');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Sintaxe e Estruturas de Controle', 'sintaxeeestruturasdecontrole', 'Variáveis, Tipos de Dados, Operadores, Estruturas Condicionais, Loops...', '3');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas Condicionais', 'estruturascondicionais', 'Como funciona as estruturas condicionais em Python, if, else e etc...', '3');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas de Dados', 'estruturasdedados', 'Listas, Tuplas, Dicionários, Conjuntos, Indexação, Fatiamento...', '3');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funções e Escopo', 'funçõeseescopo', 'Definição e Chamada de Funções, Argumentos, Escopo de Variáveis...', '3');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('CSS (Cascading Style Sheets)', 'css(cascadingstylesheets)', 'CSS é uma linguagem utilizada para estilizar elementos HTML em uma página web...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Seletores e Propriedades', 'seletoresepropriedades', 'Seletores de Elementos, Classes, IDs, Propriedades de Estilo...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Modelo de Caixa', 'modelodecaixa', 'Margens, Bordas, Preenchimentos, Box Model...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Posicionamento e Layout', 'posicionamentoelayout', 'Vários conceitos relacionados ao posicionamento e ao layout do site em CSS...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Unidades e Valores', 'unidadesevalores', 'Unidades de Medida (px, em, rem, %, vw, vh), Valores Relativos e Absolutos...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Cascata e Herança', 'cascataeherança', 'Prioridade de Estilos, Herança de Estilos...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estilização Avançada', 'estilizaçãoavançada', 'Transformações, Transições, Animações, Gradientes, Sombras, Tipografia...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Responsividade e Media Queries', 'responsividadeemediaqueries', 'Design Responsivo, Media Queries...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Frameworks e Pré-processadores', 'frameworksepré-processadores', 'Bootstrap, Sass, Less...', '4');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('O que é Modelagem de Dados?', 'oqueémodelagemdedados?', 'Modelagem de dados é o processo de criar uma representação estruturada e organizada...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Como são usados?', 'comosãousados?', 'Os modelos de dados são usados em diversas áreas, como desenvolvimento de software, análise de negócios, ciência de dados e engenharia de sistemas...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Modelos Básicos', 'modelosbásicos', 'Existem diferentes estilos básicos de modelagem de dados, sendo os mais comuns...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('EI (Entidade-Interação)', 'ei(entidade-interação)', 'É uma notação usada para representar entidades (objetos) e suas interações em um sistema...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Barker', 'barker', 'Essa notação é usada principalmente para modelar a estrutura de um banco de dados em um diagrama de entidade-relacionamento...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('IDEF1X', 'idef1x', 'É uma notação de modelagem de dados usada para projetar esquemas de banco de dados relacionais...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('UML (Unified Modeling Language)', 'uml(unifiedmodelinglanguage)', 'A UML é uma notação ampla e versátil usada para modelar sistemas de software e não apenas...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Normalização de Dados', 'normalizaçãodedados', 'A normalização é um processo vital para eliminar redundâncias e inconsistências nos dados...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Formas Normais', 'formasnormais', 'A normalização segue regras definidas, conhecidas como formas normais, que estruturam as tabelas de maneira ideal...', '5');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Introdução à Linguagem PHP', 'introduçãoàlinguagemphp', 'Uma introdução à linguagem de programação chamada PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Propósito e Uso Comum da Linguagem', 'propósitoeusocomumdalinguagem', 'O PHP (Hypertext Preprocessor) é uma linguagem de programação usada para criar páginas da web dinâmicas e interativas...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Variáveis e Tipos de Dados', 'variáveisetiposdedados', 'Em PHP, as variáveis são precedidas pelo símbolo $...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores e Expressões', 'operadoreseexpressões', 'PHP oferece uma variedade de operadores, como aritméticos (+, -, / e *)...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas de Controle (if, else, switch)', 'estruturasdecontrole(if,else,switch)', 'Como funciona as estruturas de controle e decisão em PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas de Repetição (for, while)', 'estruturasderepetição(for,while)', 'Como funciona as estruturas de repetição como For em PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funções', 'funções', 'Em PHP, funções são blocos de código reutilizáveis que realizam tarefas específicas...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Parâmetros e Valores de Retorno', 'parâmetrosevaloresderetorno', 'Funções podem aceitar parâmetros, que são valores passados para a função...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Manipulação de Strings', 'manipulaçãodestrings', 'PHP oferece várias funções para manipular strings...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Exemplo de Uso de Funções e Manipulação de Strings', 'exemplodeusodefunçõesemanipulaçãodestrings', 'Alguns exemplos da utilização das funções e da manipulação de Strings em código PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funções de Manipulação de Strings em PHP', 'funçõesdemanipulaçãodestringsemphp', 'PHP fornece várias funções internas para manipular strings, como strlen...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funções de Array', 'funçõesdearray', 'PHP oferece várias funções para trabalhar com arrays, como count...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Inclusão de Arquivos', 'inclusãodearquivos', 'Ambos include e require são usados para incluir arquivos em um script PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Autoloading de Classes', 'autoloadingdeclasses', 'No contexto da programação orientada a objetos em PHP, o autoloading de classes é uma técnica...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Orientação a Objetos em PHP', 'orientaçãoaobjetosemphp', 'Como é utilizada a programação orientada a objetos em PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Definição de Classes e Objetos', 'definiçãodeclasseseobjetos', 'A orientação a objetos é um paradigma de programação que organiza o código em torno de objetos...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Herança e Polimorfismo', 'herançaepolimorfismo', 'Herança é um conceito em que uma classe (subclasse) pode herdar propriedades e métodos de outra classe (superclasse)...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Métodos Mágicos', 'métodosmágicos', 'Os métodos mágicos em PHP são funções predefinidas em classes que são invocadas automaticamente em determinadas situações...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Conexão a Bancos de Dados', 'conexãoabancosdedados', 'PHP oferece suporte a vários sistemas de gerenciamento de banco de dados, como MySQL, PostgreSQL, SQLite, SQL Server e outros...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('SQL Injection e Prevenção', 'sqlinjectioneprevenção', 'SQL injection é uma vulnerabilidade de segurança que ocorre quando um atacante insere comandos SQL maliciosos em campos de entrada, explorando a falta de validação de dados...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Integração com a Web', 'integraçãocomaweb', 'PHP é comumente usado para criar páginas da web dinâmicas...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Frameworks PHP', 'frameworksphp', 'Alguns Framewors bastante utilizados na linguagem de PHP...', '6');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Introdução', 'introdução', 'SQL (Structured Query Language) é uma linguagem de programação usada para gerenciar e manipular bancos de dados relacionais...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Como Instalar?', 'comoinstalar?', 'O primeiro passo é instalar o WampServer, que é um pacote de software gratuito e de código aberto...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Configuração inicial do SQL', 'configuraçãoinicialdosql', 'A preparação inicial do SQL compreende uma série de procedimentos, como a instalação, a definição de uma senha para o usuário \"root\", a configuração do arquivo de configuração e o início do servidor...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Subconjuntos', 'subconjuntos', 'DQL, DML, DDL e muito mais...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Gerenciamento de Variáveis de Configuração e Estrutura de Tabelas no SQL', 'gerenciamentodevariáveisdeconfiguraçãoeestruturadetabelasnosql', 'Gerenciar SQL significa ajustar como o banco de dados funciona, envolvendo várias etapas...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Modelagem de Dados', 'modelagemdedados', 'A modelagem de dados é crucial e envolve planejar como os dados são organizados em tabelas...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estrutura de Tabelas no SQL', 'estruturadetabelasnosql', 'Ao criar uma tabela no SQL, considere vários elementos como: nome da tabela, definição de colunas e etc...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Chaves Primárias e Estrangeiras', 'chavesprimáriaseestrangeiras', 'A chave primária é uma coluna que identifica cada linha de forma única...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tipos de Dados Suportados pelo SQL', 'tiposdedadossuportadospelosql', 'O SQL suporta diversos tipos de dados para armazenar informações no banco de dados...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Consultas SQL', 'consultassql', 'Alguns comandos SQL básicos de consultas...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Consultas Avançadas em SQL', 'consultasavancadasemsql', 'Alguns operadores avançados sobre consultas...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores de Junção (JOINs)', 'operadoresdejunção(joins)', 'Operadores como Inner Join, Left Join, Right Join e etc...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Subconsultas', 'subconsultas', 'Comandos usados para diversos tipos de consulta...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Agrupamento', 'agrupamento', 'Usado para agrupar registros com base em valores comuns...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Funções de Agregação', 'funcõesdeagregação', 'Algumas funções relacionadas a agregação...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Restrição de Dados', 'restriçãodedados', 'Define restrições para controlar quais dados podem ser inseridos ou modificados em uma tabela...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Condições de Comparação e Lógicas', 'condiçõesdecomparaçãoelógicas', 'Usadas para filtrar dados com base em critérios específicos...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Cláusulas', 'cláusulas', 'Elementos que refinam uma consulta, como a cláusula WHERE para filtrar dados...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Insert Into', 'insertinto', 'Uma forma específica de inserir dados em uma tabela...', '7');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Java - Linguagem de Programação', 'java-linguagemdeprogramação', 'Java é uma linguagem de programação de alto nível amplamente utilizada para desenvolver aplicativos e sistemas de software...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Declaração de Variáveis em Java', 'declaraçãodevariáveisemjava', 'Explicando como funciona a declaração de váriaveis...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Tipos Primitivos em Java', 'tiposprimitivosemjava', 'Em Java, os tipos primitivos representam dados simples. Alguns dos tipos primitivos comuns incluem...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Declaração de Variáveis em Java', 'declaraçãodevariáveisemjava', 'Além dos tipos primitivos, Java permite a declaração de variáveis de objetos, que são instâncias de classes personalizadas ou da biblioteca padrão...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Entrada e Saída em Java', 'entradaesaídaemjava', 'Como funciona a entrada e saída em Java,  mostrando alguns elementos...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Manipulação de Strings em Java', 'manipulaçãodestringsemjava', 'As strings em Java são objetos da classe String, que oferece diversos métodos úteis para manipular e processar cadeias de caracteres...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores em Java', 'operadoresemjava', 'Alguns operadores utilizados na linguagem Java, como operadores aritméticos...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores Aritméticos', 'operadoresaritméticos', 'Java oferece operadores aritméticos para realizar cálculos...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores de Comparação', 'operadoresdecomparação', 'Operadores de comparação são usados para comparar valores...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores Lógicos', 'operadoreslógicos', 'Operadores lógicos são usados para avaliar expressões lógicas...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Operadores de Atribuição', 'operadoresdeatribuição', 'Operadores de atribuição são usados para atribuir valores a variáveis...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estruturas em Java', 'estruturasemjava', 'Mostrando algumas estruturas na linguagem Java...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Estrutura de Repetição', 'estruturaderepetição', 'As estruturas de repetição em Java, como o loop for, while e do-while, permitem a execução repetida de um bloco de código com base em uma condição...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Condições em Java', 'condiçõesemjava', 'As estruturas condicionais, como if, else, else if e switch-case, permitem que um programa tome decisões com base em condições específicas...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Matriz em Java', 'matrizemjava', 'Matrizes em Java são estruturas de dados que permitem armazenar coleções de elementos em uma grade bidimensional...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Arrays e Orientação a Objetos em Java', 'arrayseorientaçãoaobjetosemjava', 'Explicando como funciona os Arrays e a Programação Orientada a Objetos em Java...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Arrays em Java', 'arraysemjava', 'Arrays em Java permitem armazenar coleções de elementos do mesmo tipo em uma única dimensão...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Orientação a Objetos em Java', 'orientaçãoaobjetosemjava', 'A orientação a objetos em Java é um paradigma de programação em que os programas são construídos em torno de objetos, que são instâncias de classes...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Conclusão', 'conclusão', 'Estas são algumas das principais características de arrays e orientação a objetos em Java. Esses conceitos são fundamentais para desenvolver programas mais estruturados e reutilizáveis...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Orientação a Objetos em Java', 'orientaçãoaobjetosemjava', 'Mostrando como funciona a programação orientada a objetos em Java...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Instanciar uma Classe em Java', 'instanciarumaclasseemjava', 'Para instanciar uma classe em Java, utilize a palavra-chave <code>new</code> seguida pelo nome da classe e, se necessário, argumentos para o construtor...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Encapsulamento em Java', 'encapsulamentoemjava', 'O encapsulamento em Java envolve ocultar os detalhes internos de uma classe...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Herança em Java', 'herançaemjava', 'A herança permite criar novas classes com base em classes existentes...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Polimorfismo em Java', 'polimorfismoemjava', 'O polimorfismo permite tratar objetos de diferentes classes de maneira genérica...', '8');",
"INSERT INTO `devdossier`.`title` (`TITLE_REAL`, `TITLE_SEARCH`, `DESC_TITLE`, `COD_PAGE`) VALUES ('Classes Abstratas e Interfaces em Java', 'classesabstrataseinterfacesemjava', 'Classes abstratas e interfaces são fundamentais para definir contratos e promover o polimorfismo...', '8');"];

foreach ($sql_lines as $sql_line) {
    if ($conn->query($sql_line) === TRUE) {
    } else {
    }
}


$conn->close();
?>