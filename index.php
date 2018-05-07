<?php 

require './lib/autoload.php';


$smarty = new Template();


//Valores para o template
$smarty -> assign('nome', 'plinio araujo costa');

$smarty -> display('index.tpl');

?>  