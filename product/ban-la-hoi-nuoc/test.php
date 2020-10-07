<?php 

ini_set('display_errors', 1);
require "config.php";
require APP_ROOT . "/GoogleSheetsClient.php";

$values = [[
	'date1',
	'name1',
	'phone1',
	'street1',
	'referal1',
	'ip1'
]];

$googleSheets = new GoogleSheetsClient();
$spreadsheetId = '1ckZA1kxLLINoaW4vFBkBTKErm_73lR2QXlrIV_sdIJo';
$range         = 'A1:F1';

$response = $googleSheets->appendSheet($values, $range, $spreadsheetId);
var_dump($response);die;
