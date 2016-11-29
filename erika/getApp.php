<?php
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
?>
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

