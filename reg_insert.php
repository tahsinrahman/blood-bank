<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("blood_bank", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$area = $_POST['area'];
$blood_group = $_POST['blood_group'];
$last_donation_date = $_POST['last_donation_date'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into donor(name, email, telephone, password, sex, area, blood_group, last_donation_date) values ('$name', '$email', '$telephone', '$password', '$sex', '$area', '$blood_group', '$last_donation_date')");
}
}
mysql_close($connection); // Closing Connection with Server


include "index.html";


?>

