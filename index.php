    <table>
    <?php
    $input = 5;
    if ($input >=1 && $input<=12){
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $i * $input;
        if ($i % 2 == 0) {
            $classe = "gris";
        } else {
            $classe = "azul";
            }
        echo "<tr class='$classe'>";
        echo "  <td>$i * $input</td>";
        echo "  <td>$resultat</td>";
        echo "</tr>";
    }
}
    else {
        echo "El nombre introduït no es valid";
}
    ?>
</table>