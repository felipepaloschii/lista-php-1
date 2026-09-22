<?php

function ordenarNomes(string $nomes): array
{
    $vetorNomes = explode(',', $nomes);

    $vetorNomes = array_map('trim', $vetorNomes);

    $vetorNomes = array_filter($vetorNomes, function ($nome) {
        return $nome !== '';
    });

    sort($vetorNomes);

    return $vetorNomes;
}

function analisarNumero(int $numero): array
{
    $paridade = ($numero % 2 === 0) ? 'Par' : 'Ímpar';

    $Primo = true;
    if ($numero < 2) {
        $Primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                $Primo = false;
                break;
            }
        }
    }

     $somaDivisores = 0;
    if ($numero > 1) {
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i === 0) {
                $somaDivisores += $i;
            }
        }
    }
    $Perfeito = ($numero > 1 && $somaDivisores === $numero);

    return [
        'numero' => $numero,
        'paridade' => $paridade,
        'primo' => $Primo ? 'Primo' : 'Não primo',
        'perfeito' => $Perfeito ? 'Perfeito' : 'Não perfeito',
    ];
}

$listaNomes = "Felipe, Caio, Lucas, Arthur, João";
$nomesOrdenados = ordenarNomes($listaNomes);

echo "\n=== Lista de Nomes Ordenada ===\n";
foreach ($nomesOrdenados as $nome) {
    echo $nome . "\n";
}

echo "\n=== Análise de Números ===\n";
$numerosParaAnalisar = [6, 7, 28, 15, 2];

foreach ($numerosParaAnalisar as $num) {
    $resultado = analisarNumero($num);
    echo "Número: " . $resultado['numero'] . "\n";
    echo "Paridade: " . $resultado['paridade'] . "\n";
    echo "Classificação: " . $resultado['primo'] . "\n";
    echo "Perfeito: " . $resultado['perfeito'] . "\n";

}

    
    
    
    ?>