<?php
if ($result_check > 0) {
    echo link_tag("assets/css/viewuser.css");
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
    echo '<th class="column3">Last Name</th>';
    echo '<th class="column4">Email</th>';
    echo '<th class="column5">Username</th>';
    echo '<th class="column6">User Level</th>';
    echo '<th class="column7">Verified</th>';
    echo '<th class="column8 text-center">Avatar</th>';
    echo '</tr>';
    echo '</thead>';

    echo "<tbody>";
    foreach ($query_result as $row) {
        echo "<tr>";
        echo "<td class='column1'>" . $row->tsa3_id . "</td>";
        echo "<td class='column2'>" . $row->tsa3_firstname . "</td>";
        echo "<td class='column3'>" . $row->tsa3_lastname . "</td>";
        echo "<td class='column4'>" . $row->tsa3_email . "</td>";
        echo "<td class='column5'>" . $row->tsa3_username . "</td>";
        echo "<td class='column6'>" . $row->tsa3_user_level . "</td>";
        echo "<td class='column7'>" . $row->tsa3_is_verified . "</td>";
        echo "<td class='column8 text-center'>" . "<img src=" . base_url() . "assets/upload/" . $row->tsa3_avatar . " " .
            "class=" . "img-radius" . " " .
            "height=" . "50" . " " .
            "width=" . "50" . " " .
            "alt=" . "User-Profile-Image" . ">" .
            "</td>";

        echo "</tr>";
    }
    echo "</tbody>";

    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>