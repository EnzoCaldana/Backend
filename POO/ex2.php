<?php
// Modela -> Entidade

class Livro {

    // Atributos -> características
    public $titulo = "Harry Potter e a pedra filosofal";
    public $autor = "J. K. Rowling";
    public $anoPublicacao = 1997;

    // Método -> ações
    function exibirDetalhes() {
        // Exibe as informações do livro
        return "Título: $this->titulo, Autor: $this->autor, Ano de Publicação: $this->anoPublicacao";
    }

    function alterarAnoPublicacao($novoAno) {
        // Altera o ano de publicação do livro
        $this->anoPublicacao = $novoAno;
    }
}

// Objeto -> identidade
$livro1 = new Livro();
echo $livro1->exibirDetalhes();
echo '<hr>';

$livro2 = new Livro();
$livro2->alterarAnoPublicacao(2024);
echo $livro2->exibirDetalhes();
?>
