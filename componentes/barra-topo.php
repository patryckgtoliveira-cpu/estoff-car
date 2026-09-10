<?php
/**
 * COMPONENTE: Barra fina no topo, com endereço, responsável e telefone.
 */
?>
    <!-- BARRA SUPERIOR DE INFORMAÇÕES E CONTATO -->
    <div class="bg-black text-gray-300 py-2 px-4 border-b border-gray-800 text-sm">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center space-x-4 text-xs md:text-sm">
                <a href="<?= e(maps()) ?>" target="_blank" rel="noopener noreferrer"
                   title="Ver como chegar no Google Maps"
                   class="hover:text-brandRed transition underline-offset-2 hover:underline">
                    <i class="fa-solid fa-location-dot text-brandRed mr-1"></i> <?= e(site('endereco')) ?>
                </a>
                <span><i class="fa-solid fa-user text-brandRed mr-1"></i> Contato: <strong><?= e(site('responsavel')) ?></strong></span>
            </div>
            <div class="flex items-center space-x-4 text-xs md:text-sm">
                <a href="tel:<?= e(site('telefone_link')) ?>" class="hover:text-brandRed transition flex items-center">
                    <i class="fa-solid fa-phone text-brandRed mr-1"></i> <?= e(site('telefone')) ?>
                </a>
                <span class="hidden md:inline">|</span>
                <span class="text-green-500 font-semibold"><i class="fa-brands fa-whatsapp text-lg mr-1"></i> Atendimento Rápido</span>
            </div>
        </div>
    </div>
