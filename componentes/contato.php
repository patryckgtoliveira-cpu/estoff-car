<?php
/**
 * COMPONENTE: Seção de contato (dados da oficina + formulário de orçamento).
 */

// Os três blocos de informação exibidos à esquerda.
// A chave 'link' é opcional: quando preenchida, o valor vira um link clicavel.
$informacoes = [
    [
        'icone'  => 'fa-solid fa-phone',
        'rotulo' => 'Telefone / WhatsApp',
        'valor'  => site('telefone'),
        'link'   => 'tel:' . site('telefone_link'),
        'dica'   => 'Ligar agora',
    ],
    [
        'icone'  => 'fa-solid fa-location-dot',
        'rotulo' => 'Localização',
        'valor'  => site('endereco'),
        'link'   => maps(),
        'dica'   => 'Ver como chegar no Google Maps',
    ],
    [
        'icone'  => 'fa-solid fa-user',
        'rotulo' => 'Atendimento Especializado',
        'valor'  => site('responsavel'),
        'link'   => '',
        'dica'   => '',
    ],
];
?>
    <!-- SEÇÃO CONTATO E LOCALIZAÇÃO -->
    <section id="contato" class="py-16 bg-brandGrayDark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <!-- INFORMAÇÕES DE CONTATO -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <h2 class="text-xs font-bold text-brandRed uppercase tracking-widest mb-2">Fale Conosco</h2>
                        <h3 class="font-heading font-black text-3xl sm:text-4xl text-white uppercase italic">Faça Seu Orçamento</h3>
                        <div class="w-16 h-1 bg-brandRed mt-3 rounded-full"></div>
                    </div>

                    <p class="text-gray-300">
                        Atendimento personalizado com <strong class="text-white"><?= e(site('responsavel')) ?></strong>.
                        Traga seu carro até a <?= e(site('nome')) ?> ou envie fotos do estado atual do seu estofado
                        para um orçamento rápido via WhatsApp.
                    </p>

                    <div class="space-y-4">
                        <?php foreach ($informacoes as $info): ?>
                            <div class="flex items-center space-x-4 bg-brandGrayCard p-4 rounded-xl border border-gray-800">
                                <div class="w-12 h-12 bg-brandRed/20 text-brandRed rounded-lg flex items-center justify-center text-xl shrink-0">
                                    <i class="<?= e($info['icone']) ?>"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-semibold uppercase"><?= e($info['rotulo']) ?></p>
                                    <?php if ($info['link'] !== ''): ?>
                                        <a href="<?= e($info['link']) ?>" title="<?= e($info['dica']) ?>"
                                           <?= str_starts_with($info['link'], 'http') ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                                           class="text-lg font-bold text-white hover:text-brandRed transition">
                                            <?= e($info['valor']) ?>
                                        </a>
                                    <?php else: ?>
                                        <p class="text-lg font-bold text-white"><?= e($info['valor']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- BOTÕES DE REDES SOCIAIS NA SEÇÃO DE CONTATO -->
                    <div class="pt-2">
                        <p class="text-xs text-gray-400 uppercase font-semibold mb-3">Siga a <?= e(site('nome')) ?> nas Redes</p>
                        <?php componente('redes-sociais', ['variante' => 'contato']); ?>
                    </div>
                </div>

                <!-- FORMULÁRIO DE SIMULAÇÃO DE ORÇAMENTO -->
                <?php componente('formulario-orcamento'); ?>

            </div>
        </div>
    </section>
