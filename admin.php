<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lab Application Admin</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="admin.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"type="text/javascript"></script>
		<script type="text/javascript" src="getApplicant.js" ></script>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
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
			<h1>Testing Lab Applicants<h1>
			<p>(Click heading to expand or hide)</p>
		</header>
		<nav>
			<button id="edit">Edit Applicants</button>
			<div class="buffer"></div>
		</nav>
		<main>
			<div id=table>
				<?php foreach ($stud as $row1){?>
				<div id="<?=$row1["S_ID"]?>" class="studapp">
					<div class="top">
					<div class="check"><input type="checkbox" hidden></div>
					<h2><?=$row1["fname"]?> <?=$row1["lname"]?></h2> 
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
					</div>
					<div class="moreinfo close">
						<div class="insert"></div>
						<div class="buttons">
							<form method="POST" action="applicants/<?=$row1["S_ID"]?>/app.pdf">
							<input type="submit" class="easyprint" value="Easy Print" hidden></button>
							</form>
							<p></p>
						</div>
					</div>
				</div>
				<div class="buffer"></div>
				<?php } ?>
			</div>
			<div>
				<button id="delete" hidden>Delete</button>
			</div>
		</main>
		<footer>
		</footer>
	  </div>
	</body>
</html>