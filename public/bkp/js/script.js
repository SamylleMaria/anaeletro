document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        answer.style.maxHeight
            ? answer.style.maxHeight = null
            : answer.style.maxHeight = answer.scrollHeight + "px";
    });
});

const carrossel = document.querySelector(".carrossel");
const cards = document.querySelectorAll(".card-categoria");

let index = 0;

function updateCarrossel() {

    cards.forEach(card => card.classList.remove("active"));

    const centerIndex = index % cards.length;
    cards[centerIndex].classList.add("active");

    const offset = (cards[0].offsetWidth + 40) * centerIndex;
    carrossel.style.transform = `translateX(calc(50% - ${offset}px - 140px))`;
}

function autoSlide() {
    index++;
    updateCarrossel();
}

updateCarrossel();
setInterval(autoSlide, 3000);

// Lógica do Banner de Cookies
const cookieBanner = document.getElementById('cookie-banner');
const acceptBtn = document.getElementById('accept-cookies');

// Verifica se já aceitou antes
if (localStorage.getItem('cookiesAceitos')) {
    cookieBanner.style.display = 'none';
}

acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookiesAceitos', 'true');
    cookieBanner.style.fadeOut(); // Opcional: animação de saída
    cookieBanner.style.display = 'none';
});

const menuIcon = document.querySelector(".mobile-menu-icon");
const navMenu = document.querySelector(".nav-menu");

menuIcon.addEventListener("click", () => {
    navMenu.classList.toggle("active");
    // Animação das barrinhas (opcional)
    menuIcon.classList.toggle("open");
});

// Fechar menu ao clicar em um link
document.querySelectorAll(".nav-menu a").forEach(link => {
    link.addEventListener("click", () => {
        navMenu.classList.remove("active");
    });
});