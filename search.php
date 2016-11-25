<?php
	//echo "hi";
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
	$db = mysql_select_db("blood_bank", $connection); // Selecting Database from Server

	//echo "hi1";
	if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

		//include "index.html";
	
		$blood_group = $_POST['blood_group'];
		$sql = mysql_query("SELECT * FROM donor WHERE blood_group LIKE '$blood_group'");

		echo $blood_group;
		echo "<br>";
		
		while($result = mysql_fetch_array( $sql )) {
			echo $result['name'];
			echo $result['telephone'];
			echo $result['email'];
			echo "<br>";
		}
	}
	mysql_close($connection); // Closing Connection with Server


	
?>
