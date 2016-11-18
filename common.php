<?php
	function check($result, $message) {
	    if (!$result) {
	        die("SQL error during $message: " . mysql_error());
	    }
	}
	function do_query($query) {
	    $db = new PDO("mysql:dbname=application;host=localhost", "root");
	    $results = $db->query($query);
	    check($results, "mysql_query(\"$query\")");
	    return $results;
	 }
?>