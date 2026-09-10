<?php
/**
 * COMPONENTE: Rodapé do site.
 */
?>
    <!-- RODAPÉ -->
    <footer class="bg-black text-gray-400 py-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>
                <p class="font-heading font-black text-xl italic text-white">
                    <span class="text-brandRed">ESTOFF</span> CAR
                </p>
                <p class="text-xs text-gray-500 mt-1"><?= e(site('endereco')) ?> &bull; <?= e(site('cidade')) ?></p>
            </div>

            <?php componente('redes-sociais', ['variante' => 'rodape']); ?>

            <p class="text-xs text-gray-600">
                &copy; <?= date('Y') ?> <?= e(site('nome')) ?>. Todos os direitos reservados. Responsável: <?= e(site('responsavel')) ?>.
            </p>
        </div>
    </footer>
