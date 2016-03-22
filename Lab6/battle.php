<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 21/03/2016
 * Time: 10:09
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

$sql = "SELECT firstname, lastname FROM superheros";
$results = $db->query($sql);


echo "<form action='insertbattle.php' method='post'>
    <table>
        <tr><td><label>Superhero </label><select name='Superhero'></td></tr>";
foreach ($results as $row) {
    echo "<option value=" . $row['firstName'] . " " . $row['lastName'] . ">";
    echo $row['firstName'] . " " . $row['lastName'];
    echo "</option>";
}
echo "<tr><td><label>Villain Fought </label><input type ='text' name='surname'></td></tr>
    </table>
    </form>";

$db->close();
?>