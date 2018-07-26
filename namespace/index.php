<?php

require_once ("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Jose Roberto");
$cad->setEmail("jose.baptista@se.df.gov.br");
$cad->setSenha("123456789");
$cad->registrarVenda();

echo $cad;
