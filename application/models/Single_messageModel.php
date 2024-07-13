<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
use Twilio\Rest\Client;
	class Single_messageModel extends CI_Model {

		function getmsg()
		{


            $number = $this->input->post('number');
            $type= $this->input->post('sender_type');

			if (strlen($number)>10) {

			}
			else{
				$number = substr($number,1);
			}

			// $tmp_img = $this->input->post('file');
			$tmp_img = $_FILES;
			$message_type = $this->input->post('message_type');
			if($message_type== 'custom'){
			$message = $this->input->post('message');
			}
			else{
			$message = $this->input->post('message1');
			}

			$str = str_replace(PHP_EOL, '', $message);
			$message= stripslashes($str);
			$message= str_replace('rnrn','',$str);
			$message= str_replace('\r',' ',$message);

			$message = str_replace("'", "\'", $message);

			$unique_id = uniqid();

            $link='';
		    $url_get = "select * from tapp_tbl_clients where sender='$number'";
			$link = $this->db->query($url_get);
			if ($link->num_rows()>0) {
				$link_array = $link->result_array();
				$link = $link_array[0]['link'];
				  $message=str_replace("first_name",$link,$message);

			}



// if(strpos($message,'https') !==false)
// {
//     $message = file_get_contents('http://tinyurl.com/api-create.php?url='.$message);
// }

// echo $message;
// exit();


  $check_blacklist = "select * from tapp_blacklist where user_id = '".$_SESSION['id']."' and number = '$number'";
           	$blacklist = $this->db->query($check_blacklist);
			if ($blacklist->num_rows()>0) {
				$_SESSION['single_blacklist'] = 'Sorry! This number is blacklisted';
				return 'blacklist';
			}
			else
			{
		    $check_twilio_number = "select * from tapp_twilio_number";
			$twilio_number = $this->db->query($check_twilio_number);
			if ($twilio_number->num_rows()>0) {
				$twilio_data = $twilio_number->result_array();
				$sid = $twilio_data[0]['twilio_sid'];
				$twilio_token = $twilio_data[0]['twilio_token'];
				$service_type = $twilio_data[0]['service_type'];
				$copilet_msg_service_id = $twilio_data[0]['copilet_msg_service_id'];
				$message_profile_id = $twilio_data[0]['app_sid'];
				$num = '+'.$number;
			}

			if($type=='cp')
			{
			  $twilio_num=$copilet_msg_service_id;
			}
			else
			{
			  $twilio_num = $this->input->post('twilio_number');

			}

            $mediaUrl ='';
            if(!empty($tmp_img))
               {

				$img = $_FILES['file'];

				if (isset($_FILES['file'])) {
		   	for ($i=0; $i <sizeof($_FILES['file']['name']) ; $i++) {
		 		$_FILES['myimg']['name'] = $_FILES['file']['name'][$i];
		 		$_FILES['myimg']['size'] = $_FILES['file']['size'][$i];
		 		$_FILES['myimg']['type'] = $_FILES['file']['type'][$i];
		 		$_FILES['myimg']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
		 		$_FILES['myimg']['error'] = $_FILES['file']['error'][$i];

		 		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		 		$config['file_name'] = 'img'.rand(100,1000);
		 		$config['upload_path'] = './upload';


		 	$this->load->library('upload',$config);

				if (!$this->upload->do_upload('myimg')) {
			$img = null;
				}
				else{
			$file_data = $this->upload->data();
				$img = base_url()."upload/".$file_data['file_name'];

				}
		 		}
				}
                }




                if($type=='cp')
                {



$numberwithplus='+'.str_replace('+','',$number);

				if(!empty($img))
				   {


$params = [
    'from' => $twilio_num, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $message,
    'subject' => 'Picture', 
    'media_urls' => [$img],
    'messaging_profile_id'=> $message_profile_id
];







					}
					else
					{

$params = [
   
    'from' => $twilio_num, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $message,
    'messaging_profile_id'=> $message_profile_id
];


			

					}









                }else
                {



$twiliowithplus='+'.str_replace('+','',$twilio_num);
$numberwithplus='+'.str_replace('+','',$number);


				if(!empty($img))
				   {


$params = [
    'from' => $twiliowithplus, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $message,
    'subject' => 'Picture', 
    'media_urls' => [$img]
];







					}
					else
					{

$params = [
    // 'from' => $twiliowithplus, // Use your Telnyx 10DLC number
    'from' => $twiliowithplus, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $message,
];


			

					}










                }








            try {

\Telnyx\Telnyx::setApiKey($sid);

 $response = \Telnyx\Message::create($params);




		   $insert_msg_log = "INSERT INTO tapp_sent_msg_log(sms_number,twilio_num,message,images,bulk_name,date_time,user_id) VALUES ('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$message','$img', '$unique_id', now(),'".$_SESSION['id']."')";
			$tapp_msg_log = $this->db->query($insert_msg_log);
			if ($tapp_msg_log==true)
			{
				$insert_table_data = "insert into table_data (sender,body,date_time,sending_status,user_id,twilio_num)values('".str_replace('+','',$number)."','$message', now(),'S','".$_SESSION['id']."','".str_replace('+','',$twilio_num)."')";
				$table_data = $this->db->query($insert_table_data);

            }

	         if ($table_data == true)
	          {
					$_SESSION['single_send'] = 'Message has been send successfully';
               }
              return 'message sent';
			}

			catch (\Telnyx\Exception\TelnyxException $e)

		    {

			echo $e->getMessage();
			$errorget = $e->getMessage();
			$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);

					  

			$FAILED_MSG = "INSERT INTO tapp_sent_msg_failed(sms_number, twilio_num, message, images, bulk_name, date_time,user_id,error) VALUES ('$number','$twilio_num','$message','$img','$unique_id',now(),'".$_SESSION['id']."','$errorget')";
			$tapp_sent_msg_log = $this->db->query($FAILED_MSG);
			if ($FAILED_MSG)
			{
			// $_SESSION['failed'] = $e->getMessage() ;
				   $_SESSION['failed'] = 'Message Not Send !';


			return 'failed msg';
			}

			}

catch (Telnyx\Exception\UnknownApiErrorException $e)

		    {

			echo $e->getMessage();
			$errorget = $e->getMessage();
			$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);

			$FAILED_MSG = "INSERT INTO tapp_sent_msg_failed(sms_number, twilio_num, message, images, bulk_name, date_time,user_id,error) VALUES ('$number','$twilio_num','$message','$img','$unique_id',now(),'".$_SESSION['id']."','$errorget')";
			$tapp_sent_msg_log = $this->db->query($FAILED_MSG);
			if ($FAILED_MSG)
			{
			// $_SESSION['failed'] = $e->getMessage() ;
				   $_SESSION['failed'] = $e->getMessage();


			return 'failed msg';
			}

			}

			catch (Telnyx\Exception\PermissionException $e)

		    {

			echo $e->getMessage();
			$errorget = $e->getMessage();
			$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);

			$FAILED_MSG = "INSERT INTO tapp_sent_msg_failed(sms_number, twilio_num, message, images, bulk_name, date_time,user_id,error) VALUES ('$number','$twilio_num','$message','$img','$unique_id',now(),'".$_SESSION['id']."','$errorget')";
			$tapp_sent_msg_log = $this->db->query($FAILED_MSG);
			if ($FAILED_MSG)
			{
			// $_SESSION['failed'] = $e->getMessage() ;
				   $_SESSION['failed'] = $e->getMessage();


			return 'failed msg';
			}

			}
catch (Telnyx\Exception\TelnyxException $e)

		    {

			echo $e->getMessage();
			$errorget = $e->getMessage();
			$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);

			$FAILED_MSG = "INSERT INTO tapp_sent_msg_failed(sms_number, twilio_num, message, images, bulk_name, date_time,user_id,error) VALUES ('$number','$twilio_num','$message','$img','$unique_id',now(),'".$_SESSION['id']."','$errorget')";
			$tapp_sent_msg_log = $this->db->query($FAILED_MSG);
			if ($FAILED_MSG)
			{
			// $_SESSION['failed'] = $e->getMessage() ;
				   $_SESSION['failed'] = $e->getMessage();


			return 'failed msg';
			}

			}





			}





		}
		function sentmsglog(){
			$sql = "SELECT * FROM tapp_sent_msg_log where user_id = '".$_SESSION['id']."' and date(date_time)=date(now())";
			$result = $this->db->query($sql);
			return $result->num_rows();
			}

function gettwilionum($val)
		{
			   if($val=='cp')
			   {
			   	$sql = "select * from tapp_twilio_number where user_id = '".$_SESSION['id']."' ";

			   }
			   else
			   {
			   	$sql = "select * from tapp_twilio_number where user_id = '".$_SESSION['id']."' ";
			   }

		$result = $this->db->query($sql);
		if ($result->num_rows()>0)
		 {
			$twilio_numbers = $result->result_array();
			return $twilio_numbers;
		}
		else{
			return false;
		}

		}
	}
?>
