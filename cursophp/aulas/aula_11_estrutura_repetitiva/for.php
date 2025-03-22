<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estruturas de repetição</title>
</head>
<body>
<div>
    <h2>FOR</h2>

    <h3>For positivo</h3>
    <?php
    for($i =0; $i < 10; $i++) {
        echo "$i <br>";
    }
    ?>

    <hr>
    <h3>For negativo</h3>
    <?php
    for($i =1000; $i >990; $i--) {
        echo "$i <br>";
    }
    ?>
    <hr>
    <h3>For: Arrays e Indices</h3>
    <?php
    $frutas = [1=>'Maçã','banana','Melancia'];
    for($i = 1; $i <count($frutas)+1; $i++){
        echo "$frutas[$i] <br>";
    }
    ?>

</div>
</body>
</html>