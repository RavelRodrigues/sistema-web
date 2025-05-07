<?php
include_once '../config/config.php';

echo "Login";

//a sessão abaixo irá encaminhá-lo para a tela do index, já que a sessão existe(ou seja, este logado)
$_SESSION['userLogged'] = "Ravel";

header("location: ../index.php");