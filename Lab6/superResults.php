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
                <tr><td>".$forename.$surname."</td></tr>
                <tr><td>".$gender."</td></tr>
                <tr><td>".$power."</td></tr>
          </table>";
?>