<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>
Confirmation Page
</title>
<script type = "text/javascript" src = "../resources/js/submitQueries.js">
</script>
</head>
<?php
if(isset($_POST["firstName"])){
    $firstname = $_POST["firstName"];
}
if(isset($_POST["lastName"])){
    $lastname = $_POST["lastName"];
}
if(isset($_POST["address"])){
    $address = $_POST["address"];
}
if(isset($_POST["phoneNumber"])){
    $phoneNumber = $_POST["phoneNumber"];
}
if(isset($_POST["city"])){
    $city = $_POST["city"];
}
if(isset($_POST["state"])){
    $state = $_POST["state"];
}
if(isset($_POST["zipCode"])){
    $zip = $_POST["zipCode"];
}
if(isset($_POST["month"])){
    switch($_POST["month"]){
    case 1:
        $DOB_month = "January";
        break;
    case 2:
        $DOB_month = "Febuary";
        break;
    case 3:
        $DOB_month = "March";
        break;
    case 4:
        $DOB_month = "April";
        break;
    case 5:
        $DOB_month = "May";
        break;
    case 6:
        $DOB_month = "June";
        break;
    case 7:
        $DOB_month = "July";
        break;
    case 8:
        $DOB_month = "August";
        break;
    case 9:
        $DOB_month = "September";
        break;
    case 10:
        $DOB_month = "October";
        break;
    case 11:
        $DOB_month = "November";
        break;
    default:
        $DOB_month = "December";
    }
}
if(isset($_POST["day"])){
    $DOB_day = $_POST["day"];
}
if(isset($_POST["year"])){
    $DOB_year = $_POST["year"];
}
if(isset($_POST["citizenship"])){
    $citizenship = $_POST["citizenship"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["majors"])){
    $majors = $_POST["majors"];
}
if(isset($_POST["minors"])){
    $minors = $_POST["minors"];
}
if(isset($_POST["graduationDate"])){
    $graduationDate = $_POST["graduationDate"];
}
if(isset($_POST["canYouWorkSummers"])){
    $workSummers = "YES";
}
else{
    $workSummers = "NO";
}
if(isset($_POST["canYouWorkDuringYear"])){
    $workDuringYear = "YES";
}
else{
    $workDuringYear = "NO";
}
if(isset($_POST["workOnCampusCurrently"])){
    $workcc = "YES";
}
else{
    $workcc = "NO";
}
if(isset($_POST["workOnCampusPast"])){
    $workOnCampusPast = "YES";
    $ww = $_POST["wwOnCampus"];
}
else{
    $workOnCampusPast = "NO";
}

//Practicum

if(isset($_POST["Practicum"])){
    $practicum = "YES";
    $practHowLong = $_POST["PracHowLong"];
}
else{
    $practicum = "NO";
}

//Skills

if($_POST["skill1"] != null){
    $skill1 = $_POST["skill1"];
    $rating1 = $_POST["rating1"];
}
else{
$skill1 = "";
$rating1 = "";
}
if($_POST["skill2"] != null){
    $skill2 = $_POST["skill2"];
    $rating2 = $_POST["rating2"];
}
else{
$skill2 = "";
$rating2 = "";
}
if($_POST["skill3"] != null){
    $skill3 = $_POST["skill3"];
    $rating3 = $_POST["rating3"];
}
else{
$skill3 = "";
$rating3 = "";
}
if($_POST["skill4"] != null){
    $skill4 = $_POST["skill4"];
    $rating4 = $_POST["rating4"];
}
else{
$skill4 = "";
$rating4 = "";
}
if($_POST["skill5"] != null){
    $skill5 = $_POST["skill5"];
    $rating5 = $_POST["rating5"];
}
else{
$skill5 = "";
$rating5 = "";
}

//Activities

if($_POST[""] != null){
    $skill5 = $_POST[""];
    $rating5 = $_POST[""];
}
else{
$skill5 = "";
$rating5 = "";
}
?>
<body>
<header>
<h1>Thank you <?=$firstname?> <?=$lastname?> for applying to the testing lab</h1>
</header>
<main>
<table>
<tr>
<th>Submitted Information</th>
</tr>
<tr>
<td>First Name</td>
<td><?=$firstname?></td>
</tr>
<tr>
<td>Last Name</td>
<td><?=$lastname?></td>
</tr>
<tr>
<td>Address</td>
<td><?=$address?></td>
</tr>
<tr>
<td>City</td>
<td><?=$city?></td>
</tr>
<tr>
<td>state</td>
<td><?=$state?></td>
</tr>
<tr>
<td>zip code</td>
<td><?=$zip?></td>
</tr>
<tr>
<td>phone number</td>
<td><?=$phoneNumber?></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><?=$DOB_month?> <?=$DOB_day?>, <?=$DOB_year?></td>
</tr>
<tr>
<td>major</td>
<td><?=$majors?></td>
</tr>
<tr>
<td>minor</td>
<td><?=$minors?></td>
</tr>
<tr>
<td>Graduation Date</td>
<td><?=$graduationDate?></td>
</tr>
<tr>
<td>Work During Summer?</td>
<td><?=$workSummers?></td>
</tr>
<tr>
<td>Work on Campus Currently</td>
<td><?=$workcc?></td>
</tr>
<tr>
<td>Work on Campus Past?</td>
<td><?=$workOnCampusPast?></td>
<td><?=$ww?></td>
</tr>
<tr>
<td>Practicum?</td>
<td><?=$practicum?></td>
<td><?=$practHowLong?></td>
</tr>
</table>
<hr>
<table>
<tr>
<th>Skills</th>
<th>ratings</th>
</tr>
<tr>
<td> <?=$skill1?> <?=$rating1?></td>
</tr>
<tr>
<td> <?=$skill2?> <?=$rating2?></td>
</tr>
<tr>
<td> <?=$skill3?> <?=$rating3?></td>
</tr>
<tr>
<td> <?=$skill4?> <?=$rating4?></td>
</tr>
<tr>
<td> <?=$skill5?> <?=$rating5?></td>
</tr>
</table>
<button id = "submit">Submit</button>
</main>
</body>
</html>
