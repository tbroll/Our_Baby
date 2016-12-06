 <?php
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