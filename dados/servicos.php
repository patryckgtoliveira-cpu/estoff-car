<?php
/**
 * Serviços da Estoff Car.
 *
 * Cada item vira um card na seção "Serviços" E uma opção no formulário
 * de orçamento. Para criar um serviço novo, copie um bloco inteiro.
 *
 * imagem    -> foto do card (dentro da pasta /imagem)
 * alt       -> descrição da foto (acessibilidade e SEO)
 * icone     -> classe do ícone FontAwesome
 * titulo    -> nome do serviço
 * descricao -> texto curto do card
 * opcao     -> como aparece na lista do formulário
 * mensagem  -> texto que já vai escrito no WhatsApp ao clicar em "Consultar"
 */

return [
    [
        'imagem'    => 'imagem/pinturas em bancos.jpeg',
        'alt'       => 'Pintura e restauração de bancos em couro',
        'icone'     => 'fa-solid fa-spray-can-sparkles',
        'titulo'    => 'Pinturas no Banco em Couro',
        'descricao' => 'Restauração de cor, renovação e pintura especializada para eliminar desgastes e devolver o aspecto original ao couro.',
        'opcao'     => 'Pinturas no Banco em Couro',
        'mensagem'  => 'Olá Danilo! Gostaria de solicitar um orçamento para *Pintura no Banco em Couro* do meu veículo.',
    ],
    [
        'imagem'    => 'imagem/estofados.jpeg',
        'alt'       => 'Reformas e costura de estofados automotivos',
        'icone'     => 'fa-solid fa-car-side',
        'titulo'    => 'Reformas de Estofados',
        'descricao' => 'Troca de espuma, conserto de rasgos, costuras estouradas e substituição de tecidos desgastados.',
        'opcao'     => 'Reforma de Estofado',
        'mensagem'  => 'Olá Danilo! Gostaria de um orçamento para *Reforma de Estofado / Costura* no meu veículo.',
    ],
    [
        'imagem'    => 'imagem/teto porta e volante 2.jpeg',
        'alt'       => 'Revestimento de volante, teto e portas',
        'icone'     => 'fa-solid fa-shield-halved',
        'titulo'    => 'Teto, Portas e Volantes',
        'descricao' => 'Revestimento de teto descolado, laterais de porta, manoplas e volantes com acabamento artesanal.',
        'opcao'     => 'Teto / Volante / Portas',
        'mensagem'  => 'Olá Danilo! Gostaria de um orçamento para revestimento de *Teto, Portas ou Volante*.',
    ],
    [
        'imagem'    => 'imagem/higienização.jpeg',
        'alt'       => 'Higienização e hidratação de couro automotivo',
        'icone'     => 'fa-solid fa-hands-bubbles',
        'titulo'    => 'Higienização e Hidratação',
        'descricao' => 'Limpeza profunda de estofados e hidratação especial para couros, mantendo o aspecto de novo.',
        'opcao'     => 'Higienização e Hidratação',
        'mensagem'  => 'Olá Danilo! Gostaria de solicitar um orçamento para *Higienização e Hidratação de Couro*.',
    ],
];
