<?php
//criar uma array
$usuario = [
    ["id" => 1,
    "Nome" => "joao",
    "Cidade" => "Cerquilho",
    "Uf" => "SP"],

    ["id" => 2,
    "Nome" => "Matheus",
    "Cidade" => "Tatui",
    "Uf" => "SP"],

    ["id" => 3,
    "Nome" => "Leticia",
    "Cidade" => "Sorocaba",
    "Uf" => "SP"],

    ["id" => 4,
    "Nome" => "Emanuelly",
    "Cidade" => "Piracicaba",
    "Uf" => "SP"],

    ["id" => 5,
    "Nome" => "Pedro",
    "Cidade" => "Tiete",
    "Uf" => "SP"]
];

$busca = "Matheus";
echo '<pre>';
print_r($usuario);
echo '</pre>';

//procurar o valor
$indice = array_search($busca, array_column($usuario, 'Nome'));

//verificar se não é igual a falso 
if($indice !== false){
    echo "$busca doi encontrada com o ID:". $usuario[$indice]['id'];

}else{
    //Se o valor não for encontrado mostrar isso
    echo "$busca não foi encontrada na lista de usuário.";
}