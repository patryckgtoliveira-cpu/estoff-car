/* ==========================================================================
   Estoff Car - Scripts interativos
   ========================================================================== */

// Toggle Menu Mobile
const btn = document.getElementById('mobile-menu-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

// Comparador Antes/Depois interativo
const container = document.getElementById('interactive-slider');
const beforeImg = document.getElementById('before-img');
const handle = document.getElementById('slider-handle');

let isDown = false;

const moveSlider = (x) => {
    const rect = container.getBoundingClientRect();
    let position = x - rect.left;

    if (position < 0) position = 0;
    if (position > rect.width) position = rect.width;

    const percentage = (position / rect.width) * 100;
    beforeImg.style.width = `${percentage}%`;
    handle.style.left = `${percentage}%`;
};

container.addEventListener('mousedown', () => isDown = true);
window.addEventListener('mouseup', () => isDown = false);
container.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    moveSlider(e.clientX);
});

// Suporte a toque no mobile
container.addEventListener('touchstart', () => isDown = true);
window.addEventListener('touchend', () => isDown = false);
container.addEventListener('touchmove', (e) => {
    if (!isDown) return;
    moveSlider(e.touches[0].clientX);
});

// Envio do formulário direto para o WhatsApp
document.getElementById('whatsapp-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const nome = document.getElementById('nome').value;
    const modelo = document.getElementById('modelo').value;
    const servico = document.getElementById('servico').value;
    const mensagem = document.getElementById('mensagem').value;

    const textoWhatsApp = `Olá Danilo! Me chamo *${nome}*.%0A*Carro:* ${modelo}%0A*Serviço:* ${servico}%0A*Detalhes:* ${mensagem}`;
    window.open(`https://wa.me/5541999757153?text=${textoWhatsApp}`, '_blank');
});
