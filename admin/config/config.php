<?php
header('Content-Type: charset=utf-8');
session_start();
$_SESSION['userLogged'] = 1;
define("TITLE", "Painel Administrativo v1");



?>