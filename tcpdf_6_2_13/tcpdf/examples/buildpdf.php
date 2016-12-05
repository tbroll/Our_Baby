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

//print header to file
$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);

// print general
$pdf->SetFont('helvetica', '', 14);
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);

$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);

// set cell padding
$pdf->setCellPaddings(2, 2, 2, 2);

// set cell margins
$pdf->setCellMargins(0, 0, 0, 0);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set some text for example
$txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

// Multicell test
$pdf->MultiCell(55, 5, '[LEFT] '.$txt, 1, 'L', 1, 0, '', '', true);
$pdf->MultiCell(55, 5, '[RIGHT] '.$txt, 1, 'R', 0, 1, '', '', true);
$pdf->MultiCell(55, 5, '[CENTER] '.$txt, 1, 'C', 0, 0, '', '', true);
$pdf->MultiCell(55, 5, '[JUSTIFY] '.$txt."\n", 1, 'J', 1, 2, '' ,'', true);
$pdf->MultiCell(55, 5, '[DEFAULT] '.$txt, 1, '', 0, 1, '', '', true);

$pdf->Ln(4);

// set color for background
$pdf->SetFillColor(220, 255, 220);

// Vertical alignment
$pdf->MultiCell(55, 40, '[ERIKA] '.$txt, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 40, '[ERIKA] '.$txt, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 40, '[ERIKA] '.$txt, 1, 'L', 1, 1, '', '', true, 0, false, true, 40, 'B');

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
