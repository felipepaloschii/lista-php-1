<?php

function analisarTexto($texto){

    $palavras = explode(' ', trim($texto));
    $quantidadePalavras = count($palavras);

    $quantidadeCaracteres = strlen(str_replace(' ', '', $texto));

    $textoMinusculo = strtolower($texto);

    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;
    $vogais = "aeiou";

    for ($i = 0; $i < strlen($textoMinusculo); $i++) {
        $letra = $textoMinusculo[$i];

        if (ctype_alpha($letra)) {
            if (strpos($vogais, $letra) !== false) {
                $quantidadeVogais++;
            } else {
                $quantidadeConsoantes++;
            }
        }
    }

    return [
        "palavras" => $quantidadePalavras,
        "caracteres" => $quantidadeCaracteres,
        "vogais" => $quantidadeVogais,
        "consoantes" => $quantidadeConsoantes
    ];
}

$texto_usuario = "Estudar php no inverno e chato";

$resultado = analisarTexto($texto_usuario);

echo "Palavras: " . $resultado['palavras'] . "\n";
echo "Caracteres: " . $resultado['caracteres'] . "\n";
echo "Vogais: " . $resultado['vogais'] . "\n";
echo "Consoantes: " . $resultado['consoantes'];

?>