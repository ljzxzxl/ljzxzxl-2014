<?php
header("content-type:text/html;charset=utf-8");
/** Error reporting */
error_reporting(E_ALL);
/** PHPExcel */
include_once 'PHPExcel.php';

/** PHPExcel_Writer_Excel2003用于创建xls文件 */
include_once 'PHPExcel/Writer/Excel5.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("李汉团");
$objPHPExcel->getProperties()->setLastModifiedBy("李汉团");
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");

// Add some data
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Date');
//合并单元格：
$objPHPExcel->getActiveSheet()->mergeCells('B1:F1');
$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'CSAT Score');
$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Grand Total');
$objPHPExcel->getActiveSheet()->SetCellValue('H1', 'CSAT');
$objPHPExcel->getActiveSheet()->SetCellValue('A2', '08/01/11');
$objPHPExcel->getActiveSheet()->SetCellValue('B2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('C2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('D2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('E2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('F2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('G2', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('H2', '0%');
$objPHPExcel->getActiveSheet()->SetCellValue('A3', '08/01/11');
$objPHPExcel->getActiveSheet()->SetCellValue('B3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('C3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('D3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('E3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('F3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('G3', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('H3', '0%');
$objPHPExcel->getActiveSheet()->SetCellValue('A4', '08/01/11');
$objPHPExcel->getActiveSheet()->SetCellValue('B4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('C4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('D4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('E4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('F4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('G4', '0');
$objPHPExcel->getActiveSheet()->SetCellValue('H4', '0%');

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Csat');

  
// Save Excel 2007 file
//$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
 
 $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
 $objWriter->save(str_replace('.php', '.xls', __FILE__));
 header("Pragma: public");
 header("Expires: 0");
 header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
 header("Content-Type:application/force-download");
 header("Content-Type:application/vnd.ms-execl");
 header("Content-Type:application/octet-stream");
 header("Content-Type:application/download");
 header("Content-Disposition:attachment;filename=csat.xls");
 header("Content-Transfer-Encoding:binary");
 $objWriter->save("php://output");
?>