/* ==========================================================================
   Estoff Car - Scripts interativos
   ========================================================================== */

// Toggle Menu Mobile
const btn = document.getElementById('mobile-menu-btn');
const menu = document.getElementById('mobile-menu');

if (btn && menu) {
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
}

// Carrossel Antes/Depois - alterna as imagens a cada 3 segundos
const carrossel = document.getElementById('antes-depois-carousel');

if (carrossel) {
    const slides = carrossel.querySelectorAll('[data-slide]');
    const bolinhas = carrossel.querySelectorAll('[data-dot]');
    const INTERVALO = 3000; // 3 segundos

    let slideAtual = 0;
    let temporizador;

    const mostrarSlide = (indice) => {
        slideAtual = (indice + slides.length) % slides.length;
        slides.forEach((slide, i) => slide.classList.toggle('is-active', i === slideAtual));
        bolinhas.forEach((bolinha, i) => bolinha.classList.toggle('is-active', i === slideAtual));
    };

    const iniciarRotacao = () => {
        clearInterval(temporizador);
        temporizador = setInterval(() => mostrarSlide(slideAtual + 1), INTERVALO);
    };

    // Clique nas bolinhas salta para a imagem escolhida e reinicia a contagem
    bolinhas.forEach((bolinha, i) => {
        bolinha.addEventListener('click', () => {
            mostrarSlide(i);
            iniciarRotacao();
        });
    });

    // Arraste para os lados (mouse, toque e caneta) para trocar de imagem
    const LIMIAR = 60; // distância mínima em pixels para valer a troca

    let arrastando = false;
    let xInicial = 0;
    let deslocamento = 0;

    carrossel.addEventListener('pointerdown', (e) => {
        if (e.target.closest('[data-dot]')) return; // clique nas bolinhas não é arraste

        arrastando = true;
        xInicial = e.clientX;
        deslocamento = 0;

        clearInterval(temporizador);
        carrossel.classList.add('is-dragging');
        carrossel.setPointerCapture(e.pointerId);
    });

    carrossel.addEventListener('pointermove', (e) => {
        if (!arrastando) return;

        deslocamento = e.clientX - xInicial;
        // acompanha o dedo/mouse de forma suave, sem sair do lugar
        slides[slideAtual].style.transform = `translateX(${deslocamento * 0.4}px)`;
    });

    const finalizarArraste = () => {
        if (!arrastando) return;

        arrastando = false;
        carrossel.classList.remove('is-dragging');
        slides[slideAtual].style.transform = '';

        // arrastou para a esquerda avança, para a direita volta
        if (Math.abs(deslocamento) > LIMIAR) {
            mostrarSlide(slideAtual + (deslocamento < 0 ? 1 : -1));
        }

        deslocamento = 0;
        iniciarRotacao();
    };

    carrossel.addEventListener('pointerup', finalizarArraste);
    carrossel.addEventListener('pointercancel', finalizarArraste);

    // Pausa enquanto o visitante está com o mouse sobre a imagem
    carrossel.addEventListener('mouseenter', () => clearInterval(temporizador));
    carrossel.addEventListener('mouseleave', () => {
        if (!arrastando) iniciarRotacao();
    });

    iniciarRotacao();
}

// Envio do formulário direto para o WhatsApp
// O número e o nome do responsável vêm do próprio formulário (data-whatsapp
// e data-responsavel), que o PHP preenche a partir de /dados/site.php.
const formulario = document.getElementById('whatsapp-form');

if (formulario) {
    formulario.addEventListener('submit', function (e) {
        e.preventDefault();

        const numero = formulario.dataset.whatsapp || '5541999757153';
        const responsavel = formulario.dataset.responsavel || 'Danilo';

        const nome = document.getElementById('nome').value;
        const modelo = document.getElementById('modelo').value;
        const servico = document.getElementById('servico').value;
        const mensagem = document.getElementById('mensagem').value;

        const texto = `Olá ${responsavel}! Me chamo *${nome}*.\n*Carro:* ${modelo}\n*Serviço:* ${servico}\n*Detalhes:* ${mensagem}`;

        window.open(`https://wa.me/${numero}?text=${encodeURIComponent(texto)}`, '_blank');
    });
}
