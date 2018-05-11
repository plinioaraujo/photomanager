<?php 

require './lib/autoload.php';


$smarty = new Template();
Rotas::get_pagina(); 


//Valores para o template
$smarty -> assign('nome', 'plinio araujo costa');

echo Rotas::get_SiteHome();

$smarty -> display('index.tpl');

?>  