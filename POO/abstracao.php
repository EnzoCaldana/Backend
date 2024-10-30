<?php
// Modela -> Entidade

class Funcionario {

    // Atributos -> características
    public $nome = "José";
    public $telefone = null;
    public $numFilhos = 2;

    // Método -> ações
    function resumirCarFunc() {
        // 'Esse é o resumo do cadastro do funcionario';
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($Filhos) {
        // Afeta um atributo do objeto
        $this->numFilhos = $Filhos;
    }

    function modificarNome($AlterarNome){
    $this->nome = $AlterarNome;
    }
}

// Objeto -> identidade
$y = new Funcionario();
echo $y->resumirCarFunc();
echo '<hr>';
$x = new Funcionario();
$x->modificarNumFilhos(3);
echo $x->resumirCarFunc();
echo '<hr>';

$x = new Funcionario();
$x->modificarNome('Gilmar');
echo $x->resumirCarFunc();
echo '<hr>';
?>
