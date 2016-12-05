<?php
	function check($result, $message) {
	    if (!$result) {
	        die("SQL error during $message: " . mysql_error());
	    }
	}
	function do_query($query) {
	    $db = new PDO("mysql:dbname=ourbaby;host=localhost", "root");
	    $results = $db->query($query);
	    check($results, "mysql_query(\"$query\")");
	    return $results;
	 }
	 function init_query()	{
		$query = "SELECT * FROM student";
		$db = new PDO("mysql:dbname=ourbaby;host=localhost", "root");
	    $results[1] = $db->query($query);
	    check($results[1], "mysql_query(\"$query\")");
		
		$query = "SELECT DISTINCT major, major.S_ID FROM major, student";
		$db = new PDO("mysql:dbname=ourbaby;host=localhost", "root");
	    $results[2] = $db->query($query);
	    check($results[2], "mysql_query(\"$query\")");
		
		$query = "SELECT DISTINCT minor, minor.S_ID FROM minor, student";
		$db = new PDO("mysql:dbname=ourbaby;host=localhost", "root");
	    $results[3] = $db->query($query);
	    check($results[3], "mysql_query(\"$query\")");
		
	    return $results;
	 }
	 function login($user, $pass) {
		$query = "SELECT * FROM user ";
		$db = new PDO("mysql:dbname=adminlogin;host=localhost", "root");
	    $results = $db->query($query);
		
		$bae = "false";
		foreach($results as $key -> $val){
			$bae = "false";
			if($key["username"] == $user && $key["password"] == $pass){
				$bae = $key["username"];
			}
		}
		echo $bae;
	 }
?>