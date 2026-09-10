<?php
/**
 * Dados gerais do site.
 *
 * >>> É AQUI que você muda telefone, endereço e redes sociais. <<<
 * Alterando neste arquivo, muda em todas as partes do site de uma vez.
 */

return [
    'nome'         => 'Estoff Car',
    'titulo'       => 'Estoff Car - Estofaria Automotiva em Curitiba/PR',
    'responsavel'  => 'Danilo',

    // Telefone exibido na tela e o mesmo número no formato de link
    'telefone'      => '(41) 99975-7153',
    'telefone_link' => '41999757153',

    // Número do WhatsApp com código do país (55) - usado pela função whatsapp()
    'whatsapp' => '5541999757153',

    // Endereço da oficina
    'endereco' => 'R. Maria Rita das Chagas Lima, 49 - São Braz, Curitiba - PR, 82300-330',
    'cidade'   => 'Curitiba / PR',

    // Destino usado no Google Maps ao clicar no endereço.
    // Deixe vazio ('') para usar o próprio endereço acima. Se o Google não achar
    // o local exato, cole aqui as coordenadas (ex.: '-25.4284,-49.2733')
    // ou o nome do estabelecimento cadastrado no Maps.
    'maps' => '',

    // Redes sociais
    'instagram' => 'https://www.instagram.com/estoffcar/',
    'facebook'  => 'https://www.facebook.com/daniloestoffcar/?locale=pt_BR',
];
