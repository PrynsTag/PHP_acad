<?php
require_once "./dbConnection.inc";
require_once "header.php";

if (isset($conn) && $conn) {
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        $query = "SELECT * FROM `user/admin_database`.record;";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            echo '<link rel="stylesheet" href="css/viewuser.css">';
            echo '<div class="limiter">';
            echo '<div class="container-table100">';
            echo '<div class="wrap-table100">';
            echo '<div class="table100">';
            echo '<ol class="breadcrumb">';
            echo '<li class="breadcrumb-item"><a href="profile.php">Main Account</a></li>';
            echo '<li class="breadcrumb-item active" aria-current="page">View Record</li>';
            echo '</ol>';
            echo '</nav>';
            echo '<table>';
            echo '<thead>';
            echo '<tr class="table100-head">';
            echo '<th class="column1">ID</th>';
            echo '<th class="column2">Email</th>';
            echo '<th class="column3">Username</th>';
            echo '<th class="column4">Password</th>';
            echo '<th class="column5">Userlevel</th>';
            echo '<th class="column6">Status</th>';
            echo '</tr>';
            echo '</thead>';

            echo "<tbody>";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td class='column1'>" . $row["id"] . "</td>";
                echo "<td class='column2'>" . $row["email"] . "</td>";
                echo "<td class='column3'>" . $row["username"] . "</td>";
                echo "<td class='column4'>" . $row["password"] . "</td>";
                echo "<td class='column5'>" . $row["userlevel"] . "</td>";
                echo "<td class='column6'>" . $row["status"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";

            echo '</table>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
} else {
    die("Connection failed: " . mysqli_error($conn));
}
require_once "footer.php";
?>