<?php
    $pageTitle = "AnaEletro | Equipamentos para sua casa e seu negócio";
    $pageDescription = "Catálogo de equipamentos domésticos e comerciais com soluções práticas, eficientes e confiáveis.";
    include __DIR__ . '/src/includes/header.php';
    $categorias = require __DIR__. '/src/data/categorias.php';
?>

<!-- HERO -->
<section class="hero">
    <div class="container hero-content">
        <div class="hero-mobile-img">
            <img src="./img/hero-mobile-anaeletro.jpg" alt="AnaEletro Hero">
        </div>
        <div class="hero-text">
            <h1>Tecnologia que acompanha o seu ritmo.</h1>
            <p>
                Escolha sua categoria e receba orientação especializada
                para encontrar o produto ideal com segurança e confiança.
            </p>
            <a href="#categorias" class="btn-primary">Explorar Categorias</a>
        </div>
    </div>

    <!-- BLOCO SUSPENSO CLEAN -->
    <div class="vantagens-flutuante">
        <div class="container vantagens-linha">

            <div class="vantagem">
                ⚡ Atendimento Especializado
            </div>

            <div class="separador"></div>

            <div class="vantagem">
                🔒 Compra 100% Segura
            </div>

            <div class="separador"></div>

            <div class="vantagem">
                💳 Financiamento SCB Crédito
            </div>

            <div class="separador"></div>

            <div class="vantagem">
                🚀 Processo Ágil
            </div>

        </div>
    </div>
</section>
<!--VITRINE-->
<section class="vitrine">
    <div class="container">

        <div class="vitrine-header">
            <h2>Conheça nossas categorias</h2>
            <p>Tecnologia e equipamentos para casa e negócio.</p>
        </div>

        <div class="carousel">
            <div class="carousel-track">

                <div class="carousel-item">
                    <img src="img/produtos/air-fryer-anaeletro.jpg">
                    <h3>Air Fryer</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/micro-ondas-anaeletro.jpg">
                    <h3>Micro-ondas</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/liquidificadores-anaeletro.jpg">
                    <h3>Liquidificadores</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/ventiladores-anaeletro.jpg">
                    <h3>Ventiladores</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/ar-condicionado-portatil-anaeletro.jpg">
                    <h3>Ar-condicionado Portátil</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/freezers-horizontais-anaeletro.jpg">
                    <h3>Freezers Horizontais</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/fogoes-anaeletro.jpg">
                    <h3>Fogões</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/smartphones-anaeletro.jpg">
                    <h3>Smartphones</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/notebooks-anaeletro.jpg">
                    <h3>Notebooks</h3>
                </div>

                <div class="carousel-item">
                    <img src="img/produtos/smart-tvs-anaeletro.jpg">
                    <h3>Smart TVs</h3>
                </div>

            </div>
        </div>

        <div class="div-btn-vitrine">
            <a class="btn-vitrine" href="/produtos.php">Ver catálogo</a>
        </div>

    </div>
</section>

<!-- PRODUTOS -->
<section id="categorias" class="categorias">
    <div class="container">
        <div class="solucoes">
            <div class="secao-header">
                <h2>Equipamentos para Casa e Entretenimento</h2>
                <p>Tecnologia, conforto e praticidade com produtos selecionados para o seu dia a dia.</p>
            </div>

            <div class="section-divider"></div>
        </div>

        <div class="grid-categorias">



        <?php foreach ($categorias as [$nome, $descricao, $img]): ?>
            <?php include __DIR__ . '/src/templates/card-categoria.php'; ?>
        <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- DIRECIONAMENTO SCB -->
<section class="scb-info">
    <div class="container">
        <div class="scb-card">
            <div class="scb-icon">
                <i data-lucide="shield-check"></i>
            </div>
            <div class="scb-text">
                <p>É cliente <strong>SCB Crédito</strong>? Você pode financiar sua compra diretamente com eles e aproveitar condições exclusivas de parcelamento.</p>
            </div>
            <a href="https://www.scbcredito.com.br/" target="_blank" class="btn-scb-link">Saber mais<i data-lucide="chevron-right"></i></a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="faq">
    <div class="container faqContainer">
        <h2>Dúvidas Frequentes</h2>

        <div class="faq-item">
            <button class="faq-question">Como funciona a curadoria e orientação especializada?</button>
            <div class="faq-answer">
                <p>Diferente de um marketplace comum, na Anaeletro você não compra sozinho. Após selecionar seu interesse, um especialista analisa sua necessidade e indica o modelo com o melhor custo-benefício.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Quais as garantias de segurança no pagamento?</button>
            <div class="faq-answer">
                <p>Utilizamos o Mercado Pago para que seus dados fiquem protegidos. Você conta com a Compra Garantida: o valor só é liberado após a confirmação da entrega do seu produto.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Como funciona o Financiamento SCB Crédito?</button>
            <div class="faq-answer">
                <p>A compra parcelada é exclusiva para comerciantes que são clientes da SCB Crédito. O sistema utiliza seu limite pré-aprovado, permitindo parcelamentos que não ocupam o limite do seu cartão de crédito.</p>
                <a href="https://www.scbcredito.com.br/"> <img class="logoScbFAQ"  src="./img/logo-scb-credito.png"  width="253" height="67" alt="Logo SCB Crédito"> </a>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Não sou cliente da SCB Crédito. Posso comprar?</button>
            <div class="faq-answer">
                <p>Sim. Caso não seja cliente SCB Crédito, a compra poderá ser realizada via Mercado Pago.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Os produtos possuem garantia oficial?</button>
            <div class="faq-answer">
                <p>Sim. Todos os produtos são novos, lacrados e acompanham nota fiscal eletrônica, garantindo suporte direto com o fabricante em todo o território nacional.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Qual o prazo de entrega e como rastrear?</button>
            <div class="faq-answer">
                <p>Priorizamos o envio ágil. Após a postagem, enviamos o código de rastreio automaticamente para seu WhatsApp ou e-mail para acompanhamento em tempo real.</p>
            </div>
        </div>

        
        <div class="faq-item">
            <button class="faq-question">Como faço para comprar?</button>
            <div class="faq-answer">
                <p>As compras são realizadas diretamente pelo WhatsApp.</p>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-final">
    <div class="cta-container">
        <h2>Pronto para elevar sua experiência em tecnologia?</h2>
        <p>
            Descubra produtos selecionados, condições facilitadas e atendimento especializado 
            para você fazer a escolha certa com segurança e confiança.
        </p>
        <a href="http://wa.me/5511993808453" class="btn-principal">Quero falar com um especialista</a>
    </div>
</section>

<?php include __DIR__ . '/src/includes/footer.php'; ?>