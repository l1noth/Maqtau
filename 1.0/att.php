<?php
session_start();
require_once('lib.php');
if (isset($_POST['save'])){
	saveSession();
}

if (isset($_POST['view']) || isset($_POST['download']) || isset($_POST['print'])){
	foreach ($_POST as $val=>$key){
		//$key = htmlspecialchars($_POST[$val]);
		$_SESSION[$val]=$key;
	}
require_once('lib.php');
//error_reporting(E_ALL);
//ini_set("display_error", true);
//ini_set("error_reporting", E_ALL);
if(isset($_POST['print'])){
	writeFile();
}
	
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		// get the current page break margin
		$bMargin = $this->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $this->AutoPageBreak;
		// disable auto-page-break
		$this->SetAutoPageBreak(false, 0);
		// set bacground image
		
		
		
		// restore auto-page-break status
		$this->SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$this->setPageMark();
	}
}

// create new PDF document
//$pdf = new TCPDF('L', 'mm', ['format' => 'A4', 'Rotate' => 90]); 

$pdf = new MYPDF('L', 'mm','A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Erzhan Domaqov ');
if (isset($_POST['view']) || isset($_POST['download'])|| isset($_POST['print'])){
$pdf->SetTitle(htmlspecialchars ($_POST['lastname'].' '.$_POST['name']));}
$pdf->SetSubject('аттестат 2022');
$pdf->SetKeywords('Аттестат, PDF, 2022, Ақтөбе, Ержан, Домақов');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

// remove default footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
/*
// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/kz.php')) {
	require_once(dirname(__FILE__).'/lang/kz.php');
	$pdf->setLanguageArray($l);
}
*/
// ---------------------------------------------------------

// set font

$font=$_POST['fontselect'].'.ttf';

$textType='';
if (isset($_POST['bold'])){
	$textType='B';
	$font=$_POST['fontselect'].' B.ttf';
    
	
}
if (isset($_POST['italic'])){
	$textType='I';
	$font=$_POST['fontselect'].' I.ttf';
}
if (isset($_POST['italic']) && isset($_POST['bold'])){
	$textType='BI';
	$font=$_POST['fontselect'].' BI.ttf';
}
$fontname = TCPDF_FONTS::addTTFfont('../fonts/'.htmlspecialchars ($font), 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, $textType, htmlspecialchars($_POST['fontsizeselect']));
$pdf->SetTextColor(0,0,0);
// add a page
$pdf->AddPage('L', 'A4');

if (isset($_POST['view'])){
		$bMargin = $pdf->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $pdf->getAutoPageBreak();
		// disable auto-page-break
		$pdf->SetAutoPageBreak(false, 0);
		// set bacground image
		#maqtau1.jpg
		$file=$_POST['view'];
		$img_file = K_PATH_IMAGES.$file;
		//$img_file = K_PATH_IMAGES.$_POST['view']
		$pdf->Image($img_file, 0, 0, 297, 210, '', '', '', false, 300, '', false, false, 0);
		// restore auto-page-break status
		$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$pdf->setPageMark();
		
		}
// Print a text




	
$namepdf=translit(htmlspecialchars($_POST['lastname']));
$namepdf=$namepdf.translit(htmlspecialchars($_POST['fio'])).'.pdf';


$pdf->Text( $_POST['region_number'], ($_POST['region_numberY']), $_POST['region'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['school_name_number'], $_POST['school_name_numberY'], $_POST['school_name'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['school_name1_number'], $_POST['school_name1_numberY'], $_POST['school_name1'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['fio_number'],  $_POST['fio_numberY'],  $_POST['fio'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['director_number'], $_POST['director_numberY'],  $_POST['director'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );

$pdf->Text( $_POST['city_number'], $_POST['city_numberY'], $_POST['city'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['date_number'], $_POST['date_numberY'], $_POST['date'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['month_number'], $_POST['month_numberY'], $_POST['month'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );




//ОРЫСША
//орысшадағы әріптер

$pdf->Text( $_POST['letter_a_number'], ($_POST['letter_a_numberY']), $_POST['letter_a'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['letter_ca_number'], $_POST['letter_ca_numberY'], $_POST['letter_ca'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
//орысшадағы әріптер END

$pdf->Text( $_POST['region_ru_number'], ($_POST['region_ru_numberY']), $_POST['region_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['school_name_ru_number'], $_POST['school_name_ru_numberY'], $_POST['school_name_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['school_name1_ru_number'], $_POST['school_name1_ru_numberY'], $_POST['school_name1_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['fio_ru_number'],  $_POST['fio_ru_numberY'],  $_POST['fio_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['director_ru_number'], $_POST['director_ru_numberY'],  $_POST['director_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['city_ru_number'], $_POST['city_ru_numberY'], $_POST['city_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['date_ru_number'], $_POST['date_ru_numberY'], $_POST['date'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text( $_POST['month_ru_number'], $_POST['month_ru_numberY'], $_POST['month_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );


$pdf->SetFont($fontname, '', htmlspecialchars($_POST['fontsizeselectteacher']));
$pdf->Text(  $_POST['teacher1_number'],$_POST['teacher1_numberY'],  $_POST['teacher1'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['teacher2_number'],$_POST['teacher2_numberY'],  $_POST['teacher2'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['teacher3_number'],$_POST['teacher3_numberY'],  $_POST['teacher3'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );

$pdf->Text(  $_POST['teacher1_ru_number'],$_POST['teacher1_ru_numberY'],  $_POST['teacher1_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['teacher2_ru_number'],$_POST['teacher2_ru_numberY'],  $_POST['teacher2_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );
$pdf->Text(  $_POST['teacher3_ru_number'],$_POST['teacher3_ru_numberY'],  $_POST['teacher3_ru'],  false,  false,true, 0,0,  '', false, '',  0,  false,  'T',  'M', false );


if (isset($_POST['view']) || isset($_POST['print'])){
	$pdf->Output($namepdf, 'I');
}else
	if (isset($_POST['download'])){
		
		$pdf->Output($namepdf, 'D');
	}
}
else{
	
	header('Location: index.php');
	}
//============================================================+
// END OF FILE
//============================================================+
