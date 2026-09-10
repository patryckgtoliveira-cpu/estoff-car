<?php
/**
 * COMPONENTE: Faixa com os três diferenciais da oficina.
 * Os textos ficam em /dados/diferenciais.php
 */

$diferenciais = dados('diferenciais');
?>
    <!-- DIFERENCIAIS / BANNERS RÁPIDOS -->
    <section class="bg-brandDark py-8 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <?php foreach ($diferenciais as $item): ?>
                    <div class="bg-brandGrayCard p-6 rounded-xl border-l-4 border-brandRed flex items-center space-x-4">
                        <div class="text-brandRed text-3xl"><i class="<?= e($item['icone']) ?>"></i></div>
                        <div>
                            <h3 class="font-heading font-bold text-white text-lg"><?= e($item['titulo']) ?></h3>
                            <p class="text-sm text-gray-400"><?= e($item['texto']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
