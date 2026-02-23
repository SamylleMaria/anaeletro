<!-- HERO -->
<section class="hero">
    <?php include 'header.php'; ?>
    <div class="container hero-content">
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


<!-- CATEGORIAS -->
<section id="categorias" class="categorias">
    <div class="container">
        <div class="solucoes">
            <div class="secao-header">
                <h2>Soluções em Tecnologia</h2>
                <p>Linhas selecionadas para diferentes perfis, com orientação especializada e condições facilitadas.</p>
                
            </div>

<div class="section-divider"></div>
        </div>

        <div class="grid-categorias">

            <?php
$categorias = [
    ["Smartphones", "Potência e câmeras de última geração para quem não para.", "img/smartphone-premium.webp"],
    ["Notebooks", "Performance de desktop com a mobilidade que sua rotina exige.", "img/notebook-produtividade.webp"],
    ["Caixas de Som", "Experiência sonora imersiva com graves profundos e design premium.", "img/caixa-som-audio.webp"],
    ["Smart TVs", "O cinema na sua sala com cores vibrantes e inteligência artificial.", "img/smart-tv-4k.webp"],
    ["Tablets", "Criatividade e produtividade sem limites na palma da sua mão.", "img/tablet-criativo.webp"],
    ["Consoles & Games", "Desempenho extremo para os jogadores mais exigentes do mercado.", "img/games-console.webp"],
];

foreach ($categorias as $categoria) {
    echo "
    <div class='card-categoria'>
        <div class='card-img'>
            <img src='{$categoria[2]}' alt='{$categoria[0]}'>
        </div>
        <div class='card-content'>
            <h3>{$categoria[0]}</h3>
            <p>{$categoria[1]}</p>
            <a href='#comprar' class='btn-secundario'>Explorar</a>
        </div>
    </div>
    ";
}
?>

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
                <p>Exclusivo para clientes SCB. O sistema utiliza seu limite pré-aprovado, permitindo parcelamentos que não ocupam o limite do seu cartão de crédito.</p>
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

    </div>
</section>

<section class="cta-final">
    <div class="cta-container">
        <h2>Pronto para elevar sua experiência em tecnologia?</h2>
        <p>
            Descubra produtos selecionados, condições facilitadas e atendimento especializado 
            para você fazer a escolha certa com segurança e confiança.
        </p>
        <a href="#contato" class="btn-principal">Quero falar com um especialista</a>
    </div>
</section>


<?php include 'footer.php'; ?>