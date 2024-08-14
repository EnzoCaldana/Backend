<?php

$corEscolhida = "vermelho";

switch ($corEscolhida) {
    case "vermelho":
        echo "voce escolheu a cor vermelha.";
        break;
        
    case "azul":
            echo "voce escolheu a cor azul.";
            break;
    
    case "verde":
            echo "voce escolheu a cor verde.";
            break;
    default:
        echo "cor não disponivel.";
        break;        
        
}
?>