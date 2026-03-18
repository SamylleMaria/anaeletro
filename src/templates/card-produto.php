<div class="card-produto"> 
    <div class="img-container">
        <img src="img/produtos/<?= $produto['img']; ?>" 
                alt="<?= $produto['nome']; ?>"
                onerror="this.onerror=null; this.src='img/placeholder-produto.jpg';">
    </div>

    <div class="conteudo-produto">
        <h3><?= $produto['nome']; ?></h3>
        <p><?= $produto['desc']; ?></p>
        <a href="https://wa.me/5511993808453" class="btn-card">Consultar</a>
    </div>
</div>