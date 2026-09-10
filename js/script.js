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

    // ----------------------------------------------------------------------
    // Cards da galeria: ao clicar em um trabalho, as fotos dele entram no
    // carrossel e ficam alternando ali até o visitante escolher outro.
    // ----------------------------------------------------------------------
    const cards = document.querySelectorAll('[data-galeria]');
    const legenda = document.getElementById('carrossel-legenda');
    const CLASSE_BASE = 'w-full h-full object-contain';

    // Guarda as fotos originais para poder voltar a elas ao clicar de novo
    // no mesmo card (funciona como um "desfazer").
    const original = {};
    slides.forEach((slide) => {
        const img = slide.querySelector('img');
        original[slide.dataset.papel] = {
            src: img.getAttribute('src'),
            alt: img.getAttribute('alt'),
            classe: img.className
        };
    });

    const legendaPadrao = legenda ? legenda.textContent : '';

    // Mede a foto do "antes" e informa a proporcao dela ao CSS, pela variavel
    // --proporcao. O CSS mantem a ALTURA fixa e calcula a largura a partir
    // dessa proporcao, entao a imagem encaixa exata: nao corta nem sobra fundo.
    const ajustarAspecto = () => {
        const slideAntes = carrossel.querySelector('[data-papel="antes"]') || slides[0];
        if (!slideAntes) return;

        const img = slideAntes.querySelector('img');
        if (!img) return;

        const aplicar = () => {
            if (img.naturalWidth && img.naturalHeight) {
                const proporcao = img.naturalWidth / img.naturalHeight;
                carrossel.style.setProperty('--proporcao', proporcao.toFixed(4));
            }
        };

        // Se a foto ja terminou de carregar, mede na hora; senao, espera o load
        if (img.complete) {
            aplicar();
        } else {
            img.addEventListener('load', aplicar, { once: true });
        }
    };

    // Troca a foto de um dos slides (o do 'antes' ou o do 'depois')
    const trocarFoto = (papel, src, alt, classeExtra) => {
        const slide = carrossel.querySelector(`[data-papel="${papel}"]`);
        if (!slide) return;

        const img = slide.querySelector('img');
        img.setAttribute('src', src);
        img.setAttribute('alt', alt);
        img.className = classeExtra ? `${CLASSE_BASE} ${classeExtra}` : CLASSE_BASE;
    };

    const voltarAoOriginal = () => {
        Object.keys(original).forEach((papel) => {
            const foto = original[papel];
            const slide = carrossel.querySelector(`[data-papel="${papel}"]`);
            if (!slide) return;

            const img = slide.querySelector('img');
            img.setAttribute('src', foto.src);
            img.setAttribute('alt', foto.alt);
            img.className = foto.classe;
        });

        if (legenda) legenda.textContent = legendaPadrao;

        ajustarAspecto();
    };

    cards.forEach((card) => {
        card.addEventListener('click', () => {
            const jaSelecionado = card.classList.contains('is-selecionado');

            // Tira o destaque de todos os cards
            cards.forEach((outro) => outro.classList.remove('is-selecionado'));

            if (jaSelecionado) {
                // Clicou no card que já estava aberto: volta às fotos originais
                voltarAoOriginal();
            } else {
                card.classList.add('is-selecionado');

                trocarFoto('antes', card.dataset.antes, card.dataset.antesAlt, card.dataset.antesClasse);
                trocarFoto('depois', card.dataset.depois, card.dataset.depoisAlt, '');
                ajustarAspecto();

                if (legenda) {
                    legenda.textContent = `${card.dataset.titulo} — arraste para os lados ou aguarde a troca`;
                }
            }

            // Começa sempre pela foto do "antes" e reinicia a contagem
            mostrarSlide(0);
            iniciarRotacao();

            // Leva a tela até o carrossel, que fica acima da galeria
            carrossel.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });

    ajustarAspecto();
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
