<?php
    require_once __DIR__ . '/src/functions/helpers.php';
    $pageTitle = "Produtos | AnaEletro";
    $pageDescription = "Explore o catálogo completo de equipamentos para casa e empresa.";
    $categorias = require __DIR__ . '/src/data/categoria-produtos.php';
    require_once __DIR__ . '/src/includes/header.php';
?>

<link rel="stylesheet" href="/css/produtos.css">
<header class="headerProdutos"></header>

<body>
<main class="produtos-page">
    <div class="container">

        <header class="secao-header">
            <h1>Catálogo de Equipamentos</h1>
            <p>Encontre a tecnologia certa para sua casa ou empresa.</p>
        </header>

        <?php foreach ($categorias as $titulo => $produtos): ?>
            <?php $id = criarId($titulo); ?>

            <section id="<​?= $id ?>" class="categoria">

                <div class="categoria-header">
                    <h2><?= htmlspecialchars($titulo) ?></h2>
                    <div class="linha-design"></div>
                </div>

                <div class="grid-produtos">
                    <?php foreach ($produtos as $produto): ?>
                        <?php include __DIR__ . '/src/templates/card-produto.php'; ?>
                    <?php endforeach; ?>
                </div>

            </section>

        <?php endforeach; ?>

    </div>
</main>

<section class="pagamento-info">
    <div class="container">
        <div class="secao-header">
            <h2>Pagamento Facilitado</h2>
        </div>
        <div class="pagamento-grid">
            <div class="pagamento-box box-pf">
                <div class="icon-circle"><i data-lucide="credit-card" style="color: #212121;"></i></div>
                <div>
                    <h4>Pessoa Física</h4>
                    <p>Via <strong>Mercado Pago</strong>: Cartão de crédito, débito ou PIX.</p>
                </div>
            </div>
            <div class="pagamento-box box-pj">
                <div class="icon-circle"><i data-lucide="building-2" style="color: #212121;"></i></div>
                <div>
                    <h4>Pessoa Jurídica</h4>
                    <p>Financiamento exclusivo para clientes <strong>SCB Crédito.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/src/includes/footer.php'; ?>
<script>lucide.createIcons();</script>
</body>
</html>