<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 21/03/2016
 * Time: 10:09
 */
echo "<form action='superResults.php' method='post'>
    <table>
        <tr><td><label>Forename </label><input type ='text' name='forename'></td></tr>
        <tr><td><label>Surname </label><input type ='text' name='surname'></td></tr>
        <tr><td><label>Gender </label><input type ='radio' name='gender' value='Male'>Male</td>
                             <td><input type ='radio' name='gender' value='female'>Female</td></tr>
        <tr><td><label>Superpower </label><input type ='text' name='power'></td></tr>
        <tr><td><input type='submit' name='Submit'></td></tr>
    </table>";
?>