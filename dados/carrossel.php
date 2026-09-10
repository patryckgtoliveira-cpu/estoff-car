<?php
/**
 * Imagens do carrossel Antes / Depois.
 *
 * As imagens se alternam sozinhas a cada 3 segundos (e também podem ser
 * arrastadas para os lados). Pode ter mais de duas: o carrossel cria uma
 * bolinha indicadora para cada item automaticamente.
 *
 * cor -> classe de cor da tag (bg-brandRed = vermelho, bg-green-600 = verde)
 */

return [
    [
        'imagem' => 'imagem/banco antes.jpeg',
        'alt'    => 'Antes do serviço de reforma',
        'tag'    => 'ANTES (DESGASTADO)',
        'cor'    => 'bg-brandRed',
    ],
    [
        'imagem' => 'imagem/banco depois.jpeg',
        'alt'    => 'Depois do serviço da Estoff Car',
        'tag'    => 'DEPOIS (NOVO)',
        'cor'    => 'bg-green-600',
    ],
];
