<h1 class="title">Tables</h1>
<h2 class="subtitle">Tabelas em HTML permitem aos criadores expressar dados tabulares,
    em forma de linhas e colunas. Em HTML as tabelas são definidas pelas <b>tags</b>:
    <mark>table, caption, th, tr, td, thead, tbody, tfooter, col, colgroup</mark>
</h2>


<details>
    <summary>table</summary>
    <p>define uma tabela, delimita onde começam e terminan os dados tabulares dentro de uma determinada sessão, ou bloco de código html</p>
</details>

<details>
    <summary>caption</summary>
    <p>define uma legenda para a tabela</p>
</details>

<details>
    <summary>th (table header)</summary>
    <p>define um cabeçalho para cada coluna da tabela, por padrão
        o texto é em negrito e alinhado ao centro, mas pode ser editado,
        via CSS
    </p>
</details>

<details>
    <summary>tr (table row)</summary>
    <p> define cada uma das linhas da tabela, inclusive a linha que compõe o
        cabeçalho deve estar aninhada em um elemento tr</p>
</details>

<details>
    <summary>td (table data)</summary>
    <p>compõe cada célula de uma tabela,
        contendo seus dados e dividindo os espaços e distâncias</p>
</details>

<details>
    <summary>thead, tbody, tfooter</summary>
    <p>São usadas para agrupar um bloco de uma tabela semanticamente
        ajudar na formatação e na hora de imprimir, quando houver umas
        tabela muito grande onde pode haver quebra de linhas e dados esses
        blocos podem ser impressos comu sumário, além dos navegadores
        poder colocar um scroll independente dessas partes onde
        somente o conteúdo da tabela roda e não seu cabeçalho e rodapé,
        essas tags não afetam o layoute das tabelas mas pode ser usados
        para formatar essas partes específicas das tabelas
    </p>
</details>

<details>
    <summary>col - colgroup</summary>
    <p>ajuda definir grupos de colunas que irão ter uma determinada formatação
        no exemplo abaixo a primeira coluna span 1, teve a cor azul, as duas segunda
        span 2, span 3 tiveram formatações diferentes, ou seja foram divididas em grupos de 2 e tres colunas
        isso ajuda na formatação
    </p>
</details>


<hr>


<?php
include_once 'helpers.php';
$basic_table    = show_source('subject/tables/basic-table.html', true);
$caption_table  = show_source('subject/tables/caption-table.html', true);
$thead_table    = show_source('subject/tables/thead-table.html', true);
$col_table      = show_source('subject/tables/col-colgroup-table.html', true);
$styled_table   = show_source('subject/tables/styled-table.html', true);



?>

<div class="tag">tabela simples</div>
<div class="columns">
    <div class="column"><?= retForm($basic_table); ?></div>
    <div class="column card">
        <iframe src="subject/tables/basic-table.html" width="100%" frameborder="0"></iframe>
    </div>
</div>
<hr>

<div class="tag">Tabela simples com legenda</div>
<div class="columns">
    <div class="column"><?= retForm($caption_table); ?></div>
    <div class="column card">
        <iframe src="subject/tables/caption-table.html" width="100%" frameborder="0"></iframe>
    </div>
</div>

<hr>

<div class="tag">Thead, tbody, hfoot - Agrupando o cabeçalho, corpo, rodapé</div>
<div class="columns">
    <div class="column"><?= retForm($thead_table); ?></div>
    <div class="column card">
        <iframe src="subject/tables/thead-table.html" width="100%" frameborder="0"></iframe>
    </div>
</div>


<div class="tag">col, colgroup - Agrupamento de formatação de coluna</div>
<div class="columns">
    <div class="column"><?= retForm($col_table); ?></div>
    <div class="column card">
        <iframe src="subject/tables/col-colgroup-table.html" frameborder="0" width="100%"></iframe>
    </div>
</div>


<div class="tag">Styled table with CSS, table, th, tr borders</div>
<div class="columns">
    <div class="column"><?= retForm($col_table); ?></div>
    <div class="column card">
        <iframe src="subject/tables/styled-table.html" frameborder="0" width="100%"></iframe>
    </div>
</div>