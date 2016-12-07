<?php
if(isset($_POST["firstName"])){
    $firstname = $_POST["firstName"];
}
if(isset($_POST["lastName"])){
    $lastname = $_POST["lastName"];
}
if(isset($_POST["s_id"])){
    $s_id = $_POST["s_id"];
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
    $DOB_month = $_POST["month"];
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
    $ww = "";
}

//Practicum

if(isset($_POST["Practicum"])){
    $practicum = "YES";
    $pracHowLong = $_POST["PracHowLong"];
}
else{
    $practicum = "NO";
    $pracHowLong = "";
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

if($_POST["activity1"] != null){
    $activity1= $_POST["activity1"];
    $ts1 = $_POST["timeSpent1"];
}
else{
$activity1 = "";
$ts1 = "";
}
if($_POST["activity2"] != null){
    $activity2= $_POST["activity2"];
    $ts2 = $_POST["timeSpent2"];
}
else{
$activity2 = "";
$ts2 = "";
}
if($_POST["activity3"] != null){
    $activity3= $_POST["activity3"];
    $ts3 = $_POST["timeSpent3"];
}
else{
$activity3 = "";
$ts3 = "";
}
if($_POST["activity4"] != null){
    $activity4= $_POST["activity4"];
    $ts4 = $_POST["timeSpent4"];
}
else{
$activity4 = "";
$ts4 = "";
}
if($_POST["activity5"] != null){
    $activity5= $_POST["activity5"];
    $ts5 = $_POST["timeSpent5"];
}
else{
$activity5 = "";
$ts5 = "";
}
if(isset($_POST["classType"])){
    $classType = $_POST["classType"];
    $course = $_POST["course"];
    $className = $_POST["className"];
    $term = $_POST["term"];
    $grade = $_POST["grade"];
    $instructor = $_POST["instructor"];
    $retake = $_POST["retake"];
}
else{
    $classType = "";
    $course = "";
    $className = "";
    $term = "";
    $grade = "";
    $instructor = "";
    $retake = "";
}
if(isset($_POST["classType2"])){
    $classType2= $_POST["classType2"];
    $course2 = $_POST["course2"];
    $className2 = $_POST["className2"];
    $term2= $_POST["term2"];
    $grade2= $_POST["grade2"];
    $instructor2= $_POST["instructor2"];
    $retake2= $_POST["retake2"];
}
else{
    $classType2= "";
    $course2 = "";
    $className2 = "";
    $term2= "";
    $grade2= "";
    $instructor2= "";
    $retake2= "";
}
if(isset($_POST["classType3"])){
    $classType3= $_POST["classType3"];
    $course3 = $_POST["course3"];
    $className3 = $_POST["className3"];
    $term3 = $_POST["term3"];
    $grade3 = $_POST["grade3"];
    $instructor3= $_POST["instructor3"];
    $retake3= $_POST["retake3"];
}
else{
    $classType3= "";
    $course3 = "";
    $className3 = "";
    $term3 = "";
    $grade3 = "";
    $instructor3 = "";
    $retake3 = "";
}
if(isset($_POST["classType4"])){
    $classType4 = $_POST["classType4"];
    $course4 = $_POST["course4"];
    $className4 = $_POST["className4"];
    $term4 = $_POST["term4"];
    $grade4 = $_POST["grade4"];
    $instructor4 = $_POST["instructor4"];
    $retake4 = $_POST["retake4"];
}
else{
    $classType4= "";
    $course4 = "";
    $className4 = "";
    $term4 = "";
    $grade4 = "";
    $instructor4 = "";
    $retake4 = "";
}
if(isset($_POST["currentEmployee"])){
    $currentEmployee = $_POST["currentEmployee"];
}
?>
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
<td>Student ID</td>
<td><?=$s_id?></td>
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
<td><?=$DOB_month?> <?=$DOB_day?> <?=$DOB_year?></td>
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
<td><?=$pracHowLong?></td>
</tr>
</table>
<hr>
<table>
<tr>
<th>Activity</th>
<th>Time in minutes spent on activity</th>
</tr>
<tr>
<td> <?=$activity1?></td>
<td> <?=$ts1?><td>
</tr>
<tr>
<td> <?=$activity2?></td>
<td> <?=$ts2?><td>
</tr>
<tr>
<td> <?=$activity3?></td>
<td> <?=$ts3?><td>
</tr>
<tr>
<td> <?=$activity4?></td>
<td> <?=$ts4?><td>
</tr>
<tr>
<td> <?=$activity5?></td>
<td> <?=$ts5?><td>
</tr>
</table>
<hr>
<table>
<tr>
<th>Department</th>
<th>Class ID</th>
<th>Class Name</th>
<th>Term</th>
<th>Grade</th>
<th>Instructor</th>
<th>Retake?</th>
</tr>
<tr>
<td> <?=$classType?></td>
<td> <?=$course?></td>
<td> <?=$className?></td>
<td> <?=$term?></td>
<td> <?=$grade?></td>
<td> <?=$instructor?></td>
<td> <?=$retake?></td>
</tr>
<tr>
<td> <?=$classType2?></td>
<td> <?=$course2?></td>
<td> <?=$className2?></td>
<td> <?=$term2?></td>
<td> <?=$grade2?></td>
<td> <?=$instructor2?></td>
<td> <?=$retake2?></td>
</tr>
<tr>
<td> <?=$classType3?></td>
<td> <?=$course3?></td>
<td> <?=$className3?></td>
<td> <?=$term3?> </td>
<td><?=$grade3?></td>
<td> <?=$instructor3?></td>
<td> <?=$retake3?></td>
</tr>
<tr>
<td> <?=$classType4?></td>
<td> <?=$course4?> </td>
<td><?=$className4?></td>
<td> <?=$term4?></td>
<td> <?=$grade4?></td>
<td> <?=$instructor4?></td>
<td> <?=$retake4?></td>
</tr>
</table>
<hr>
<table>
<tr>
<th>Skills</th>
<th>ratings</th>
</tr>
<tr>
<td> <?=$skill1?> </td>
<td><?=$rating1?></td>
</tr>
<tr>
<td> <?=$skill2?> </td>
<td><?=$rating2?></td>
</tr>
<tr>
<td> <?=$skill3?> </td>
<td><?=$rating3?></td>
</tr>
<tr>
<td> <?=$skill4?></td>
<td> <?=$rating4?></td>
</tr>
<tr>
<td> <?=$skill5?> </td>
<td><?=$rating5?></td>
</tr>
</table>
<form action = "confirmed.php" method = "post" enctype = "multipart/form-data"> 
<input type = "hidden" name = "firstname" value = <?=$firstname?>>
<input type = "hidden" name = "lastname" value = <?=$lastname?>>
<input type = "hidden" name = "s_id" value = <?=$s_id?>>
<input type = "hidden" name = "address" value = <?=$address?>>
<input type = "hidden" name = "phoneNumber" value = <?=$phoneNumber?>>
<input type = "hidden" name = "city" value = <?=$city?>>
<input type = "hidden" name = "state" value = <?=$state?>>
<input type = "hidden" name = "zip" value = <?=$zip?>>
<input type = "hidden" name = "DOB_month" value = <?=$DOB_month?>>
<input type = "hidden" name = "DOB_day" value = <?=$DOB_day?>>
<input type = "hidden" name = "DOB_year" value = <?=$DOB_year?>>
<input type = "hidden" name = "majors" value = <?=$majors?>>
<input type = "hidden" name = "minors" value = <?=$minors?>>
<input type = "hidden" name = "graduationDate" value = <?=$graduationDate?>>
<input type = "hidden" name = "workSummers" value = <?=$workSummers?>>
<input type = "hidden" name = "workcc" value = <?=$workcc?>>
<input type = "hidden" name = "workOnCampusPast" value = <?=$workOnCampusPast?>>
<input type = "hidden" name = "ww" value = <?=$ww?>>
<input type = "hidden" name = "practicum" value = <?=$practicum?>>
<input type = "hidden" name = "pracHowLong" value = <?=$pracHowLong?>>
<input type = "hidden" name = "activity1" value = <?=$activity1?>>
<input type = "hidden" name = "ts1" value = <?=$ts1?>>
<input type = "hidden" name = "activity2" value = <?=$activity2?>>
<input type = "hidden" name = "ts2" value = <?=$ts2?>>
<input type = "hidden" name = "activity3" value = <?=$activity3?>>
<input type = "hidden" name = "ts3" value = <?=$ts3?>>
<input type = "hidden" name = "activity4" value = <?=$activity4?>>
<input type = "hidden" name = "ts4" value = <?=$ts4?>>
<input type = "hidden" name = "activity5" value = <?=$activity5?>>
<input type = "hidden" name = "ts5" value = <?=$ts5?>>
<input type = "hidden" name = "classType" value = <?=$classType?>>
<input type = "hidden" name = "course" value = <?=$course?>>
<input type = "hidden" name = "className" value = <?=$className?>>
<input type = "hidden" name = "term" value = <?=$term?>>
<input type = "hidden" name = "grade" value = <?=$grade?>>
<input type = "hidden" name = "instructor" value = <?=$instructor?>>
<input type = "hidden" name = "retake" value = <?=$retake?>>
<input type = "hidden" name = "classType2" value = <?=$classType2?>>
<input type = "hidden" name = "course2" value = <?=$course2?>>
<input type = "hidden" name = "className2" value = <?=$className2?>>
<input type = "hidden" name = "term2" value = <?=$term2?>>
<input type = "hidden" name = "grade2" value = <?=$grade2?>>
<input type = "hidden" name = "instructor2" value = <?=$instructor2?>>
<input type = "hidden" name = "retake2" value = <?=$retake2?>>
<input type = "hidden" name = "classType3" value = <?=$classType3?>>
<input type = "hidden" name = "course3" value = <?=$course3?>>
<input type = "hidden" name = "className3" value = <?=$className3?>>
<input type = "hidden" name = "term3" value = <?=$term3?>>
<input type = "hidden" name = "grade3" value = <?=$grade3?>>
<input type = "hidden" name = "instructor3" value = <?=$instructor3?>>
<input type = "hidden" name = "retake3" value = <?=$retake3?>>
<input type = "hidden" name = "classType4" value = <?=$classType4?>>
<input type = "hidden" name = "course4" value = <?=$course4?>>
<input type = "hidden" name = "className4" value = <?=$className4?>>
<input type = "hidden" name = "term4" value = <?=$term4?>>
<input type = "hidden" name = "grade4" value = <?=$grade4?>>
<input type = "hidden" name = "instructor4" value = <?=$instructor4?>>
<input type = "hidden" name = "retake4" value = <?=$retake4?>>
<input type = "hidden" name = "skill1" value = <?=$skill1?>>
<input type = "hidden" name = "rating1" value = <?=$rating1?>>
<input type = "hidden" name = "skill2" value = <?=$skill2?>>
<input type = "hidden" name = "rating2" value = <?=$rating2?>>
<input type = "hidden" name = "skill3" value = <?=$skill3?>>
<input type = "hidden" name = "rating3" value = <?=$rating3?>>
<input type = "hidden" name = "skill4" value = <?=$skill4?>>
<input type = "hidden" name = "rating4" value = <?=$rating4?>>
<input type = "hidden" name = "skill5" value = <?=$skill5?>>
<input type = "hidden" name = "rating5" value = <?=$rating5?>>
<!-- need to submit files to database -->
<input type = "submit" value = "submit">
</form>
</main>
</body>
</html>
