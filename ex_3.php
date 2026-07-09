<?php

function mascararCpf ($cpf){

$cpf = preg_replace('/^0-9]/', '', $cpf);

$ultimosDigitos = substr($cpf, -4);

$quantidadeAsteriscos = strlen($cpf) - 4;

$astericos = str_repeat('*', $quantidadeAsteriscos);

$cpfMascarado = $astericos . $ultimosDigitos;


return $cpfMascarado;
}


$cpf_usuario = "123.456.789-00";

$resultado = mascararCpf($cpf_usuario);

echo $resultado

?>
