<?php
/**
 * COMPONENTE: Card da galeria, com a foto do antes e a do depois lado a lado.
 * Recebe: $exemplo (um item de /dados/galeria.php)
 *
 * O card é um botão: ao ser clicado, o js/script.js lê os data-* abaixo e
 * carrega essas mesmas fotos no carrossel grande, que fica alternando entre
 * elas até o visitante escolher outro trabalho.
 */
?>
                <button type="button"
                        class="galeria-card bg-brandGrayCard rounded-xl overflow-hidden border border-gray-800 w-full text-left transition hover:border-brandRed/60 focus:outline-none focus:ring-2 focus:ring-brandRed"
                        data-galeria
                        data-titulo="<?= e($exemplo['titulo']) ?>"
                        data-antes="<?= e($exemplo['antes']) ?>"
                        data-antes-alt="<?= e($exemplo['antes_alt']) ?>"
                        data-antes-classe="<?= e($exemplo['classe_antes']) ?>"
                        data-depois="<?= e($exemplo['depois']) ?>"
                        data-depois-alt="<?= e($exemplo['depois_alt']) ?>">
                    <div class="grid grid-cols-2 gap-1 p-1 bg-black">
                        <div class="relative">
                            <img src="<?= e($exemplo['antes']) ?>" alt="<?= e($exemplo['antes_alt']) ?>" class="w-full h-36 object-cover <?= e($exemplo['classe_antes']) ?>">
                            <span class="absolute bottom-2 left-2 bg-brandRed text-white text-[10px] font-bold px-1.5 py-0.5 rounded">ANTES</span>
                        </div>
                        <div class="relative">
                            <img src="<?= e($exemplo['depois']) ?>" alt="<?= e($exemplo['depois_alt']) ?>" class="w-full h-36 object-cover">
                            <span class="absolute bottom-2 left-2 bg-green-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">DEPOIS</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="font-heading font-bold text-white text-base"><?= e($exemplo['titulo']) ?></h4>
                        <p class="text-gray-400 text-xs mt-1"><?= e($exemplo['descricao']) ?></p>
                        <span class="galeria-card-acao mt-3 inline-flex items-center gap-1 text-brandRed text-xs font-bold">
                            <i class="fa-solid fa-expand"></i> Ver no carrossel
                        </span>
                    </div>
                </button>
