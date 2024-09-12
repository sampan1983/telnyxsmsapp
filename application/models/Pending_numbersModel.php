<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;



class Pending_numbersModel extends CI_Model {



	function getpending()
	{
		$sql = "select * from tapp_sent_msg where user_id = '".$_SESSION['id']."'  order by date_time desc";
		$result = $this->db->query($sql);
		if ($result->num_rows()>0)
		{
			$pmsg = $result->result_array();
			return $pmsg;
		}
		else
		{
			return $pmsg = 'No';
		}
	}

	function delete($id){

		$sql = "delete from tapp_sent_msg where id = '$id' ";

		$result = $this->db->query($sql);

		if ($result==true) {

			$_SESSION['delete'] = 'Message deleted successfully';

			return true;

		}

		else{

			$_SESSION['delete_fail'] = 'Message not deleted';

			return false;

		}

	}



	function pendingmsglog(){

		$sql = "SELECT * FROM tapp_sent_msg where user_id = '".$_SESSION['id']."' and date(date_time)=date(now())";

		$result = $this->db->query($sql);

		return $result->num_rows();

	}

	function sentpendingmsg()
	{

		$check_service = $this->db->query("select * from tapp_sent_msg where scheduled_time < now() and fax_type='0' order by date_time desc limit 200 ");
		echo $row = $check_service->num_rows();
		if ($row>0)
		{
			$service_type = $check_service->result_array();
			// echo(sizeof($row));
			for ($i=0; $i <$row; $i++)
			{
			$service = $service_type[$i]['service_type'];
			$user_id1 = $service_type[$i]['user_id'];



			if ($service=='twilio')
			{
			 $get_sid = $this->db->query("select * from tapp_twilio_account where user_id = '$user_id1' and service_type = 'telnyx'");
			 if ($get_sid->num_rows()>0)
			 {
				$acc_data = $get_sid->result_array();
				$sid = $acc_data[$i]['twilio_sid'];
				$token = $acc_data[$i]['twilio_token'];
				$service = $acc_data[$i]['service_type'];

			 }
			// require_once "twilio/Services/Twilio.php";
			 $AccountSid = $sid;
			 $AuthToken = $token;
			 // $client = new Client($AccountSid, $AuthToken);
			 // $client = new Client($sid, $twilio_token);
			 $query = $this->db->query("select * from  tapp_sent_msg where   scheduled_time < now() and fax_type='0' order by date_time desc limit 150");
			 if ($query->num_rows()>0)
			 {
				$data_row = $query->result_array();
				for ($i=0; $i <sizeof($data_row); $i++) {
					$user_id = $data_row[$i]['user_id'];
					$id = $data_row[$i]['id'];
					$num = $data_row[$i]['sms_number'];
					$number = '+'.$num;
					$msg = $data_row[$i]['message'];
					$twilio_num = $data_row[$i]['twilio_num'];
					$mediaUrl = $data_row[$i]['images'];
					$bulkname = $data_row[$i]['bulk_name'];


$sender_type=$data_row[$i]['sender_type'];
$message_profile_id=$data_row[$i]['message_profile_id'];




					$check_blacklist = $this->db->query("select * from tapp_blacklist where user_id = '".$user_id."' and number like '%".$num."%' ");
				if ($check_blacklist->num_rows()<1 )
				{
					try
					{


$twiliowithplus='+'.str_replace('+','',$twilio_num);
$numberwithplus='+'.str_replace('+','',$number);



if($sender_type=='cp')
{



if($mediaUrl!= ''){

$params = [
    'from' => $twilio_num, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $msg,
    'subject' => 'Picture', 
    'media_urls' => [$mediaUrl],
    'messaging_profile_id'=> $message_profile_id
];







					}
					else
					{

$params = [
   
    'from' => $twilio_num, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $msg,
    'messaging_profile_id'=> $message_profile_id
];


			

					}






}else
{

					  if ($mediaUrl!= '')
					  {




$params = [
    'from' => $twiliowithplus, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $msg,
    'subject' => 'Picture', 
    'media_urls' => [$mediaUrl]
];



					
					   }
					 else
					   {

$params = [
    'from' => $twiliowithplus, // Use your Telnyx 10DLC number
    'to' => $numberwithplus, // Recipient's phone number
    'text' => $msg,
    
];
					   }



}








					  // print_r($response);





\Telnyx\Telnyx::setApiKey($AccountSid);

 $response = \Telnyx\Message::create($params);








					  $msg = str_replace('/', '', $msg);
					  $msg = str_replace("'\'", '', $msg);
					  $msg = str_replace('"', '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $send_msg = $this->db->query("insert into tapp_sent_msg_log(sms_number,twilio_num,message,images,bulk_name,date_time,user_id)values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$mediaUrl','$bulkname',now(),'$user_id')");
					  if ($send_msg)
					  {
					   $send_msg_data = $this->db->query("insert into table_data (sender,body,date_time,sending_status,user_id,twilio_num) values('".str_replace('+','',$number)."','$msg',now(),'S','$user_id','".str_replace('+','',$twilio_num)."')");
					   if ($send_msg_data)
					   {
						 $del_pending = $this->db->query("delete from tapp_sent_msg where id = '$id'");
						 if ($del_pending)
						 {
						  echo 'inserted';
						  $_SESSION['pending_msg'] = '1';
					     }
					   }
					  }
					 else
					 {
						echo 'fail';
					  }
				    }
				    					catch(\Telnyx\Exception\PermissionException $e)
					{
							$errorget = $e->getMessage();
$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);


					  $msg = str_replace('/', '', $msg);
					  $msg = str_replace("'\'", '', $msg);
					  $msg = str_replace('"', '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $fail_msg = $this->db->query("insert into tapp_sent_msg_failed(sms_number,twilio_num,message,bulk_name,date_time,user_id,error) values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$bulkname',now(),'$user_id','$errorget')");
					  if ($fail_msg)
					  {
						$del_pending = $this->db->query("delete from tapp_sent_msg where id = '$id'");
						if ($del_pending)
						{
							$_SESSION['pending_msg'] = '0';
							echo 'fail';
						}
				 	  }
			 		}
					// echo($msg);
					catch(\Telnyx\Exception\TelnyxException $e)
					{
							$errorget = $e->getMessage();
$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);


					  $msg = str_replace('/', '', $msg);
					  $msg = str_replace("'\'", '', $msg);
					  $msg = str_replace('"', '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $fail_msg = $this->db->query("insert into tapp_sent_msg_failed(sms_number,twilio_num,message,bulk_name,date_time,user_id,error) values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$bulkname',now(),'$user_id','$errorget')");
					  if ($fail_msg)
					  {
						$del_pending = $this->db->query("delete from tapp_sent_msg where id = '$id'");
						if ($del_pending)
						{
							$_SESSION['pending_msg'] = '0';
							echo 'fail';
						}
				 	  }
			 		}
	catch(Telnyx\Exception\UnknownApiErrorException $e)
					{
							$errorget = $e->getMessage();
$errorget = str_replace('/', '', $errorget);
					  $errorget = str_replace("'\'", '', $errorget);
					  $errorget = str_replace('"', '', $errorget);
					  $errorget = str_replace("'", '', $errorget);
					  $errorget = str_replace("'", '', $errorget);





					  $msg = str_replace('/', '', $msg);
					  $msg = str_replace("'\'", '', $msg);
					  $msg = str_replace('"', '', $msg);
					  $msg = str_replace("'", '', $msg);
					  $msg = str_replace("'", '', $msg);
echo "insert into tapp_sent_msg_failed(sms_number,twilio_num,message,bulk_name,date_time,user_id,error) values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$bulkname',now(),'$user_id','$errorget')";

					  $fail_msg = $this->db->query("insert into tapp_sent_msg_failed(sms_number,twilio_num,message,bulk_name,date_time,user_id,error) values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$bulkname',now(),'$user_id','$errorget')");
					  if ($fail_msg)
					  {
						$del_pending = $this->db->query("delete from tapp_sent_msg where id = '$id'");
						if ($del_pending)
						{
							$_SESSION['pending_msg'] = '0';
							echo 'fail';
						}
				 	  }
			 		}



				}
				else
				{
					$msg = str_replace('/', '', $msg);
					$msg = str_replace("'\'", '', $msg);
					$msg = str_replace('"', '', $msg);
					$msg = str_replace("'", '', $msg);
					$msg = str_replace("'", '', $msg);
					$fail_msg = $this->db->query("insert into tapp_sent_msg_failed(sms_number,twilio_num,message,bulk_name,date_time,user_id) values('".str_replace('+','',$number)."','".str_replace('+','',$twilio_num)."','$msg','$bulkname',now(),'$user_id')");
					if ($fail_msg)
					{
						$del_pending = $this->db->query("delete from tapp_sent_msg where id = '$id'");
						if ($del_pending)
						{
							$_SESSION['pending_msg'] = '0';
							echo 'fail';
						}
					}


				}
			  }
			 }
			}
	  }
}
		$this->db->close();
}
// }






}

?>
