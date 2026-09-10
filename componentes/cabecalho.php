<?php
/**
 * COMPONENTE: Cabeçalho fixo (logo + menu do computador + menu do celular).
 * Os links vêm de /dados/menu.php e servem para os dois menus.
 */

$menu = dados('menu');
?>
    <!-- CABEÇALHO PRINCIPAL (NAVEGAÇÃO À DIREITA) -->
    <header class="sticky top-0 bg-brandDark/95 backdrop-blur-md border-b border-gray-800 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex justify-between items-center">

            <!-- LOGO / NOME -->
            <a href="#" class="flex items-center group focus:outline-none focus:ring-2 focus:ring-brandRed rounded-lg p-1">
                <div class="font-heading font-black text-2xl sm:text-3xl italic tracking-wider">
                    <span class="text-brandRed">ESTOFF</span>
                    <span class="text-white bg-brandRed px-2 py-0.5 rounded-md ml-1 not-italic">CAR</span>
                </div>
            </a>

            <!-- NAVEGAÇÃO À DIREITA (DESKTOP) -->
            <nav class="hidden lg:flex items-center space-x-8">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wide uppercase font-heading">
                    <?php foreach ($menu as $item): ?>
                        <li>
                            <a href="<?= e($item['href']) ?>" class="hover:text-brandRed transition py-2 border-b-2 border-transparent hover:border-brandRed">
                                <?= e($item['texto']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- REDES SOCIAIS E WHATSAPP À DIREITA -->
                <?php componente('redes-sociais', ['variante' => 'cabecalho']); ?>
            </nav>

            <!-- BOTÃO MENU MOBILE -->
            <button id="mobile-menu-btn" class="lg:hidden text-gray-300 hover:text-white p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed" aria-label="Abrir menu">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- MENU MOBILE DROPDOWN -->
        <?php componente('menu-mobile', ['menu' => $menu]); ?>
    </header>
