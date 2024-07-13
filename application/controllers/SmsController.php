<?php

class SmsController extends CI_Controller
{
    public function index()
    {
         // Get the raw POST data from Telnyx
        $rawData = file_get_contents('php://input');

         // Decode the JSON data into a PHP array
    $requestData = json_decode($rawData, true);

    // Extract specific fields from the decoded data
    $message = $requestData['data']['payload']['text'];
    $apiNumber = $requestData['data']['payload']['to'][0]['phone_number'];
    $senderNumber = $requestData['data']['payload']['from']['phone_number'];



        // Log the incoming SMS message (you can customize the log location)
        $logFilePath = APPPATH . 'logs/incoming_sms.log';
        file_put_contents($logFilePath, $rawData . "\n", FILE_APPEND);




$save=$this->db->query("insert into tapp_recevied_msg (message,service_type,sms_number,date_time,twilio_num) values ('".$message."','telnyx','$senderNumber',now(),'$apiNumber') ");
        

        // Respond with a success message.
        http_response_code(200);
        echo json_encode([
            'success' => true,
        ]);
    }
}