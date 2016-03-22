<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 21/03/2016
 * Time: 10:38
 */
$db= new mysqli(
    "eu-cdbr-azure-west-d.cloudapp.net",
    "b272f5632b6bab",
    "fda91417",
    "Superhero"
);

if($db -> connect_errno){
    die('Connect Failed['.$db->connect_error.']');
}

$sql = "SELECT * FROM superheros";
$results = $db->query($sql);

        print "<table id='results'>\n";
        echo "<th>Title</th><th>Platform</th><th>Genre</th><th>Year</th><th id='age'>Age Rating</th><th id='desc'>Description</th><th>Borrow</th>";
        foreach ($sql as $row) {
            echo "<tr>";
            echo "<td>" . $row["superheroID"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "<td>" . $row["mainSuperpower"] . "</td>";
        }
        print "</table>\n";

$result->close();
$db->close();
?>