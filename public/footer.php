<footer class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <div class="container footer-grid">
        <div class="footer-box">
            <a href="/index.php"><img src="./img/logo-anaeletro.webp" alt="Logo AnaEletro" class="logo-footer"></a>
            <p class="legal-info">
                <strong>ANAELETRO COM DE ELETRODOMESTICOS LTDA</strong><br>
                CNPJ: 32.640.466/0001-48
            </p>
        </div>

        <div class="footer-box">
            <h4>Navegação</h4>
            <nav class="footer-nav">
                <a href="/#categorias">Categorias</a>
                <a href="/#faq">FAQ</a>
                <a href="/privacidade.php">Política de Privacidade</a>
            </nav>
        </div>

        <div class="footer-box">
            <h4>Fale Conosco</h4>
            <p style="margin-bottom: 15px;">E-mail: contato@anaeletro.com.br</p>
            <div class="social-links">
                <a href="https://www.instagram.com/anaeletro_/" title="Instagram">
                    <i class="fa-brands fa-instagram"></i> anaeletro_
                </a>
                <a href="http://wa.me/5511993808453" title="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i> +55 11 99380-8453
                </a>
            </div>
        </div>

        <div class="footer-box" id="footer-box">
            <h4>Pagamentos</h4>
            <div class="payment-methods">
                <div class="payment-item" style="display: flex; align-items: flex-start; margin-bottom: 12px; gap: 10px;">
                    <i data-lucide="credit-card" style="color: #01E2EE; flex-shrink: 0;"></i>
                    <p><strong>Mercado Pago:</strong> Cartão de Crédito, Débito e PIX</p>
                </div>
                <div class="payment-item" style="display: flex; align-items: flex-start; gap: 10px;">
                    <i data-lucide="shield-check" style="color: #01E2EE; flex-shrink: 0;"></i>
                    <a class="linkScb" href="https://www.scbcredito.com.br/"><img class="logoScb" src="./img/logo-scb-credito.webp" alt="logo SCB Crédito"><br>Exclusivo: Financiamento SCB Crédito</a>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>© <?php echo date("Y"); ?> ANAELETRO COM DE ELETRODOMESTICOS LTDA - Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<div id="cookie-banner" class="cookie-banner">
    <div class="container cookie-content">
        <p>Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com nossa <a href="/privacidade.php">Política de Privacidade</a>.</p>
        <button id="accept-cookies" class="btn-cookie">Aceitar</button>
    </div>
</div>

<script src="js/script.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
</body>
</html>