<?php 
session_start();
require "config.php";
require APP_ROOT . "/functions.php";
require APP_ROOT . "/GoogleSheetsClient.php";

if (isset($_POST['form_key']) && $_POST['form_key'] == $_SESSION['form_key']) {
	$data = [date('Y-m-d H:i:s')];
	foreach (['name', 'phone', 'street', 'note', 'referal'] as $item) {
		if (isset ($_POST[$item])) {
			$data[] = $_POST[$item];
		}
	}
	$data[] = $_SERVER['REMOTE_ADDR'];
	
	try {
		$googleSheets = new GoogleSheetsClient();
		
		$response = $googleSheets->appendSheet([$data], APPEND_RANGE, SPREADSHEET_ID);
		sendMessageToTelegramBot('Có Đơn - BỘ 5 TÔ THỦY TINH COOKING BOWL - ' . implode(' | ', $data));
	} catch(Exception $e) {
		sendMessageToTelegramBot('Có Đơn - Ghi vào Gsheet lỗi ' . $e->getCode() . ' - BỘ 5 TÔ THỦY TINH COOKING BOWL - ' . implode(' | ', $data));
	}
	file_put_contents('data/data.txt', $data . PHP_EOL, FILE_APPEND);
}