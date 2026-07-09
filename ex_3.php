<?php

function mascararCpf($cpf) {
    
    $cpfLimpo = preg_replace('/\D/', '', $cpf);

    if (strlen($cpfLimpo) !== 11) {
        return "CPF inválido";
    }

    $ultimosDigitos = substr($cpfLimpo, -4);

  
    $mascara = str_repeat('*', strlen($cpfLimpo) - 4);


    return $mascara . $ultimosDigitos;
}


echo mascararCpf("123.456.789-01") . "\n"; 
echo mascararCpf("12345678901") . "\n";