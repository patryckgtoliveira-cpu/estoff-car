# Estoff Car — site institucional

Site da estofaria automotiva Estoff Car (Curitiba/PR), feito em **PHP + Tailwind CSS**,
organizado em componentes reutilizáveis.

---

## Como rodar o site no seu computador

O site agora usa PHP, entao **nao basta abrir o arquivo com dois cliques** - ele precisa de
um servidor para funcionar.

### Rodar (o PHP ja esta instalado nesta maquina, em `C:\php`)

De **dois cliques em `iniciar-servidor.bat`**.

Ele encontra o PHP sozinho, sobe o servidor e ja abre <http://localhost:8000> no navegador.
Para parar: feche a janela ou aperte `Ctrl + C`.

> Depois de alterar qualquer arquivo, basta atualizar a pagina no navegador (F5).
> Nao precisa reiniciar o servidor.

### Opcional: usar o comando `php` no terminal

Hoje o PHP existe em `C:\php` mas nao esta no PATH, entao digitar `php -v` no PowerShell
da erro de "termo nao reconhecido". O `iniciar-servidor.bat` nao precisa disso, mas se
quiser usar o comando direto no terminal, rode uma vez no PowerShell:

```powershell
[Environment]::SetEnvironmentVariable("Path", $env:Path + ";C:\php", "User")
```

Feche e reabra o terminal e confirme com `php -v`.
Ai voce tambem pode subir o servidor assim, dentro da pasta do projeto:

```powershell
php -S localhost:8000
```

### Se precisar instalar o PHP em outro computador

1. Baixe em <https://windows.php.net/download/> a versao **PHP 8.x - Zip - x64 Thread Safe**
2. Extraia o conteudo do zip na pasta `C:\php`
3. Pronto - o `iniciar-servidor.bat` ja procura nesse caminho

### Alternativa: XAMPP

Se preferir o XAMPP, instale-o, copie a pasta do projeto para `C:\xampp\htdocs\estoffcar`,
inicie o **Apache** no painel e acesse <http://localhost/estoffcar>.

---

## Onde mexer para editar o site

| Quero mudar... | Arquivo |
|---|---|
| Telefone, WhatsApp, endereço, redes sociais | `dados/site.php` |
| Serviços (cards e opções do formulário) | `dados/servicos.php` |
| Itens do menu | `dados/menu.php` |
| Os três destaques abaixo do banner | `dados/diferenciais.php` |
| Imagens do carrossel Antes/Depois | `dados/carrossel.php` |
| Cards da galeria de exemplos | `dados/galeria.php` |
| Cores e fontes da marca | `js/tailwind-config.js` |
| Estilos do carrossel | `css/style.css` |
| Comportamento (menu, carrossel, formulário) | `js/script.js` |

O endereço e o telefone aparecem em vários pontos da página, mas ficam escritos
**uma única vez** em `dados/site.php` — mudou ali, mudou no site inteiro.

---

## Estrutura das pastas

```
projeto-estoffcar/
├── index.php                 # página principal: só monta os componentes na ordem
├── iniciar-servidor.bat      # atalho para subir o servidor de testes
│
├── includes/                 # base do projeto
│   ├── config.php            # funções de apoio: site(), dados(), e(), whatsapp(), componente()
│   ├── head.php              # <head> da página (títulos, CSS, fontes)
│   └── scripts.php           # scripts do final da página
│
├── componentes/              # blocos reutilizáveis da página
│   ├── barra-topo.php
│   ├── cabecalho.php
│   ├── menu-mobile.php
│   ├── redes-sociais.php     # 3 aparências: cabecalho, contato e rodape
│   ├── hero.php
│   ├── diferenciais.php
│   ├── titulo-secao.php      # título padrão usado pelas seções
│   ├── servicos.php
│   ├── card-servico.php
│   ├── antes-depois.php      # carrossel + galeria
│   ├── card-galeria.php
│   ├── contato.php
│   ├── formulario-orcamento.php
│   ├── rodape.php
│   └── botao-whatsapp.php
│
├── dados/                    # textos e listas (a parte que você edita no dia a dia)
│   ├── site.php
│   ├── menu.php
│   ├── diferenciais.php
│   ├── servicos.php
│   ├── carrossel.php
│   └── galeria.php
│
├── css/style.css             # estilos próprios (carrossel etc.)
├── js/
│   ├── script.js             # menu mobile, carrossel e envio do formulário
│   └── tailwind-config.js    # cores e fontes da marca
├── imagem/                   # fotos do site
└── base.html                 # versão antiga em HTML puro (pode ser apagada)
```

---

## Como funcionam os componentes

Cada bloco da página é um arquivo em `componentes/`, chamado assim:

```php
<?php componente('servicos'); ?>
```

Quando o componente precisa receber informação, passa-se um array — as chaves viram
variáveis dentro dele:

```php
<?php componente('card-servico', ['servico' => $servico]); ?>
```

Funções disponíveis em qualquer componente (definidas em `includes/config.php`):

| Função | Para que serve |
|---|---|
| `site('telefone')` | lê um dado de `dados/site.php` |
| `dados('servicos')` | carrega uma lista da pasta `dados/` |
| `e($texto)` | imprime texto com segurança no HTML |
| `whatsapp('mensagem')` | monta o link do WhatsApp com a mensagem pronta |
| `componente('nome', [...])` | inclui outro componente |

---

## Aviso sobre a publicação

**O GitHub Pages não executa PHP** — ele só entrega arquivos estáticos. Para publicar esta
versão é preciso uma hospedagem com suporte a PHP (Hostinger, Locaweb, InfinityFree,
Railway, etc.), onde basta enviar a pasta inteira por FTP.
