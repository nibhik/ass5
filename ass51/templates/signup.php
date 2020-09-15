<form action="?req=auth" method="post">

<table border="1">

<tr>
            <td>First Name</td>
            <td>
                <input type="text" name = "first_name">
            </td>
        </tr>
        <td>Last name</td>
            <td>
                <input type="text" name = "last_name">
            </td>
        </tr>
        <td>Email</td>
            <td>
                <input type="text" name = "email">
            </td>
        </tr>
        <td>Username</td>
            <td>
                <input type="text" name = "username">
            </td>
        </tr>

        <tr>
            <td>Password</td>
        <td>
            <input type="passowrd" name="password">

        </td></tr> 
        <tr>
            <td>repeat Password</td>
        <td>
            <input type="passowrd" name="re-enter_password">

        </td></tr> 
        <td colspan="2" align="center">
                <input type="submit" value = "Login">
            </td>
        </tr>

</table>
<?php
        if ($msg != "   ") {
            echo "<div style='color:red'><h3>$msg</h3></div>";
        }
    ?>
</form>