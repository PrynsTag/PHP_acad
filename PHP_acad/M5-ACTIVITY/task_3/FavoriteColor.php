<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Activity</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    tbody>input {
        float: left;
        clear: both;
    }
</style>
<body>
<form action="" method="post">
    <table align="center" cellpadding="10" border="1" width="500">
        <tr>
            <th align="center" colspan="2">Enter your favorite color</th>
        </tr>

        <tbody>
        <tr>
            <td>Favorite color 1:</td>
            <td>
                <label>
                    <input type="text"
                           name="color1"
                           maxlength="30"
                           placeholder="color 1"
                           required/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Favorite color 2:</td>
            <td>
                <label>
                    <input type="text"
                           name="color2"
                           maxlength="30"
                           placeholder="color 2"
                           required/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Favorite color 3:</td>
            <td>
                <label>
                    <input type="text"
                           name="color3"
                           maxlength="30"
                           placeholder="color 3"
                           required/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Favorite color 4:</td>
            <td>
                <label>
                    <input type="text"
                           name="color4"
                           maxlength="30"
                           placeholder="color 4"
                           required/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Favorite color 5:</td>
            <td>
                <label>
                    <input type="text"
                           name="color5"
                           maxlength="30"
                           placeholder="color 5"
                           required/>
                </label>
            </td>
        </tr>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit"
                           name="submit"
                           value="submit colors"
                    />
                </td>
            </tr>
        </tfoot>
    </table>
</form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        session_start();
        $_SESSION["color1"] = $_POST["color1"];
        $_SESSION["color2"] = $_POST["color2"];
        $_SESSION["color3"] = $_POST["color3"];
        $_SESSION["color4"] = $_POST["color4"];
        $_SESSION["color5"] = $_POST["color5"];
        header("Location: ResultColors.php");
    }
?>