<?php
require_once "dbConnection.inc";

if (isset($conn) && $conn) {
    $query = "SELECT * FROM sa4_database.sa4_table;";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo '<link rel="stylesheet" href="assets/css/viewuser.css">';
        echo '<div class="limiter">';
        echo '<div class="container-table100">';
        echo '<div class="wrap-table100">';
        echo '<div class="table100">';
        echo '<ol class="breadcrumb">';
        echo '</ol>';
        echo '</nav>';
        echo '<table>';
        echo '<thead>';
        echo '<tr class="table100-head">';
        echo '<th class="column1">ID</th>';
        echo '<th class="column2">First Name</th>';
        echo '<th class="column3">Middle Name</th>';
        echo '<th class="column4">Last Name</th>';
        echo '<th class="column5">Contact No.</th>';
        echo '<th class="column6">Email</th>';
        echo '<th class="column7">Birthday</th>';
        echo '<th class="column8">Username</th>';
        echo '<th class="column9">Access Level</th>';
        echo '<th class="column10">Status</th>';
        echo '</tr>';
        echo '</thead>';

        echo "<tbody>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td class='column1'>" . $row["id"] . "</td>";
            echo "<td class='column2'>" . $row["first_name"] . "</td>";
            echo "<td class='column3'>" . $row["middle_name"] . "</td>";
            echo "<td class='column4'>" . $row["last_name"] . "</td>";
            echo "<td class='column5'>" . $row["contact"] . "</td>";
            echo "<td class='column6'>" . $row["email"] . "</td>";
            echo "<td class='column7'>" . $row["birthday"] . "</td>";
            echo "<td class='column8'>" . $row["username"] . "</td>";
            echo "<td class='column9'>" . $row["access_level"] . "</td>";
            echo "<td class='column10'>" . $row["status"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";

        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    die("Connection failed: " . mysqli_error($conn));
}
require_once "footer.php";
?>