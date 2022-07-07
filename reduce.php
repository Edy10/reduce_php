<?php
$produto = [
    ['nome' => 'Pizza de Calabresa',
     'valor' => 35.90,
     'qtd' => 2
    ],
    ['nome' => 'Portuguesa',
     'valor' => 65.65,
     'qtd' => 2
    ]
];

$total = array_reduce($produto, function($carry, $item){
    return $carry + ($item['valor'] * $item['qtd']);
}, 0);

echo "<h3> Calculando o valor total de uma compra com Reduce</h3> <br/>";
print_r('Total da compra = '.$total);
