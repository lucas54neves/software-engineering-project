<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION['cpfproprietario']) || !isset($_SESSION['nomeproprietario'])) 
{ 
// Usuário não logado! Redireciona para a página de login 
	header('location: ../view/AreaLogin.html');
exit; 
} 
?>