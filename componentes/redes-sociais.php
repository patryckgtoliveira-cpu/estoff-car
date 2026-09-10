<?php
/**
 * COMPONENTE: Botões de redes sociais (WhatsApp, Instagram, Facebook)
 *
 * Usado em três lugares com aparências diferentes. Escolha pelo $variante:
 *
 *   componente('redes-sociais', ['variante' => 'cabecalho'])  -> bolinhas no topo
 *   componente('redes-sociais', ['variante' => 'contato'])    -> botões com texto
 *   componente('redes-sociais', ['variante' => 'rodape'])     -> só os ícones
 */

$variante = $variante ?? 'cabecalho';

$redes = [
    [
        'nome'  => 'WhatsApp',
        'url'   => whatsapp(),
        'icone' => 'fa-brands fa-whatsapp',
        'cor'   => 'bg-green-600 hover:bg-green-500',
    ],
    [
        'nome'  => 'Instagram',
        'url'   => site('instagram'),
        'icone' => 'fa-brands fa-instagram',
        'cor'   => 'bg-brandGrayCard hover:bg-brandRed',
    ],
    [
        'nome'  => 'Facebook',
        'url'   => site('facebook'),
        'icone' => 'fa-brands fa-facebook-f',
        'cor'   => 'bg-brandGrayCard hover:bg-blue-600',
    ],
];
?>

<?php if ($variante === 'cabecalho'): ?>

    <div class="flex items-center space-x-3 pl-4 border-l border-gray-800">
        <?php foreach ($redes as $rede): ?>
            <a href="<?= e($rede['url']) ?>" target="_blank" rel="noopener noreferrer"
               aria-label="<?= e($rede['nome'] . ' ' . site('nome')) ?>"
               class="w-10 h-10 rounded-full <?= e($rede['cor']) ?> text-white flex items-center justify-center transition shadow-lg hover:scale-105">
                <i class="<?= e($rede['icone']) ?> text-lg"></i>
            </a>
        <?php endforeach; ?>
    </div>

<?php elseif ($variante === 'contato'): ?>

    <div class="flex space-x-3">
        <?php foreach ($redes as $rede): ?>
            <a href="<?= e($rede['url']) ?>" target="_blank" rel="noopener noreferrer"
               class="px-4 py-2.5 <?= e($rede['cor']) ?> rounded-lg text-white font-bold text-sm flex items-center gap-2 transition">
                <i class="<?= e($rede['icone']) ?> text-lg"></i> <?= e($rede['nome']) ?>
            </a>
        <?php endforeach; ?>
    </div>

<?php else: /* rodape */ ?>

    <div class="flex space-x-6 text-sm">
        <?php foreach ($redes as $rede): ?>
            <a href="<?= e($rede['url']) ?>" target="_blank" rel="noopener noreferrer"
               aria-label="<?= e($rede['nome']) ?>" class="hover:text-brandRed transition">
                <i class="<?= e($rede['icone']) ?> text-lg"></i>
            </a>
        <?php endforeach; ?>
    </div>

<?php endif; ?>
