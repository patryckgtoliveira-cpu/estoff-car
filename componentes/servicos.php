<?php
/**
 * COMPONENTE: Seção de serviços. Percorre /dados/servicos.php e desenha
 * um card para cada serviço usando o componente card-servico.
 */

$servicos = dados('servicos');
?>
    <!-- SERVIÇOS -->
    <section id="servicos" class="py-16 bg-brandGrayDark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php componente('titulo-secao', [
                'chapeu' => 'Nossas Especialidades',
                'titulo' => 'Serviços da ' . site('nome'),
            ]); ?>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($servicos as $servico): ?>
                    <?php componente('card-servico', ['servico' => $servico]); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
