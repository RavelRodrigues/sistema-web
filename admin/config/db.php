<?php
include_once './config.php';

//Aqui declaramos uma variável chamada $db(data base *boas praticas)
//E conectamos ao banco de dados
//Incluimos a config.php e lá declaramos as variáveis usadas abaixo
$db = new mysqli("DB_HOST", "DB_USER", "DB_PASS","DB_SCHEMA", "DB_PORT");

//Verificamos se deu certo a conexão ou se deu erro
if($db->connect_errno){
    echo "Erro Banco de dados: {$db->connect_error} " ;
    exit();
}