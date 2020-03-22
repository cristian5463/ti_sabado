<?php

$dados = ['Cristian','Trevisan','23 anos'];

echo 'Meu nome é: '.$dados[0];
echo '<br>Meu sobrenome é: '.$dados[1];
echo '<br>Minha idade é: '.$dados[2];

?>
<hr>

<?php

$dados = [
    'nome' => 'Cristian',
    'sobrenome' => 'Trevisan',
    'idade' => '23 anos'
];

echo 'Meu nome é: '.$dados['nome'];
echo '<br>Meu sobrenome é: '.$dados['sobrenome'];
echo '<br>Minha idade é: '.$dados['idade'];

?>
<hr>

<?php

$animal = [
    'nome' => 'Joy',
    'raca' => 'Vira-Lata',
    'idade' => 23,
    'consultas' => [

        [  
            'data' => '10/10/2019',
            'obs' => 'o cachorro tinha sarna.'
        ],
        [   
            'data' => '23/12/2019',
            'obs' => 'o cachorro veio a óbito.'
        ]
    ]
];

?>
<h2>Dados do animal</h2>
<p>Nome: <?= $animal['nome'];?></p>
<p>raca: <?= $animal['raca'];?></p>
<p>idade: <?= $animal['idade'];?></p>
<hr>
<h5>Consulta 1:</h5>
<p>Data da Consulta: <?= $animal['consultas'][0]['data']?></p>
<p>Observações: <?= $animal['consultas'][0]['obs']?></p>
<hr>
<h5>Consulta 2:</h5>
<p>Data da Consulta: <?= $animal['consultas'][1]['data']?></p>
<p>Observações: <?= $animal['consultas'][1]['obs']?></p>