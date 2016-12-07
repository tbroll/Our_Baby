<?php
if(isset($_POST["firstname"])){
    $firstname = $_POST["firstname"];
}
if(isset($_POST["lastname"])){
    $lastname = $_POST["lastname"];
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
if(isset($_POST["zip"])){
    $zip = $_POST["zip"];
}
if(isset($_POST["DOB"])){
    $DOB = $_POST["DOB"];
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
if(isset($_POST["workSummers"])){
    $workSummers = true;
}
else{
    $workSummers = false;
}
if(isset($_POST["workDuringYear"])){
    $workDuringYear = true;
}
else{
    $workDuringYear = false;
}
if(isset($_POST["workcc"])){
    $workcc = true;
}
else{
    $workcc = false;
}
if(isset($_POST["workOnCampusPast"])){
    $workOnCampusPast = true;
    $ww = $_POST["ww"];
}
else{
    $workOnCampusPast = false;
    $ww = "";
}

//Practicum

if(isset($_POST["practicum"])){
    $practicum = true;
    $pracHowLong = $_POST["pracHowLong"];
}
else{
    $practicum = false;
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
    $ts1 = $_POST["ts1"];
}
else{
$activity1 = "";
$ts1 = "";
}
if($_POST["activity2"] != null){
    $activity2= $_POST["activity2"];
    $ts2 = $_POST["ts2"];
}
else{
$activity2 = "";
$ts2 = "";
}
if($_POST["activity3"] != null){
    $activity3= $_POST["activity3"];
    $ts3 = $_POST["ts3"];
}
else{
$activity3 = "";
$ts3 = "";
}
if($_POST["activity4"] != null){
    $activity4= $_POST["activity4"];
    $ts4 = $_POST["ts4"];
}
else{
$activity4 = "";
$ts4 = "";
}
if($_POST["activity5"] != null){
    $activity5= $_POST["activity5"];
    $ts5 = $_POST["ts5"];
}
else{
$activity5 = "";
$ts5 = "";
}
if(isset($_POST["course"])){
    $course = $_POST["course"];
    $className = $_POST["className"];
    $term = $_POST["term"];
    $grade = $_POST["grade"];
    $instructor = $_POST["instructor"];
    $retake = $_POST["retake"];
}
else{
    $course = "";
    $className = "";
    $term = "";
    $grade = "";
    $instructor = "";
    $retake = "";
}
if(isset($_POST["course2"])){
    $course2 = $_POST["course2"];
    $className2 = $_POST["className2"];
    $term2= $_POST["term2"];
    $grade2= $_POST["grade2"];
    $instructor2= $_POST["instructor2"];
    $retake2= $_POST["retake2"];
}
else{
    $course2 = "";
    $className2 = "";
    $term2= "";
    $grade2= "";
    $instructor2= "";
    $retake2= "";
}
if(isset($_POST["course3"])){
    $course3 = $_POST["course3"];
    $className3 = $_POST["className3"];
    $term3 = $_POST["term3"];
    $grade3 = $_POST["grade3"];
    $instructor3= $_POST["instructor3"];
    $retake3= $_POST["retake3"];
}
else{
    $course3 = "";
    $className3 = "";
    $term3 = "";
    $grade3 = "";
    $instructor3 = "";
    $retake3 = "";
}
if(isset($_POST["course4"])){
    $course4 = $_POST["course4"];
    $className4 = $_POST["className4"];
    $term4 = $_POST["term4"];
    $grade4 = $_POST["grade4"];
    $instructor4 = $_POST["instructor4"];
    $retake4 = $_POST["retake4"];
}
else{
    $course4 = "";
    $className4 = "";
    $term4 = "";
    $grade4 = "";
    $instructor4 = "";
    $retake4 = "";
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
   <?php include 'head.html';?>
  <body>
<nav> 
  <ul class="nav nav-pills container">
    <li><a href="index.php">Home</a></li>
  </ul>
</nav>
    <header class="subpage">
      <div>
<h1>Thank you for applying for the Testing Lab </h1>
      </div>
    </header>
    <main class="main-subpage">
    <div class="container">
      <section id="intro">
</section>
</div>
</main>
</html>
<?php
try {
        $db = new PDO("mysql:dbname=application", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec("INSERT INTO Major (`major`, `S_ID`) values ('$majors', '$s_id')");
        $db->exec("INSERT INTO Minor (`minor`, `S_ID`) values ('$minors', '$s_id')");

        $db->exec("INSERT INTO Activities (`S_ID`, `activity`, `time_per_week`) values ('$s_id','$activity1','$ts1')");
        $db->exec("INSERT INTO Activities (`S_ID`, `activity`, `time_per_week`) values ('$s_id','$activity2','$ts2')");
        $db->exec("INSERT INTO Activities (`S_ID`, `activity`, `time_per_week`) values ('$s_id','$activity3','$ts3')");
        $db->exec("INSERT INTO Activities (`S_ID`, `activity`, `time_per_week`) values ('$s_id','$activity4','$ts4')");
        $db->exec("INSERT INTO Activities (`S_ID`, `activity`, `time_per_week`) values ('$s_id','$activity5','$ts5')");

        $db->exec("INSERT INTO Courses (`S_ID`, `course_num`, `name`, `term`,
            `grade`, `instructor`, `rep`) values ('$s_id', '$course',
            '$className', '$term', '$grade', '$instructor', '$retake')");
        $db->exec("INSERT INTO Courses (`S_ID`, `course_num`, `name`, `term`,
            `grade`, `instructor`, `rep`) values ('$s_id', '$course2',
            '$className2', '$term2', '$grade2', '$instructor2', '$retake2')");
        $db->exec("INSERT INTO Courses (`S_ID`, `course_num`, `name`, `term`,
            `grade`, `instructor`, `rep`) values ('$s_id', '$course3',
            '$className3', '$term3', '$grade3', '$instructor3', '$retake3')");
        $db->exec("INSERT INTO Courses (`S_ID`, `course_num`, `name`, `term`,
            `grade`, `instructor`, `rep`) values ('$s_id', '$course4',
            '$className4', '$term4', '$grade4', '$instructor4', '$retake4')");

        $db->exec("INSERT INTO EverOnCamp (`S_ID`, `evercamp`) values ('$s_id', '$workOnCampusPast')");
        $db->exec("INSERT INTO OnCampusWhere (`S_ID`, `whereoncamp`) values ('$s_id', '$ww')");
        $db->exec("INSERT INTO Practicum (`S_ID`, `practicum`) values ('$s_id', '$pracHowLong')");

        $db->exec("INSERT INTO Skills (`S_ID`, `skill`, `Rate`) values ('$s_id', '$skill1', '$rating1')");
        $db->exec("INSERT INTO Skills (`S_ID`, `skill`, `Rate`) values ('$s_id', '$skill2', '$rating2')");
        $db->exec("INSERT INTO Skills (`S_ID`, `skill`, `Rate`) values ('$s_id', '$skill3', '$rating3')");
        $db->exec("INSERT INTO Skills (`S_ID`, `skill`, `Rate`) values ('$s_id', '$skill4', '$rating4')");
        $db->exec("INSERT INTO Skills (`S_ID`, `skill`, `Rate`) values ('$s_id', '$skill5', '$rating5')");

        $db->exec("INSERT INTO Student (`fname`, `lname`, `S_ID`,
            `address`,`phone`,`city`,`sta`,`zip`,`birth_date`,`citizenship`,`email`,`expected_grad`)
            values ('$firstname','$lastname', '$s_id', '$address',
                '$phoneNumber', '$city', '$state', '$zip', '$DOB',
                '$citizenship', '$email', '$graduationDate')");

        $db->exec("INSERT INTO WorkInfo (`S_ID`, `summer`, `hours`, `oncampus`,
            `practicum`) values ('$s_id', '$workSummers', '$workDuringYear',
            '$workcc', '$practicum')");

} catch (PDOException $ex) {
      ?>
  <p>Sorry, a database error occurred. Please try again later.</p>
  <p>(Error details: <?= $ex->getMessage() ?>)</p>
  <?php
}
?>
