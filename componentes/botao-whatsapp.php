<?php
/**
 * COMPONENTE: Botão verde flutuante do WhatsApp (canto inferior direito).
 */
?>
    <a href="<?= e(whatsapp('Olá ' . site('responsavel') . ', vi o site da ' . site('nome') . ' e gostaria de um orçamento!')) ?>"
       target="_blank" rel="noopener noreferrer" aria-label="Contato direto pelo WhatsApp"
       class="fixed bottom-6 right-6 bg-green-600 hover:bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl z-50 hover:scale-110 transition duration-300">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>
