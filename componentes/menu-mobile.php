<?php
/**
 * COMPONENTE: Menu que abre no celular ao tocar no botão de três linhas.
 * Recebe: $menu (array de links vindo do cabeçalho)
 */

$menu = $menu ?? dados('menu');
?>
        <div id="mobile-menu" class="hidden lg:hidden bg-brandGrayDark border-b border-gray-800 px-4 pt-2 pb-6 space-y-4">
            <?php foreach ($menu as $item): ?>
                <a href="<?= e($item['href']) ?>" class="block py-2 font-heading font-semibold hover:text-brandRed border-b border-gray-800">
                    <?= e($item['texto']) ?>
                </a>
            <?php endforeach; ?>

            <div class="flex items-center space-x-4 pt-2">
                <a href="<?= e(whatsapp()) ?>" target="_blank" rel="noopener noreferrer" class="flex-1 bg-green-600 hover:bg-green-500 text-white py-2.5 rounded-lg font-bold text-center flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-xl"></i> WhatsApp
                </a>
                <a href="<?= e(site('instagram')) ?>" target="_blank" rel="noopener noreferrer" class="p-2.5 bg-brandGrayCard rounded-lg text-white hover:text-brandRed" aria-label="Instagram <?= e(site('nome')) ?>">
                    <i class="fa-brands fa-instagram text-xl"></i>
                </a>
                <a href="<?= e(site('facebook')) ?>" target="_blank" rel="noopener noreferrer" class="p-2.5 bg-brandGrayCard rounded-lg text-white hover:text-blue-500" aria-label="Facebook <?= e(site('nome')) ?>">
                    <i class="fa-brands fa-facebook-f text-xl"></i>
                </a>
            </div>
        </div>
