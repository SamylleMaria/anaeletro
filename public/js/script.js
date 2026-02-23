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

// Lógica do Banner de Cookies (CORRIGIDA)
const cookieBanner = document.getElementById('cookie-banner');
const acceptBtn = document.getElementById('accept-cookies');

if (localStorage.getItem('cookiesAceitos')) {
    cookieBanner.style.display = 'none';
}

acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookiesAceitos', 'true');
    cookieBanner.style.display = 'none'; // Alterado de fadeOut para display none
});

// Menu Hambúrguer (CORRIGIDO)
function toggleMenu() {
    const nav = document.getElementById("nav-links");
    nav.classList.toggle("active");
}

// Fechar menu ao clicar em um link
document.querySelectorAll("#nav-links a").forEach(link => {
    link.addEventListener("click", () => {
        document.getElementById("nav-links").classList.remove("active");
    });
});