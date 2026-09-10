<?php
/**
 * COMPONENTE: Banner principal (texto de apresentação + foto da oficina).
 */
?>
    <!-- HERO SECTION / BANNER PRINCIPAL COM IMAGEM -->
    <section id="inicio" class="relative bg-brandGrayDark overflow-hidden py-12 lg:py-20 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                <!-- TEXTO HERO -->
                <div class="lg:col-span-5 z-10 space-y-6">
                    <div class="inline-flex items-center space-x-2 bg-brandRed/10 border border-brandRed/30 px-3 py-1 rounded-full text-brandRed font-semibold text-xs uppercase tracking-widest">
                        <i class="fa-solid fa-car"></i> Estofaria de Alta Performance
                    </div>
                    <h1 class="font-heading font-black text-4xl sm:text-5xl lg:text-6xl text-white uppercase italic leading-tight">
                        <span class="text-brandRed">Estofamento</span> Automotivo
                    </h1>
                    <p class="text-gray-300 text-base sm:text-lg">
                        Transforme o interior do seu veículo com o padrão <strong class="text-white">ESTOFF CAR</strong>.
                        Bancos em couro, reparos personalizados, higienização e revestimentos sob medida em <?= e(site('cidade')) ?>.
                    </p>

                    <!-- CAIXA DE CONTATO DESTACADA -->
                    <div class="bg-brandGrayCard p-4 rounded-xl border border-gray-800 flex items-center justify-between">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">Fale com o Responsável</p>
                            <p class="text-lg font-bold text-white"><i class="fa-solid fa-user-gear text-brandRed mr-2"></i><?= e(site('responsavel')) ?></p>
                            <p class="text-sm font-semibold text-brandRed"><?= e(site('telefone')) ?></p>
                        </div>
                        <a href="<?= e(whatsapp('Olá ' . site('responsavel') . ', gostaria de fazer um orçamento!')) ?>" target="_blank" rel="noopener noreferrer" class="bg-green-600 hover:bg-green-500 text-white px-4 py-3 rounded-lg font-bold text-sm uppercase flex items-center gap-2 transition shadow-lg hover:scale-105">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Orçamento
                        </a>
                    </div>
                </div>

                <!-- IMAGEM ILUSTRATIVA DE ESTOFAMENTO AUTOMOTIVO -->
                <div class="lg:col-span-7 relative">
                    <div class="relative rounded-2xl overflow-hidden border-2 border-brandRed/40 shadow-2xl shadow-brandRed/10 group">
                        <img src="imagem/local.jpeg" alt="Estofamento em couro automotivo premium - <?= e(site('nome')) ?>" class="w-full h-80 sm:h-96 object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end gap-2">
                            <span class="bg-black/80 backdrop-blur-md border border-brandRed/30 px-3 py-1.5 rounded-lg text-xs font-semibold text-white">
                                <i class="fa-solid fa-location-dot text-brandRed mr-1"></i> <?= e(site('endereco')) ?>
                            </span>
                            <span class="bg-brandRed text-white px-3 py-1.5 rounded-lg text-xs font-bold uppercase tracking-wider whitespace-nowrap">
                                Atendimento <?= e(site('responsavel')) ?>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
