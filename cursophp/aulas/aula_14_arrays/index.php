<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <div>
        <h2>Declarando Arrays</h2>

        <div>
            <?php
            //declaração de arrays
            $frutas = ['Laranja','Abacaxi','Melancia'];
            print_r($frutas);

            ?>
        </div>
        <div style="margin-top: 20px">
            <?php
            $maisFrutas = array('Banana','Pêra','Abacate');
            print_r($maisFrutas);
            ?>
        </div>
        <div style="margin-top: 20px">
            <?php
            // Outros tipos de chaves
            $array = [
                //para definir os índicies apenas use int ou strings
                1=> 'Este é o número 1',
                'nome' => 'Caique',
                false => 'Nada por aqui',
                2.5 => 'Este é um número float', // ele pega só a parte inteira, ou seja, 2, então não use isso

                // não pode ter null => 'Nullable value' a chave ficará vazia, ou sejam como tu referencia uma coisa dessas?;
            ];
            print_r($array);
            ?>
        </div>
    </div>
</body>
</html>
