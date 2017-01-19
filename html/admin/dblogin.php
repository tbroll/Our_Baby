 <?php
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$query = "SELECT * FROM user ";
	$db = new PDO("mysql:dbname=adminlogin;host=localhost", "root");
    $results = $db->query($query);
	
	foreach($results as $key){
		if($key["username"] == $user && $key["password"] == $pass){
			print("true");
		}else{
			print(null);
		}
	}
?>