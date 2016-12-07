<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
   <?php include 'head.html';?>
  <body>
   <?php include 'nav.html';?>
    <header class="subpage">
      <div>
        <h1>Application</h1>
      </div>
    </header>

    <main class="main-subpage">
    <div class="container">
      <section id="intro">

        <form action = "confirmation.php" method = "post" enctype = "multipart/form-data">
            <!--ask Dr. C about the importance of "country of citizenship -->
            <!-- each comment will be a line on the webpage-->
            <!-- First name and last name-->
            <fieldset>
                <legend>
                    Personal Information
                </legend>
            <label> First Name: 
                <input type = "text" name = "firstName"  id = "firstName">
            </label>
            <label> Last Name: 
                <input type = "text" name = "lastName" id = "lastName">
            </label>
            <label> Student ID: 
                <input type = "text" name = "s_id" id = "s_id" size = "20">
            </label>
            <br>
            <br>
            <label> Address: 
                <input type = "text" name = "address" id = "address">
            </label>
            <label> Phone Number: 
                <input type = "tel" name = "phoneNumber" id = "phoneNumber">
            </label>
            <!-- city, state, zip code, and date of birth-->
            <br>
            <br>
            <label> City: 
                <input type = "text" name = "city" id = "city">
            </label>
            <label> State: 
                <input type = "text" name = "state" id = "state">
            </label>
            <label> Zip Code: 
                <input type = "text" name = "zipCode" id = "zipCode">
            </label>
            <label> Date Of Birth:
                <select  id = "month" name = "month">
                    <option value = "">N/A</option>
                    <option value = "1">January</option>
                    <option value = "2">Febuary</option>
                    <option value = "3">March</option>
                    <option value = "4">April</option>
                    <option value = "5">May</option>
                    <option value = "6">June</option>
                    <option value = "7">July</option>
                    <option value = "8">August</option>
                    <option value = "9">September</option>
                    <option value = "10">October</option>
                    <option value = "11">November</option>
                    <option value = "12">December</option>
                </select>
                <input type = "number" name = "day" id = "day" min = 0 max = 31 placeholder = "day">
                <input type = "number" name = "year" id = "year" placeholder = "year" min = 1985>
            </label>
            <!-- Country of citizenship and email-->
            <br>
            <br>
            <label> Country of Citizenship: 
                <input type = "text" name = "citizenship" id = "citizenship">
            </label>
            <label> Email: 
                <input type = "email" id = "email" name = "email">
            </label>
            <!--Majors, Minors, and expected graduation date -->
            <br>
            <br>
            <label> Majors: 
            <input type = "text" id = "majors" name = "majors">
            </label>
            <label> Minors: 
            <input type = "text" id = "minors" name = "minors">
            </label>
            <label> Graduation Date: 
            <select name = "graduationDate" id = "graduationDate">
            </select> 
            </label>
        </fieldset>
            <br>
            <br>
            <!-- Work availability-->
            <fieldset>
                <legend>
                    Work Availability
                </legend>
            <label> 
                <input type = "checkbox" id = "canYouWorkSummers" name = "canYouWorkSummers">
                Can you work summers? 
            </label>
            <br>
            <br>
            <label> 
                <input type = "checkbox" id = "canYouWorkDuringYear" name = "canYouWorkDuringYear">
                Can you work 15 to 20 hours per week during the school year?
            </label>
            <!--previous or current other campus jobs -->
            <br>
            <br>
            <label> 
                <input type = "checkbox" id = "workOnCampusCurrently" name = "workOnCampusCurrently">
                Do you work on campus?
            </label>
            <br>
            <br>
            <label> 
                <input type = "checkbox" id = "workOnCampusPast" name = "workOnCampusPast">
                Have you worked on campus?
            </label>
            <br>
            <br>
            <label> 
                Where and when?
                <input type = "text" id = "wwOnCampus" name = "wwOnCampus">
            </label>
            <!-- Planning to do practicum, if so when and how long?-->
            <br>
            <br>
            <label> 
                <input type = "checkbox" id = "Practicum" name = "Practicum">
                Are you planning to do Practicum?
            </label>
            <br>
            <br>
            <label> 
                if so, when and how long
                <input type = "text"  id = "PracHowLong" name = "PracHowLong">
            </label>
            <!-- any other activities you participate in? if so, how much-->
            <br>
            <br>
            <div id = "activity" name = "activity">
                <h4>Number of activities particiated in and amount of time spent on each activity </h4>
                <br>
                <input type = "text" name = "activity1" id = "activity1" placeholder = "Activity">
                <input type = "number" min = 0 name = "timeSpent1" id = "timeSpent1" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity2" id = "activity2" placeholder = "Activity">
                <input type = "number" min = 0 name = "timeSpent2" id = "timeSpent2" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity3" id = "activity3" placeholder = "Activity">
                <input type = "number" min = 0 name = "timeSpent3" id = "timeSpent3" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity4" id = "activity4" placeholder = "Activity">
                <input type = "number" min = 0 name = "timeSpent4" id = "timeSpent4" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity5" id = "activity5" placeholder = "Activity">
                <input type = "number" min = 0 name = "timeSpent5" id = "timeSpent5" placeholder = "Time (in minutes) per week">
            </div>
            </fieldset>
            <!-- CS and Math classes currently taken-->
            <br>
            <br>
            <fieldset>
                <legend>
                    Classes Taken:
                </legend>
            <label> 
                How many Math and Computer Science classes have you taken?
                   </label>
                <div id = "classesTaken" name = "classesTaken">

                    <label> <input type = "radio" name = "classType" value = "CS">Computer Science</label>
                <label> <input type = "radio" name = "classType" value = "Math">Math </label>
                <input type = "text" name = "course" placeholder = "class number">
                <input type = "text" name = "className" placeholder = "class name">
                <label> Term: <label>
                <select id = "term" name = "term">
                </select>
                <label> Grade: </label>
                <select id = "grade" name = "grade">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor" id = "instructor" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake" name = "retake">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <br>

                <label> <input type = "radio" name = "classType2" value = "CS">Computer Science</label>
                <label> <input type = "radio" name = "classType2" value = "Math">Math </label>
                <input type = "text" name = "course2" placeholder = "class number">
                <input type = "text" name = "className2" placeholder = "class name">
                <label> Term: <label>
                <select id = "term2" name = "term2">
                </select>
                <label> Grade: </label>
                <select id = "grade2" name = "grade2">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor2" id = "instructor2" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake2" name = "retake2">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <br>

                <label> <input type = "radio" name = "classType3" value = "CS">Computer Science</label>
                <label> <input type = "radio" name = "classType3" value = "Math">Math </label>
                <input type = "text" name = "course3" placeholder = "class number">
                <input type = "text" name = "className3" placeholder = "class name">
                <label> Term: <label>
                <select id = "term3" name = "term3">
                </select>
                <label> Grade: </label>
                <select id = "grade3" name = "grade3">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor3" id = "instructor3" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake3" name = "retake3">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <br>

                <label> <input type = "radio" name = "classType4" value = "CS">Computer Science</label>
                <label> <input type = "radio" name = "classType4" value = "Math">Math </label>
                <input type = "text" name = "course4" placeholder = "class number">
                <input type = "text" name = "className4" placeholder = "class name">
                <label> Term: <label>
                <select id = "term4" name = "term4">
                </select>
                <label> Grade: </label>
                <select id = "grade4" name = "grade4">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor4" id = "instructor4" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake4" name = "retake4">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <br>
            </div>
            </fieldset>
        <!-- list any the other CS skills and rate those skills -->
        <div id = "additionalSkills" name = "additionalSkills">
            <h4>
                List other CS or special skills that you may have?
                <br>
                Rate your skills on a scale from 1 to 5.
            </h4>
            <input type = "text" id = "skill1" name = "skill1" placeholder = "additional skills">
            <select id = "rating1" name = "rating1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill2" name = "skill2" placeholder = "additional skills">
            <select id = "rating2" name = "rating2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill3" name = "skill3" placeholder = "additional skills">
            <select id = "rating3" name = "rating3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill4" name = "skill4" placeholder = "additional skills">
            <select id = "rating4" name = "rating4">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill5" name = "skill5" placeholder = "additional skills">
            <select id = "rating5" name = "rating5">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            </div>
        <br>
        <!-- attach a copy of transcript, 
        current class schedule, and photo of ID card -->
        <br>
    <label> Attach a copy of transcript</label>
        <input type = "file" name = "transcript" id = "transcript" accept = ".pdf"> 
        <br>
    <label>Attach your current class schedule</label>
        <input type = "file" name = "class_schedule" id = "class_schedule" accept = ".png"> 
        <br>
    <label>Attach a photo of ID card </label>
        <input type = "file" name = "photo_id" id = "photo_id" accept = ".png"> 
        <br>
        <input type = "submit" value = "Submit Application">
    </form>
    </section>
    </div>
    </main>
    <footer>
         <p>
         Winona State University | P.O. Box 5838 | 175 West Mark Street | Winona, MN 55987| 507.457.5000 | 1.800.342.5978 <br>
         The oldest member of the colleges and universities of Minnesota State.
         Winona State University is an equal opportunity employer and educator.

         </p>

    </footer>
</body>
<html>
