<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 21/03/2016
 * Time: 10:09
 */
echo "<form action='superResults.php' method='post'>
    <table>
        <tr><label>Forename</label><input type ='text' name='forename'></tr>
        <tr><label>Surname</label><input type ='text' name='surname'></tr>
        <tr><td><label>Gender</label><input type ='radio' name='gender' value='Male'></td>
                             <td><input type ='radio' name='gender' value='female'></td></tr>
        <tr><label>Superpower</label><input type ='text' name='power'></tr>
    </table>";
?>