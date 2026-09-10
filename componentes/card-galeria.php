<?php
/**
 * COMPONENTE: Card da galeria, com a foto do antes e a do depois lado a lado.
 * Recebe: $exemplo (um item de /dados/galeria.php)
 */
?>
                <div class="bg-brandGrayCard rounded-xl overflow-hidden border border-gray-800">
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
                    </div>
                </div>
