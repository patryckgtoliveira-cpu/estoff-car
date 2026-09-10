<?php
/**
 * Estoff Car - Configuração central
 *
 * Carregado uma única vez pelo index.php. Define o caminho raiz do projeto
 * e as funções de apoio usadas por todos os componentes.
 */

// Caminho absoluto da raiz do projeto (a pasta onde fica o index.php)
define('RAIZ', dirname(__DIR__));

/**
 * Lê os dados do site (telefone, endereço, redes sociais...).
 *
 * Uso:  site('telefone')  -> retorna só o telefone
 *       site()            -> retorna o array inteiro
 */
function site(?string $chave = null)
{
    static $dados = null;

    if ($dados === null) {
        $dados = require RAIZ . '/dados/site.php';
    }

    if ($chave === null) {
        return $dados;
    }

    return $dados[$chave] ?? null;
}

/**
 * Carrega um arquivo da pasta /dados e devolve o array.
 * Uso: dados('servicos')
 */
function dados(string $nome): array
{
    return require RAIZ . '/dados/' . $nome . '.php';
}

/**
 * Escapa texto antes de imprimir no HTML (evita quebrar a página
 * com caracteres como & e < vindos dos textos).
 *
 * Uso: <?= e($servico['titulo']) ?>
 */
function e(?string $texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

/**
 * Monta o link do WhatsApp, já com a mensagem pronta e codificada.
 *
 * Uso: whatsapp('Olá Danilo! Quero um orçamento.')
 */
function whatsapp(string $mensagem = ''): string
{
    $url = 'https://wa.me/' . site('whatsapp');

    if ($mensagem !== '') {
        $url .= '?text=' . rawurlencode($mensagem);
    }

    return $url;
}

/**
 * Inclui um componente da pasta /componentes, opcionalmente passando dados.
 *
 * Uso: componente('card-servico', ['servico' => $servico])
 *      (dentro do componente, os dados viram as variáveis $servico, etc.)
 */
function componente(string $nome, array $variaveis = []): void
{
    extract($variaveis, EXTR_SKIP);

    include RAIZ . '/componentes/' . $nome . '.php';
}
