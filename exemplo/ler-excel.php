<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #01</title>

</head>
<body>

<h1>PHPExcel Reader Example #01</h1>
<h2>Simple File Reader using PHPExcel_IOFactory::load()</h2>
<?php

/** PHPExcel_IOFactory */
include 'Classes/PHPExcel/IOFactory.php';


$inputFileName = 'example1.xls';
echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' usando IOFactory para identificar o formato<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


echo '<hr />';

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
print "<pre>";
print_r($sheetData);
print "</pre>";


?>
<body>
</html>