<?php
//Aqui declaramos uma variável chamada $db(data base *boas praticas)
//E conectamos ao banco de dados
$db = new mysqli("localhost", "root", "","sistema_web", "3310");

//Verificamos se deu certo a conexão ou se deu erro
if($db->connect_errno){
    echo "Erro Banco de dados: {$db->connect_error} " ;
    exit();
}


$select = "SELECT * FROM users";
$result = $db->query($select);
//Consultando dados
if($result){
    while($obj =$result->fetch_object()){
        echo "ID: {$obj->id} <br>";
        echo "Nome: {$obj->name} <br>";
        echo "Email: {$obj->email} <br>";
        echo "Registrado em: {$obj->created_at} <br>";
        echo "<hr>";
    }
}else{
    echo "Erro no SELECT: {$db->error} " ;
}

//boa pratica colocar o passowrd antes e chamar dentro do insert
$password = md5("123123");
//Inserindo dados
$insert = "INSERT INTO `users`(

    `name`,
    `email`,
    `password`,

VALUES
(
    
    <{name:'inserindo via php'}>,
    <{email:'testando@sistemaweb.com'}>,
    <{password:'{$password}'}> 

);";

$result = $db->query($insert);
if($result){
    echo "Salvo com sucesso ID => {$db->insert->id}";
}else{
    echo "ERRO Insert: {$db->error}";
}
    


$db->close();