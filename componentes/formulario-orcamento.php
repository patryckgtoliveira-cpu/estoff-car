<?php
/**
 * COMPONENTE: Formulário que monta a mensagem e abre o WhatsApp.
 *
 * A lista de serviços do campo "Serviço Desejado" é gerada a partir de
 * /dados/servicos.php, então criar um serviço novo já o inclui aqui.
 * O número do WhatsApp vai no atributo data-whatsapp e é lido pelo js/script.js.
 */

$servicos = dados('servicos');
?>
                <div class="lg:col-span-7 bg-brandGrayCard p-6 sm:p-8 rounded-2xl border border-gray-800 shadow-xl">
                    <h3 class="font-heading font-bold text-2xl text-white mb-2">Envie uma Mensagem Direta</h3>
                    <p class="text-gray-400 text-sm mb-6">Preencha os dados abaixo para simular seu orçamento diretamente no WhatsApp do <?= e(site('responsavel')) ?>.</p>

                    <form id="whatsapp-form" class="space-y-4"
                          data-whatsapp="<?= e(site('whatsapp')) ?>"
                          data-responsavel="<?= e(site('responsavel')) ?>">
                        <div>
                            <label class="block text-xs font-semibold uppercase text-gray-300 mb-1" for="nome">Seu Nome</label>
                            <input type="text" id="nome" required placeholder="Ex: João Silva" class="w-full bg-brandDark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brandRed transition">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase text-gray-300 mb-1" for="modelo">Modelo do Veículo</label>
                                <input type="text" id="modelo" required placeholder="Ex: Lancer / Civic / Gol" class="w-full bg-brandDark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brandRed transition">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase text-gray-300 mb-1" for="servico">Serviço Desejado</label>
                                <select id="servico" class="w-full bg-brandDark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brandRed transition">
                                    <?php foreach ($servicos as $servico): ?>
                                        <option value="<?= e($servico['opcao']) ?>"><?= e($servico['opcao']) ?></option>
                                    <?php endforeach; ?>
                                    <option value="Outros Serviços">Outros Serviços</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase text-gray-300 mb-1" for="mensagem">Detalhes do Serviço</label>
                            <textarea id="mensagem" rows="3" placeholder="Descreva brevemente o que precisa ser feito..." class="w-full bg-brandDark border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brandRed transition"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brandRed hover:bg-brandRedDark text-white font-heading font-bold py-4 rounded-xl uppercase tracking-wider transition shadow-lg flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-xl"></i> Enviar Orçamento para o <?= e(site('responsavel')) ?>
                        </button>
                    </form>
                </div>
