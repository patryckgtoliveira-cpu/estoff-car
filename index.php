<?php
/**
 * Estoff Car - Página principal
 *
 * Este arquivo só monta a página na ordem certa. O conteúdo de cada bloco
 * está em /componentes e os textos editáveis em /dados.
 */

require __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include RAIZ . '/includes/head.php'; ?>

<body class="bg-brandDark text-gray-100 font-sans antialiased">

    <?php componente('barra-topo'); ?>

    <?php componente('cabecalho'); ?>

    <?php componente('hero'); ?>

    <?php componente('diferenciais'); ?>

    <?php componente('servicos'); ?>

    <?php componente('antes-depois'); ?>

    <?php componente('contato'); ?>

    <?php componente('rodape'); ?>

    <?php componente('botao-whatsapp'); ?>

<?php include RAIZ . '/includes/scripts.php'; ?>

</body>
</html>
