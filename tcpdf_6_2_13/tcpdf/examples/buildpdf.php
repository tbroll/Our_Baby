<?php
//Get basic information
$query = init_query();
	$stud= $query[1];
	$maj = $query[2];
	$min = $query[3];

// Include the main TCPDF library (search for installation path).
require_once($_SERVER['DOCUMENT_ROOT'] . '/ourbaby/tcpdf_6_2_13/tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CS Department');
$pdf->SetTitle('currentapplication');
$pdf->SetSubject('printable application');
$pdf->SetKeywords('TCPDF, PDF, application, print, student, testing');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 22);

// add a page
$pdf->AddPage();

//define header & general
$html1= ""; $html2 = ""; $html3="";
foreach ($stud as $row1){
	if ($row1["S_ID"] == $id){
		$html1= "<h2>".$row1["fname"]. " " .$row1["lname"]. "</h2> <br>";
		$html2= "<h4>General Information</h4><br>" ;
		$html3= "<p><strong>Address: </strong>".$row1["address"]. 
		" " .$row1["city"]. " " .$row1["sta"]. " " .$row1["zip"]. "<p><strong>Phone: </strong>".
		" " .$row1["phone"]. "<p><strong>Email: </strong> " .$row1["email"]. "<p><strong>Date of Birth: </strong>".
		" " .$row1["birth_date"]. "<p><strong>Citizenship: </strong>".$row1["citizenship"];
	}
	
}

//add major & minor
foreach($maj as $row){
	if ($row["S_ID"] == $id){
		$html3 .= "<p><strong>Major(s): </strong>".$row["major"];
	}
}

foreach($min as $row){
	if ($row["S_ID"] == $id){
		$html3 .= "<p><strong>Minor(s): </strong>".$row["minor"];
	}
}

//define availability
$html4= ""; $html5 = ""; $hours=""; $oncampus=""; $evercamp =""; $practicum ="";$summer ="";
if ($avail){
foreach ($availreturn as $row){
		$html4= "<br><h4>Availability</h4><br>";
		if ($row["hours"] == 0){$hours ="no";}else{ $hours = "yes";}
		if ($row["oncampus"] == 0){$oncampus="no";}else{ $oncampus="yes";}
		if ($row["practicum"] == 0){$practicum="no";}else{ $practicum="yes";}
		if ($row["summer"] == 0){$summer="no";}else{ $summer="yes";}
		$html5= "<p><strong>Can work 15-20 hrs/wk: </strong> " .$hours. "</p>".
		"<p><strong>Currently Working on Campus: </strong> " .$oncampus. "</p>";
		
		foreach ($onreturn as $row1){
			if ($on){
				if ($row1["evercamp"] == 0){
					$evercamp = "no";
				}else{
					$evercamp = "yes";
					$html5.="<p><strong>Ever Worked on Campus: </strong> " .$evercamp. "</p>";
				}
			}
		}
		foreach ($wherereturn as $row1){
			if($where){
				$html5.="<p><strong>Where on Campus: </strong> " .$row1["whereoncamp"]. "</p>";
			}
		}
		$html5.="<p><strong>Planning a Practicum: </strong>".$practicum. "</p>";
		foreach ($pracreturn as $row1){
			if($prac){
				$html5.="<p><strong>When/How Long:</strong> " .$row1["practicum"]. "</p>";
			}
		}
		$html5.="<p><strong>Can work summers: </strong>".$summer. "</p>";
}
}


//print header, general and availability to file
$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);

$pdf->SetFont('helvetica', '', 14);
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);

$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);

$pdf->SetFont('helvetica', '', 14);
$pdf->writeHTMLCell(0, 0, '', '', $html4, 0, 1, 0, true, '', true);

$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTMLCell(0, 0, '', '', $html5, 0, 1, 0, true, '', true);

//activities
if ($act){
	//title
	$pdf->SetFont('helvetica', '', 14);
	$pdf->writeHTMLCell(0, 0, '', '', "<br><h4>Activities</h4><br>", 0, 1, 0, true,	'', true);
	//table headers
	$pdf->SetFont('helvetica', '', 10);
	$html= "";
	$html = '<table><tr><th>Activity</th><th>Hours per Week</th></tr>';
	//table values
	foreach ($actreturn as $row){
		$html.='<tr>';
		$html.= "<td>". $row["activity"]."</td>";
		$html.= "<td>". $row["time_per_week"]."</td>";
		$html.='</tr>';
	}
	$html.='</table>';
	$html.= '<style>
    table, td, th{
    border:1px solid black;
	border-collapse:collapse;
    }
    </style>';
	$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
}
$pdf->Ln(4);

//courses
if ($course){
	$c="";
	//title
	$pdf->SetFont('helvetica', '', 14);
	$pdf->writeHTMLCell(0, 0, '', '', "<br><h4>Courses</h4><br>", 0, 1, 0, true,	'', true);
	//table headers
	$pdf->SetFont('helvetica', '', 10);
	$html= "";
	$html = '<table><tr><th>Course Number</th><th>Course Name</th><th>Term</th><th>Instructor</th><th>Grade</th><th>Repeat?</th></tr>';
	//table values
	foreach ($coursereturn as $row){
		if ($row["rep"] == 0){$c= "no";}else{ $c="yes";}
		$html.='<tr>';
		$html.= "<td>". $row["course_num"]."</td>";
		$html.= "<td>". $row["name"]."</td>";
		$html.= "<td>". $row["term"]."</td>";
		$html.= "<td>". $row["instructor"]."</td>";
		$html.= "<td>". $row["grade"]."</td>";
		$html.= "<td>". $c."</td>";
		$html.='</tr>';
	}
	$html.='</table>';
	$html.= '<style>
    table, td, th{
    border:1px solid black;
	border-collapse:collapse;
    }
    </style>';
	$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
}
$pdf->Ln(4);

//activities
if ($skills){
	//title
	$pdf->SetFont('helvetica', '', 14);
	$pdf->writeHTMLCell(0, 0, '', '', "<br><h4>Skills</h4><br>", 0, 1, 0, true,	'', true);
	//table headers
	$pdf->SetFont('helvetica', '', 10);
	$html= "";
	$html = '<table><tr><th>Skill</th><th>Rating out of 5</th></tr>';
	//table values
	foreach ($skillsreturn as $row){
		$html.='<tr>';
		$html.= "<td>". $row["skill"]."</td>";
		$html.= "<td>". $row["Rate"]."</td>";
		$html.='</tr>';
	}
	$html.='</table>';
	$html.= '<style>
    table, td, th{
    border:1px solid black;
	border-collapse:collapse;
    }
    </style>';
	$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
}
$pdf->Ln(4);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

if (! is_dir($_SERVER['DOCUMENT_ROOT'] .'ourbaby/applicants/'. $id)){
	$file = mkdir($_SERVER['DOCUMENT_ROOT'] .'ourbaby/applicants/'. $id, 0700);
}

//Close and output PDF document
$pdf->Output($_SERVER['DOCUMENT_ROOT'] .'ourbaby/applicants/'. $id .'/app.pdf', 'F');
?>
