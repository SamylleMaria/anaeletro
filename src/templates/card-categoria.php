<div class="card-categoria">
    <div class="card-img">
        <div class="selo-novo">NOVO</div>
        <img src="img/produtos/<?= htmlspecialchars($img) ?>" alt="<​?= htmlspecialchars($nome) ?>">
    </div>
    <div class="card-content">
        <h3><?= htmlspecialchars($nome) ?></h3>
        <p><?= htmlspecialchars($descricao) ?></p>
        <a href="/produtos.php" class="btn-secundario">Saiba Mais</a>
    </div>
</div>