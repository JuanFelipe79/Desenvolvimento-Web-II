<?php 
class Pessoa
{ 
	public $nome; 
	public $cpf; 
	public $data_nasc; 
} 

$p1 = new Pessoa; 
$p1->nome = 'Juan'; 
$p1->cpf   = '000000000'; 
$p1->data_nasc  = '05/03/2004'; 

$p2 = new Pessoa; 
$p2->nome = 'Felipe'; 
$p2->cpf   = '111111111'; 
$p2->data_nasc  = '07/05/2005'; 

var_dump($p1);
var_dump($p2);