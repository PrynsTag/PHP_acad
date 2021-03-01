<table>
    <tbody>
    <tr>
        <td>
            First Name:
            <label>
                <input type="text"
                       name="first_name"
                       placeholder="First Name"
                       maxlength="30"
                       required
                >
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Middle Name:
            <label>
                <input type="text"
                       name="middle_name"
                       placeholder="Middle Name"
                       maxlength="30"
                >
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Last Name:
            <label>
                <input type="text"
                       name="last_name"
                       placeholder="Last Name"
                       maxlength="30"
                       required
                >
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Date of Birth:
            <label>
                <input type="text"
                       name="date_of_birth"
                       placeholder="Date of Birth"
                       maxlength="30"
                >
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Address:
            <label>
                <input type="text"
                       name="address"
                       placeholder="Address"
                       maxlength="30"
                >
            </label>
        </td>
    </tr>
    </tbody>

    <tfoot>
    <tr>
        <td align="center">
            <input type="submit" name="submit" value="submit">
        </td>
    </tr>
    </tfoot>
</table>
</form>
</body>
</html>

<?php
function test_request($action, $message)
{
    if (isset($action["submit"])) {
        $firstName = $action["first_name"];
        $middleName = $action["middle_name"];
        $lastName = $action["last_name"];
        $dateBirth = $action["date_of_birth"];
        $address = $action["address"];
        $format = "First Name: %s\n" .
            "Middle Name: %s\n" .
            "Last Name: %s\n" .
            "Date of Birth: %s\n" .
            "Address: %s";
        echo "<pre>";
        echo "<h1 style='text-align: center'>" . $message . "</h1>";
        echo sprintf($format,
            $firstName,
            $middleName,
            $lastName,
            $dateBirth,
            $address);
    }
}

?>