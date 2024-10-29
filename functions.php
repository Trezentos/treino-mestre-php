<?php 

function imprimirTabela($array) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: left;'>";
    echo "<tr style='background-color: #f2f2f2;'>
            <th>Nome</th>
            <th>Sobre</th>
            <th>Idade</th>
            <th>Dinheiro</th>
          </tr>";

    foreach ($array as $pessoa) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['sobre']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['idade']) . "</td>";
        echo "<td>R$ " . number_format($pessoa['dinheiro'], 2, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}


function imprimirResultado($texto, $resultado){

    echo '<h3>'.$texto.' '. $resultado .' </h3><br>';

}