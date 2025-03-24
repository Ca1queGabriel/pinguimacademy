<?php

declare(strict_types=1);
//você pode definir o dado na função, mas não consegue definir o tipo dela fora da assinatura. Pode funcionar em métodos, funções,
// atributos(por estar em escopo de classe)
//esse int no final da função é o retorno
function soma(int $a, int $b): int
{
    return $a + $b;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funções Tipadas</title>
</head>
<body>
    <h1>Funções Tipadas</h1>

    <?php
    echo soma(rand(10,50),rand(51,90));
    ?>
</body>
</html>

