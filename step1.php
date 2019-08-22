<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}
include_once('step1.html');

//Gravando valores dentro da sessão aberta:
$_SESSION['nome'] = '';
$_SESSION['email'] = '';
$_SESSION['telefone'] = '';
$_SESSION['imovel'] = '';
$_SESSION['cidade'] = '';
?>