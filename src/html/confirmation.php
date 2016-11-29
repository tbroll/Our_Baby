<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>
Confirmation Page
</title>
<script type = "text/javascript" src = ""></script>
</head>
<?php
$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$address = $_POST["address"];
$phoneNumber = $_POST["phoneNumber"];

$city = $_POST["city"];
$state = $_POST["state"];
$zipCode = $_POST["zipCode"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];

$citizenship = $_POST["citizenship"];
$email = $_POST["email"];
$majors = $_POST["majors"];
$minors = $_POST["minors"];
$graduationDate = $_POST["graduationDate"];

$workSummers = $_POST["canYouWorkSummers"];
$workSchoolYear = $_POST["canYouWorkDuringYear"];

$workOnCampusCurrently = $_POST["workOnCampusCurrently"];
$workOnCampusPast = $_POST["workOnCampusPast"];

$ww = $_POST["wwOnCampus"];

$practicum = $_POST["Practicum"];
$practHowLong = $_POST["PracHowLong"];

$skill1 = $_POST["skill1"];
$skill2 = $_POST["skill2"];
$skill3 = $_POST["skill3"];
$skill4 = $_POST["skill4"];
$skill5 = $_POST["skill5"];

$rating1 = $_POST["rating1"];
$rating2 = $_POST["rating2"];
$rating3 = $_POST["rating3"];
$rating4 = $_POST["rating4"];
$rating5 = $_POST["rating5"];
?>
<body>
<header>
<h1>Thank you <?=$firstname?> <?=$lastname?> for applying to the testing lab</h1>
</header>
<main>
</main>
</body>
</html>
