<?php
/**
 * COMPONENTE: Título centralizado das seções (chapéu + título + traço vermelho).
 *
 * Uso:
 *   componente('titulo-secao', [
 *       'chapeu'   => 'Nossas Especialidades',
 *       'titulo'   => 'Serviços da Estoff Car',
 *       'subtitulo'=> 'texto opcional abaixo do título',
 *   ]);
 */

$chapeu    = $chapeu ?? '';
$titulo    = $titulo ?? '';
$subtitulo = $subtitulo ?? '';
?>
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-bold text-brandRed uppercase tracking-widest mb-2"><?= e($chapeu) ?></h2>
                <p class="font-heading font-black text-3xl sm:text-4xl text-white uppercase italic"><?= e($titulo) ?></p>
                <?php if ($subtitulo !== ''): ?>
                    <p class="text-gray-400 mt-2 text-sm"><?= e($subtitulo) ?></p>
                <?php endif; ?>
                <div class="w-20 h-1 bg-brandRed mx-auto mt-4 rounded-full"></div>
            </div>
