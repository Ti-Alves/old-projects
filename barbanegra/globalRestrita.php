<?php

// função que faz parte do SPL que signifivca Standard PHP Library
spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse){
    if(file_exists('area_restrita/' .$nomeClasse . '.php')){
        require_once 'area_restrita/' .$nomeClasse . '.php';
    }
}


?>