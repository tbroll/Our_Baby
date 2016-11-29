<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lab Application Admin</title>
		<meta charset="utf-8">
		<script src="../resources/js/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../resources/js/getApplicant.js" ></script>
		<?php
			$query = do_query("SELECT * FROM student");
		?>
	</head>
	<body>
	  <div id="wrapper">
		<header>
			<h1>Applicants: <h1>
		</header>
		<main>
			<div id="table">
			<table>
				<?php foreach ($query as $row){?>
				<tr>
					<td><?=$row["fname"]?> <?=$row["lname"]?></td>
					<td><?=$row["phone"]?></td>
					<td><?=$row["email"]?></td>
					<td><?=$row["address"]?></td>
					<td><?=$row["city"]?></td>
					<td><?=$row["sta"]?></td>
					<td><?=$row["zip"]?></td>
					<td><?=$row["birth_date"]?></td>
					<td><?=$row["citizenship"]?></td>
					<td><?=$row["expected_grad"]?></td>
				</tr>
				<?php } ?>
			</table>
			</div>
			<div id="in">
			</div>
			<p>The End.</p>
		</main>
		<hr>
	  </div>
	</body>
</html>
