<?php 

require __DIR__ . '/vendor/autoload.php';

class GoogleSheetsClient
{
   protected $service;

   /**
    * GoogleSheetsClient constructor
    */
   public function __construct()
   { 
		$client = new \Google_Client();

		$client->setApplicationName('Google Sheets and PHP');
		$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
		$client->setAccessType('offline');
		$client->setAuthConfig(__DIR__ . '/credentials.json');

		$this->service = new Google_Service_Sheets($client);
   }

   /**
    * Creates an event
    *
    * @param array $eventDetails event details e.g summary, start, end, attendees, e.t.c
    *
    * @return array $user of a user
    */
   public function updateSheet($values, $range, $spreadsheetId)
   {

       $requestBody = new Google_Service_Sheets_ValueRange( [
           'values' => $values
       ] );

       $params = [
           'valueInputOption' => 'USER_ENTERED'
       ];

      return $this->service->spreadsheets_values->update($spreadsheetId, $range, $requestBody, $params);
   }
   
   /**
    * Creates an event
    *
    * @param array $eventDetails event details e.g summary, start, end, attendees, e.t.c
    *
    * @return array $user of a user
    */
   public function appendSheet($values, $range, $spreadsheetId)
   {

       $requestBody = new Google_Service_Sheets_ValueRange( [
           'values' => $values
       ] );

       $params = [
           'valueInputOption' => 'USER_ENTERED'
       ];

      return $this->service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, $params);
   }
   
   public function getSheet($range, $spreadsheetId)
   {

       $response = $this->service->spreadsheets_values->get($spreadsheetId, $range);

       return $response->getValues();
   }
}