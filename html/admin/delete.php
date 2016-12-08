<?php
	
	//set up query
	$db = new PDO("mysql:dbname=ourbaby;host=localhost", "root");
	
	$id = $_POST["id"];
	$nombre = "";
	
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//get name to delete
	$primary = $db->query("SELECT fname,lname FROM `student` WHERE S_ID = $id");
	
	foreach ($primary as $key=>$val){
			$nombre .=$val["fname"];
			$nombre .=$val["lname"];
	}
	
	//delete from student
	$sql = 'DELETE FROM `student` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from major and minor
	$sql = 'DELETE FROM `major` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	$sql = 'DELETE FROM `minor` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from workinfo
	$sql = 'DELETE FROM `workinfo` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from skills
	$sql = 'DELETE FROM `skills` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from practicum
	$sql = 'DELETE FROM `practicum` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from oncampuswhere
	$sql = 'DELETE FROM `oncampuswhere` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from everoncamp
	$sql = 'DELETE FROM `everoncamp` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from courses
	$sql = 'DELETE FROM `courses` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from activities
	$sql = 'DELETE FROM `activities` WHERE ';
	$sql.= 'S_ID = :id ';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':id', $id ,PDO::PARAM_STR);
	$stmt->execute();
	
	//delete from filesystem
	array_map('unlink', glob($_SERVER['DOCUMENT_ROOT'] .'/ourbaby/applicants/'. $id."/*.*"));
	rmdir($_SERVER['DOCUMENT_ROOT'] .'/ourbaby/applicants/'. $id);
	
	//close the connection
	$db= null;
	?>
	
	<p> Deleted <?= $nombre ?></p>