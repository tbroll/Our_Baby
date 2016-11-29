<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lab Application Admin</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="admin.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"type="text/javascript"></script>
		<script type="text/javascript" src="getApplicant.js" ></script>
		<?php
			include 'common.php';
			$query = init_query();
			$stud= $query[1];
			$maj = $query[2];
			$min = $query[3];
		?>
	</head>
	<body>
	  <div id="wrapper">
		<header>
			<h1>Applicants: <h1>
		</header>
		<main>
			<div id=table>
				<?php foreach ($stud as $row1){?>
				<div id="<?=$row1["S_ID"]?>" class="studapp">
					<?=$row1["fname"]?> <?=$row1["lname"]?> 
					<div class="major">
						<strong>Major:</strong> 
						<?php $i = 0; 
							foreach ($maj as $row2){
							$maj1[$i]["major"] = $row2["major"];
							$maj1[$i]["S_ID"] = $row2["S_ID"];
							$i+=1;
							if ($row1["S_ID"] == $row2["S_ID"]){?>
							<?= $row2["major"];?>
						<?php } 
						  }
						  $maj = $maj1?>
					</div>
					<div class="minor">
						<strong>Minor:</strong> 
						<?php $i = 0; 
							foreach ($min as $row3){
							$min1[$i]["minor"] = $row3["minor"];
							$min1[$i]["S_ID"] = $row3["S_ID"];
							$i+=1;
							if ($row1["S_ID"] == $row3["S_ID"]){?>
							<?= $row3["minor"];?>
						<?php } 
						  }
						  $maj = $maj1?>
					</div>
					<div class="expected">
						<strong>Expected Graduation:</strong> 
						<?=$row1["expected_grad"] ?>
					</div>
					<div class="moreinfo close"></div>
					
				</div>
				
				<?php } ?>
			</div>
		</main>
		<hr>
	  </div>
	</body>
</html>