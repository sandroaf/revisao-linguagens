<?php
list($dia, $mes, $ano) = explode('/', $_GET["iDataNascimento"]);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
echo $_GET["iNome"]." tem ".$idade." anos.";
?>