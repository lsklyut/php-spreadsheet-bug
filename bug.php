<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Sheet 1');
$sheet->setCellValue('A1', 'Hello World !');

$secondSheet = $spreadsheet->createSheet();
$secondSheet->setTitle('Sheet 2');

$secondSheet->setCellValue('A1', '=\'Sheet 1\'!A1');

var_dump($secondSheet->toArray());

$sheet->setCellValue('A1', 'Turkey');

var_dump($secondSheet->toArray());

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');