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

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$power = $_POST['power'];


$sql = "INSERT INTO Superhero (firstName, lastName, mainSuperpower) VALUES (".$firstname.", ".$surname.", ".$power.")";


?>