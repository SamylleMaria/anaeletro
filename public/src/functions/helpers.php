<?php
    function criarId($texto) {
        $texto = iconv('UTF-8', 'ASCII//TRANSLIT', $texto); // remove acentos
        $texto = strtolower($texto);
        $texto = preg_replace('/[^a-z0-9\s-]/', '', $texto); // remove símbolos
        $texto = preg_replace('/\s+/', '-', $texto); // espaço vira hífen
        return trim($texto, '-');
    }

    