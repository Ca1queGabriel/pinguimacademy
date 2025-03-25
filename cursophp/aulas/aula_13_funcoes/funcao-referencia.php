<?php

declare(strict_types=1);

$titulo = 'parâmetro por referência';
$subtitulo = 'teste com valores e referência';
//esse aqui, o converteTitulo, é ponteiro
function converteTitulo(string &$titulo): void
{
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}
//esse aqui eu passo o parâmetro pra ele, não é ponteiro
function converteSubtitulo(string $titulo): string
{
    return mb_convert_case($titulo, MB_CASE_TITLE);
}

converteTitulo($titulo);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1> <?= $titulo ?></h1>
    <h2><?= converteSubtitulo($subtitulo) ?> </h2>

    <div>
        <?= $subtitulo ?>
    </div>
</body>
</html>
