<?php
/**
 * COMPONENTE: Card de um serviço.
 * Recebe: $servico (um item de /dados/servicos.php)
 */
?>
                <div class="bg-brandGrayCard rounded-xl overflow-hidden border border-gray-800 hover:border-brandRed/50 transition duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= e($servico['imagem']) ?>" alt="<?= e($servico['alt']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-brandGrayCard via-transparent to-transparent"></div>
                            <div class="absolute top-3 left-3 w-10 h-10 bg-brandRed rounded-lg flex items-center justify-center text-white text-lg shadow-lg">
                                <i class="<?= e($servico['icone']) ?>"></i>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="font-heading font-bold text-xl text-white mb-2"><?= e($servico['titulo']) ?></h3>
                            <p class="text-gray-400 text-sm mb-4"><?= e($servico['descricao']) ?></p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-0">
                        <a href="<?= e(whatsapp($servico['mensagem'])) ?>" target="_blank" rel="noopener noreferrer" class="text-brandRed font-bold text-sm inline-flex items-center hover:underline">
                            Consultar <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
