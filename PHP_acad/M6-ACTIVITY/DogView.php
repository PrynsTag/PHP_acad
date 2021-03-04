<?php
    require_once "dbConnection.inc";
    $sql = "SELECT * FROM dogregister.dogrecord;";
if (isset($conn)) {
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        echo "<table align='center' border='1' cellpadding='10'>";
        echo    "<tr>";
        echo    "<td>Dog</td>";
        echo    "<td>Name</td>";
        echo    "<td>Breed</td>";
        echo    "<td>Age</td>";
        echo    "<td>Address</td>";
        echo    "<td>Color</td>";
        echo    "<td>Height</td>";
        echo    "<td>Weight</td>";
        echo    "</tr>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "</tr>";
        }
    }
}