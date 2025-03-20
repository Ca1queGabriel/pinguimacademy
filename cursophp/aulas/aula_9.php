<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu site</title>
</head>
<body>
<div>
    <h1>IF</h1>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date(format: 'H:i');
    echo "$hora";
    if ($hora > '06:00' && $hora <= '12:00') {
        echo 'Bom dia!';
    } elseif ($hora > '12:00' && $hora <= '18:00') {
        echo 'Boa tarde!';
    } else {
        echo 'Boa noite!';
    }
    ?> Caique
</div>




<div style="margin-top: 50px">
    <h1>SWITCH</h1>
    <?php
    $numero = rand(0,3);

    switch ($numero) {
        case 0:
        case 1:
        case 3:
        case 2:
            echo "Número $numero";
            break;
        default:
            echo 'Número entre 1 e 2';

    }
    ?>
</div>
<div style="margin-top: 50px">
    <h1>Match</h1>
    <h3>Substituindo o switch</h3>
    <p>
        <?php
        $numero = rand(0,3);

        $saudacao = match($numero) {
            0, 1 => "Número $numero",
            3 => "Número $numero",
            default => "Número maior que 1 e menor que 3. Ou seja, $numero"
        };
        echo $saudacao;
        ?>
    </p>
    <hr>
    <h3>Substituindo o if</h3>
    <?php
        $hora = date(format: 'H:i');
        $horario = match(true){
            $hora >= '06:00' && $hora <= '12:00' => 'Bom dia!',
            $hora > '12:00' && $hora <= '18:00' => 'Boa tarde!',
            default => "Boa noite!"
        };
        echo $horario;

    ?>
</div>
</body>
</html>
