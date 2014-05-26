<?
require "excel_class.php";

Read_Excel_File("Book1.xlsx",$return);
Create_Excel_File("ddd.xls",$return[Sheet1]);
?>