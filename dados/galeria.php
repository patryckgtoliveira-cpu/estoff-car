<?php
/**
 * Galeria de exemplos (os três cards com foto do antes e do depois lado a lado).
 *
 * classe_antes -> classes extras aplicadas só na foto do antes
 *                 (ex.: "filter grayscale" para deixar em preto e branco)
 */

return [
    [
        'antes'        => 'imagem/couro rasgado .jpeg',
        'antes_alt'    => 'Banco com rasgo e desgaste',
        'classe_antes' => '',
        'depois'       => 'imagem/couro novo.jpeg',
        'depois_alt'   => 'Banco em couro reformado',
        'titulo'       => 'Restauração de Banco de Couro',
        'descricao'    => 'Reparo de rasgos na lateral do motorista e hidratação completa.',
    ],
    [
        'antes'        => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=400&q=80',
        'antes_alt'    => 'Volante desgastado',
        'classe_antes' => 'filter grayscale',
        'depois'       => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=400&q=80',
        'depois_alt'   => 'Volante costurado em couro novo',
        'titulo'       => 'Revestimento de Volante',
        'descricao'    => 'Costura artesanal vermelha e couro perfurado de alta aderência.',
    ],
    [
        'antes'        => 'imagem/tecido antigo .jpeg',
        'antes_alt'    => 'Teto automotivo caído',
        'classe_antes' => '',
        'depois'       => 'imagem/tecido novo.jpeg',
        'depois_alt'   => 'Teto automotivo refeito',
        'titulo'       => 'Troca de Tecido do Teto',
        'descricao'    => 'Substituição do tecido descolado por material original com alta fixação.',
    ],
];
