<?php
/**
 * Configuração das duas telas do carrossel Antes / Depois.
 *
 * As FOTOS não ficam mais aqui: elas vêm de /dados/galeria.php (o primeiro
 * item da lista é o que abre no carrossel). Este arquivo define apenas como
 * cada tag aparece.
 *
 * papel -> 'antes' ou 'depois'; diz de qual foto do trabalho a tela usa
 * tag   -> texto exibido no canto da imagem
 * cor   -> classe de cor da tag (bg-brandRed = vermelho, bg-green-600 = verde)
 */

return [
    [
        'papel' => 'antes',
        'tag'   => 'ANTES (DESGASTADO)',
        'cor'   => 'bg-brandRed',
    ],
    [
        'papel' => 'depois',
        'tag'   => 'DEPOIS (NOVO)',
        'cor'   => 'bg-green-600',
    ],
];
