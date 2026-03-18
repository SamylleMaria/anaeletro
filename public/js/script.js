// FAQ Accordion
document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        answer.style.maxHeight
            ? answer.style.maxHeight = null
            : answer.style.maxHeight = answer.scrollHeight + "px";
        button.parentElement.classList.toggle("active");
    });
});

// Banner de Cookies
const cookieBanner = document.getElementById('cookie-banner');
const acceptBtn = document.getElementById('accept-cookies');

if (cookieBanner && localStorage.getItem('cookiesAceitos')) {
    cookieBanner.style.display = 'none';
}

if (acceptBtn) {
    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAceitos', 'true');
        if (cookieBanner) cookieBanner.style.display = 'none';
    });
}

// Menu Hambúrguer
function toggleMenu() {
    const nav = document.getElementById("nav-links");
    if (nav) nav.classList.toggle("active");
}

document.querySelectorAll("#nav-links a").forEach(link => {
    link.addEventListener("click", () => {
        document.getElementById("nav-links")?.classList.remove("active");
    });
});

// ===== CARROSSEL =====
// ===== CARROSSEL CORRIGIDO =====
const track = document.querySelector(".carousel-track");
const items = document.querySelectorAll(".carousel-item");

if (track && items.length > 0) {
    let index = 0; // Começar no 0 é o padrão para evitar saltos

    function updateCarousel() {
        const itemWidth = items[0].offsetWidth; // Pega a largura real atual
        
        // Remove active de todos e adiciona no atual
        items.forEach(item => item.classList.remove("active"));
        if(items[index]) items[index].classList.add("active");

        // Cálculo simples: posição * largura. 
        // Se for desktop e tiver gap, o CSS abaixo resolve.
        track.style.transform = `translateX(-${index * itemWidth}px)`;
    }

    function nextSlide() {
        index++;
        if (index >= items.length) {
            index = 0; // Volta para o primeiro
        }
        updateCarousel();
    }

    // Ajusta se a tela mudar de tamanho (rotação de celular)
    window.addEventListener('resize', updateCarousel);
    
    updateCarousel();
    setInterval(nextSlide, 3000);
}