<?php


declare(strict_types=1);
//tá recebendo do mesmo diretório "./" ou "" dá na mesma bosta, o retorno do titulo.php que é "Senhor"
$titulo = require('./titulo.php');
//é a mesma coisa do $titulo ser privado, mas tu só consegue acessar ele na classe ou dentro do método, aí tu bota dentro do método e trabalha com ele lá dentro globalmente
function ola(string $nome)
{
   global $titulo;
   return "Olá $titulo, $nome";
}

echo ola('Caique');