<?php

    echo "<table>";
        for($i = 1; $i < 101; $i++)
        {
            echo "<tr>";
                for($j = 1; $j < 101; $j++)
                {
                    echo "<td>$i*$j</td>";
                }
            echo "</tr>";
        }
    echo "</table>";
?>