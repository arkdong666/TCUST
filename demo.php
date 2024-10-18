<?php

function generateOptions()
{
    for ($i = 1; $i <= 9; $i++) {
        echo "<option value=\"$i\">$i</option>";
    }
}

function generateTable()
{
    echo "<table border='1' style='border-collapse: collapse;'>";
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            $result = $i * $j;
            echo "<td>$i x $j = $result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
