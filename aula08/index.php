<?php 
    function classificarEmpresa($funcionarios){
        if ($funcionarios < 50) {
            return "<p> Pequeno porte </p>";
        } 
        else {
            return "<p> Médio ou Grande porte </p>";
        }
    }

    echo classificarEmpresa(30) . "<br>";
    echo classificarEmpresa(120) . "<br>";
?>