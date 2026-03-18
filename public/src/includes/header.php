<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?? 'AnaEletro' ?></title>
    <meta name="description" content="<?= $pageDescription ?? 'Equipamentos e soluções tecnológicas para casa e empresa.' ?>">
    <meta name="author" content="Samylle Maria">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon-branco.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:wght@400;600;800&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<header class="header">
    <div class="container nav">

        <a href="/index.php">
            <img class="logo" src="/img/logo-anaeletro.png" alt="Logo AnaEletro">
        </a>

        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <nav id="nav-links">
            <a href="/index.php#faq">Perguntas Frequentes</a>
            <a href="/index.php#footer-box">Contato</a>
            <a href="/produtos.php" class="btn-nav">Ver tudo</a>
        </nav>

    </div>
    <div class="categoriasProdutos">
        <ul class="listaCategorias">
            <li>
                <a href="produtos.php#lancamentos">Lançamentos</a>
            </li>
            <li>
                <a href="produtos.php#tecnologia">Tecnologia</a>
            </li>
            <li>
                <a href="produtos.php#cozinha-preparacao">Cozinha & Preparação</a>
            </li>
            <li>
                <a href="produtos.php#climatizacao">Climatização</a>
            </li>
            <li>
                <a href="produtos.php#utilidades-domesticas">Utilidades Domésticas</a>
            </li>
            <li>
                <a href="produtos.php#equipamentos-para-negocios">Equipamentos para Negócios</a>
            </li>
            <li>
                <a href="produtos.php#eletrodomesticos">Eletrodomésticos</a>
            </li>
        </ul>
    </div>
</header>