<?php
/**
 * COMPONENTE: Seção "Antes & Depois" = carrossel automático + galeria de exemplos.
 * Imagens do carrossel: /dados/carrossel.php   |   Galeria: /dados/galeria.php
 */

$slides  = dados('carrossel');
$galeria = dados('galeria');
?>
    <!-- SEÇÃO ANTES E DEPOIS (CARROSSEL + GALERIA) -->
    <section id="antes-depois" class="py-16 bg-brandDark border-t border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php componente('titulo-secao', [
                'chapeu'    => 'Comprovação de Qualidade',
                'titulo'    => 'Trabalhos: Antes & Depois',
                'subtitulo' => 'Veja a transformação feita pela ' . site('nome') . ': as imagens do antes e do depois se alternam sozinhas.',
            ]); ?>

            <!-- CARROSSEL ANTES / DEPOIS (TROCA AUTOMÁTICA A CADA 5 SEGUNDOS) -->
            <div class="max-w-4xl mx-auto mb-12 text-center">
                <div class="carousel rounded-2xl overflow-hidden shadow-2xl border-2 border-brandRed/30" id="antes-depois-carousel">

                    <?php foreach ($slides as $indice => $slide): ?>
                        <div class="carousel-slide<?= $indice === 0 ? ' is-active' : '' ?>" data-slide data-papel="<?= e($slide['papel']) ?>">
                            <img src="<?= e($slide['imagem']) ?>" alt="<?= e($slide['alt']) ?>" class="w-full h-full object-contain">
                            <span class="absolute top-4 left-4 <?= e($slide['cor']) ?> text-white text-xs font-bold px-3 py-1 rounded-md shadow"><?= e($slide['tag']) ?></span>
                        </div>
                    <?php endforeach; ?>

                    <!-- INDICADORES (uma bolinha para cada imagem) -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20">
                        <?php foreach ($slides as $indice => $slide): ?>
                            <button type="button" class="carousel-dot<?= $indice === 0 ? ' is-active' : '' ?>" data-dot aria-label="Ver a imagem: <?= e($slide['tag']) ?>"></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <p class="text-center text-xs text-gray-500 mt-2">
                    <i class="fa-solid fa-hand-pointer mr-1"></i>
                    <span id="carrossel-legenda">Arraste para os lados ou aguarde: as imagens alternam a cada 3 segundos</span>
                </p>
            </div>

            <!-- GALERIA ADICIONAL DE EXEMPLOS (clicaveis: trocam as fotos do carrossel) -->
            <p class="text-center text-xs text-gray-400 mb-4">
                <i class="fa-solid fa-arrow-pointer text-brandRed mr-1"></i>
                Clique em um trabalho abaixo para vê-lo em tamanho grande no carrossel
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($galeria as $exemplo): ?>
                    <?php componente('card-galeria', ['exemplo' => $exemplo]); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
