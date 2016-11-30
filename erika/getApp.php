<?php

//activities

include 'common.php';
$id = $_POST["id"];
$actquery = "SELECT * FROM activities WHERE activities.S_ID= \"$id\""; 
$actreturn= do_query($actquery);
$act = false; $ac = 0; 
foreach ($actreturn as $row){
	$act1[$ac]["activity"] = $row["activity"];
	$act1[$ac]["time_per_week"] = $row["time_per_week"];
	if($row["activity"]){
		$act=true;
	}
}
if (isSet($act1)){
	$actreturn = $act1;
}

//course

$coursequery = "SELECT * FROM courses WHERE courses.S_ID= \"$id\""; 
$coursereturn= do_query($coursequery);
$course = false; $ac = 0; 
foreach ($coursereturn as $row){
	$course1[$ac]["name"] = $row["name"];
	$course1[$ac]["course_num"] = $row["course_num"];
	$course1[$ac]["term"] = $row["term"];
	$course1[$ac]["instructor"] = $row["instructor"];
	$course1[$ac]["grade"] = $row["grade"];
	$course1[$ac]["rep"] = $row["rep"];
	if($row["name"]){
		$course=true;
	}
}
if (isSet($course1)){
	$coursereturn = $course1;
}

//skills

$skillsquery = "SELECT * FROM skills WHERE skills.S_ID= \"$id\""; 
$skillsreturn= do_query($skillsquery);
$skills = false; $ac = 0; 
foreach ($skillsreturn as $row){
	$skills1[$ac]["skill"] = $row["skill"];
	$skills1[$ac]["Rate"] = $row["Rate"];
	if($row["skill"]){
		$skills=true;
	}
}
if (isSet($skills1)){
	$skillsreturn = $skills1;
}

//availability

$availquery = "SELECT * FROM workinfo WHERE workinfo.S_ID= \"$id\"" ; 
$availreturn= do_query($availquery);
$avail = false; $ac = 0; 
foreach ($availreturn as $row){
	$avail1[$ac]["hours"] = $row["hours"];
	$avail1[$ac]["oncampus"] = $row["oncampus"];
	$avail1[$ac]["practicum"] = $row["practicum"];
	$avail1[$ac]["summer"] = $row["summer"];
	if($row["S_ID"]){
		$avail=true;
	}
}
if (isSet($avail1)){
	$availreturn = $avail1;
}

//oncampus

$onquery = "SELECT * FROM everoncamp WHERE everoncamp.S_ID= \"$id\"" ; 
$onreturn= do_query($onquery);
$on = false; $ac = 0; 

foreach ($onreturn as $row){
	$on1[$ac]["evercamp"] = $row["evercamp"];
	if($row["S_ID"]){
		$on=true;
	}
}

if (isSet($on1)){
	$onreturn = $on1;
}

//whereoncampus

$wherequery = "SELECT * FROM oncampuswhere WHERE oncampuswhere.S_ID= \"$id\"" ; 
$wherereturn= do_query($wherequery);
$where = false; $ac = 0; 

foreach ($wherereturn as $row){
	$where1[$ac]["whereoncamp"] = $row["whereoncamp"];
	if($row["S_ID"]){
		$where=true;
	}
}

if (isSet($where1)){
	$wherereturn = $where1;
}

//practicum

$pracquery = "SELECT * FROM practicum WHERE practicum.S_ID= \"$id\"" ; 
$pracreturn= do_query($pracquery);
$prac = false; $ac = 0; 

foreach ($pracreturn as $row){
	$prac1[$ac]["practicum"] = $row["practicum"];
	if($row["S_ID"]){
		$prac=true;
	}
}

if (isSet($prac1)){
	$pracreturn = $prac1;
}

//general

$genquery = "SELECT * FROM student WHERE student.S_ID= \"$id\"" ; 
$genreturn= do_query($genquery);
$gen = false; $ac = 0; 

foreach ($genreturn as $row){
	$gen1[$ac]["address"] = $row["address"];
	$gen1[$ac]["city"] = $row["city"];
	$gen1[$ac]["sta"] = $row["sta"];
	$gen1[$ac]["zip"] = $row["zip"];
	$gen1[$ac]["phone"] = $row["phone"];
	$gen1[$ac]["email"] = $row["email"];
	$gen1[$ac]["birth_date"] = $row["birth_date"];
	$gen1[$ac]["citizenship"] = $row["citizenship"];
	if($row["S_ID"]){
		$gen=true;
	}
}

if (isSet($gen1)){
	$genreturn = $gen1;
}

?>

<?php if ($gen){ ?>

<table><caption>General Information</caption><tr><th>Address</th><th>Phone</th>
<th>Email</th><th>Date of Birth</th><th>Citizenship</th></tr>
<?php foreach ($genreturn as $row){?>
	<tr>
	<td><?=$row["address"]?>
	<?=$row["city"]?>
	<?=$row["sta"]?>
	<?=$row["zip"]?></td>
	<td><?=$row["phone"]?></td>
	<td><?=$row["email"]?></td>
	<td><?=$row["birth_date"]?></td>
	<td><?=$row["citizenship"]?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>

<?php if ($act){ ?>

<table><caption>Activities</caption><tr><th>Activity</th><th>Time per Week</th></tr>
<?php foreach ($actreturn as $row){?>
	<tr>
	<td><?=$row["activity"]?></td>
	<td><?=$row["time_per_week"]?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>

<?php if ($course){ ?>
<table><caption>Courses</caption><tr><th>Course</th><th>Course Number</th><th>Term</th><th>Instructor</th><th>Grade</th><th>Repeat?</th></tr>
<?php foreach ($coursereturn as $row){?>
	<tr>
	<td><?=$row["name"]?></td>
	<td><?=$row["course_num"]?></td>
	<td><?=$row["term"]?></td>
	<td><?=$row["instructor"]?></td>
	<td><?=$row["grade"]?></td>
	<td><?php if ($row["rep"] == 0){
	print "no";
	}else{ print "yes";
	}?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>

<?php if ($skills){ ?>
<table><caption>Skills</caption><tr><th>Skill</th><th>Rating</th></tr>
<?php foreach ($skillsreturn as $row){?>
	<tr>
	<td><?=$row["skill"]?></td>
	<td><?=$row["Rate"]?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>

<?php if ($avail){ ?>
<table><caption>Availability</caption>
<tr><th>Can work 15-20 hrs/wk</th>
<th>Working on Campus</th>
<?php if ($on){print "<th>Worked on Campus</th>";} ?>
<?php if ($where){print "<th>Where on Campus</th>";} ?>
<th>Planning a Practicum</th>
<?php if ($where){print "<th>When and How Long</th>";} ?>
<th>Can work summers</th></tr>
<?php foreach ($availreturn as $row){?>
	<tr>
	<td><?php if ($row["hours"] == 0){
	print "no";
	}else{ print "yes";
	}?></td>
	
	<td><?php if ($row["oncampus"] == 0){
	print "no";
	}else{ print "yes";
	}?></td>
	
	<?php foreach ($onreturn as $row1){if ($on){if ($row1["evercamp"] == 0){
	print "<td>no</td>";
	}else{ print "<td>yes</td>";
	}}} ?>
	
	<?php foreach ($wherereturn as $row1){if ($where){
		$wher = $row1["whereoncamp"];
	print "<td>$wher</td>";}} ?>
	
	<td><?php if ($row["practicum"] == 0){
	print "no";
	}else{ print "yes";
	}?></td>
	
	<?php foreach ($pracreturn as $row1){if ($prac){
		$pract = $row1["practicum"];
	print "<td>$pract</td>";}} ?>
	
	<td><?php if ($row["summer"] == 0){
	print "no";
	}else{ print "yes";
	}?></td>
	</tr>
<?php } ?>
</table>
<?php } ?>