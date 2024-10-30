<?php
// Modela -> Entidade

class Aluno {

    // Atributos -> características
    public $nome = "Caldana";
    public $idade = 20;
    public $curso = "Engenharia";

    // Método -> ações
    function exibirDadosAluno() {
        // Exibe as informações do aluno
        return "Nome: $this->nome, Idade: $this->idade anos, Curso: $this->curso";
    }

    function alterarCurso($novoCurso) {
        // Altera o curso do aluno
        $this->curso = $novoCurso;
    }
}

// Objeto -> identidade
$aluno1 = new Aluno();
echo $aluno1->exibirDadosAluno();
echo '<hr>';

$aluno2 = new Aluno();
$aluno2->alterarCurso("Medicina");
echo $aluno2->exibirDadosAluno();
?>
