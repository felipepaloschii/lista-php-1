<?php


function ordenarNomes($nomesTexto){

    $vetorNomes = explode(",", $nomesTexto);
    $vetorNomes = array_map("trim", $vetorNomes);
    sort($vetorNomes);

    return $vetorNomes;
}

$nomesUsuario = "Felipe, Caio, Lucas, Arthur, João";

echo "Lista original: " . $nomesUsuario . "<br>";
$nomesOrdenados = ordenarNomes($nomesUsuario);
echo "Lista ordenada: " . implode(", ", $nomesOrdenados) . "<br>";

foreach ($nomesOrdenados as $nome) {
    echo $nome . "<br>";
}

?>