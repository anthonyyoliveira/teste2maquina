<?php

if ($_POST) {
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    if (is_numeric($distancia) && is_numeric($autonomia)) {

        if ($distancia > 0 && $autonomia > 0) {
            $valorGasolina = 4.80;
            $valorAlcool = 3.80;
            $valorDiesel = 3.90;

            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',','.');

            $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',','.');
            
            $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',','.');

            echo "<p>O valor do consumo em R$ para Gasolina foi de: R$ " .$calculoGasolina. "</p>";
            echo "<p>O valor do consumo em R$ para Gasolina foi de: R$ " .$calculoAlcool. "</p>";
            echo "<p>O valor do consumo em R$ para Gasolina foi de: R$ " .$calculoDiesel. "</p>";
        } else {
            echo "<p>O valor da distância e da autonomia deve ser maior que zero!</p>";
        }

    } else {
        echo "<p>Valor recebido não é numérico.</p>";
    }

} else {
    echo "<p>nenhum dado foi recebido pelo formulário .</p>";
}

