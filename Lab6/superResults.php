<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 21/03/2016
 * Time: 10:10
 */
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $power = $_POST['power'];

    echo "<table>
                <tr>".$forename.$surname."</tr>
                <tr>".$gender."</tr>
                <tr>".$power."</tr>
          </table>";
?>