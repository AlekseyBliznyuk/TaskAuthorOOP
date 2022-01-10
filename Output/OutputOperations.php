<?php

require_once 'Input/InputOperations.php';

class OutputOperations
{
    function outputValues($result)
    {
        echo "<table><tr><th>id</th><th>name</th><th>DateOfBirth</th><th>approved</th></tr>";
        foreach ($result as $row) {
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["date_of_birth"] . "</td>";
            echo "<td>" . $row["approved"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}