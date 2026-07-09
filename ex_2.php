<?php

function inverterTexto($texto)
{
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $caracteresInvertidos = array_reverse($caracteres);
    $textoInvertido = implode('', $caracteresInvertidos);

    $quantidadeCaracteres = mb_strlen($texto);

    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidadeCaracteres
    ];
}

$texto_usuario = "123456";

$resultado = inverterTexto($texto_usuario);

echo "Texto invertido: " . $resultado["invertido"];
echo "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade"];

?>