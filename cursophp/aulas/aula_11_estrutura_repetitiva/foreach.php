<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foreach</title>
</head>
<body>
    <div>
        <h3>Foreach Simples</h3>

        <?php
            $users = [
                ['nome'=>'João Doe','email'=>'joao@doe.com'],
                ['nome'=>'Maria Doe','email'=>'maria@doe.com']
            ];

            foreach($users as $user){
                echo $user['nome']." - ".$user['email']."<br>";
            }

        ?>
    </div>

    <div style="border-top: 50px">
        <h3>Foreach com esteróides</h3>

        <?php
        $users = [
           'Funcionário A'=> ['nome'=>'João Doe','email'=>'joao@doe.com'],
           'Funcionário B'=> ['nome'=>'Maria Doe','email'=>'maria@doe.com']
        ];

        foreach($users as $index => $user){
            echo $index. ': ' . $user['nome']." - ".$user['email']."<br>";
        }

        ?>
    </div>
</body>
</html>
