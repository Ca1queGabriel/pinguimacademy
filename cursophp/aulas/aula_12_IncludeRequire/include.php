<?php

declare(strict_types = 1);

/**
 *  Include
 *
 * Lança um warning
 *
 * é utilizado para incluir arquivos necessários no projeto
 */
?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'inc/head.php'; ?>
    <?php $config = include ('inc/config.php');?>
    <title>Include</title>
</head>
<body>

    <h1><?= 'Include' ?></h1>
        <table>
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Senha</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                    <td><?= $config['username'] ?></td>
                    <td><?= $config['password'] ?></td>
                </tr>
                </tbody>
        </table>

</body>
</html>
