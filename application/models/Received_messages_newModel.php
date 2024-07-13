<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;
error_reporting(0);


class Received_messages_newModel extends CI_Model {

		// function getnewrecieve(){
		// 	$sql = 'select * from table_data where sending_status="R"  and  user_id="'.$_SESSION['id'].'"  ORDER BY id ASC';
		// 	$result = $this->db->query($sql);
		// 	if ($result->num_rows()>0) {
		// 		$new_recieve = $result->result_array();
		// 		return $new_recieve;
		// 	}
		// 	else{
		// 		return $new_recieve = 'No';
		// 	}
		// }

public function getnewrecieve()
{

    $get_user_chat = $this->db->query('select * from table_data where sending_status="R" and user_id="'.$this->session->userdata('id').'" ORDER BY id ASC');

    $me = [];

    if ($get_user_chat->num_rows() > 0) {
        $ord = array();

        $new_recieve = $get_user_chat->result();

        foreach ($new_recieve as $value) {

            $me[$value->sender] = (array)$value;


// if ($me[$value->sender]['name'] == '') {
//     // check the name in contacts

//     // First, check 'tapp_tbl_clients'
//     $check_cli = $this->db->get_where('tapp_tbl_clients', array('sender' => $value->sender, 'user_id' => $this->session->userdata('id')));

//     // Only if no results found in 'tapp_tbl_clients', check 'tapp_groups'
//     if ($check_cli->num_rows() == 0) {
//         $check_cli_groups = $this->db->get_where('tapp_groups', array('number' => $value->sender, 'user_id' => $this->session->userdata('id')));

//         foreach ($check_cli_groups->result() as $ch2) {
//             $name = $ch2->first_name . ' ' . $ch2->last_name;
//             $me[$value->sender]['name'] = $name;
//         }
//     } else {
//         // Results found in 'tapp_tbl_clients'
//         foreach ($check_cli->result() as $ch2) {
//             $name = $ch2->first_name . ' ' . $ch2->last_name;
//             $me[$value->sender]['name'] = $name;
//         }
//     }
// }

            

            if ($me[$value->sender]['name'] == '') {
                // check the name in contacts

                $check_cli = $this->db->get_where('tapp_tbl_clients', array('sender' => $value->sender, 'user_id' => $this->session->userdata('id')));

                // json_decode($me[$value->sender],true);


if($check_cli->num_rows()>0)
{
	foreach ($check_cli->result() as $ch2) {
                    $name = $ch2->first_name . ' ' . $ch2->last_name;
                    $me[$value->sender]['name'] = $name;
                }
}
else
{

	     // $check_cli2 = $this->db->get_where('tapp_groups', array('number' => $value->sender, 'user_id' => $this->session->userdata('id')));

	     $check_cli2=$this->db->query("select * from tapp_groups where number='".$value->sender."'  ");
        
                // json_decode($me[$value->sender],true);

	     if($check_cli2->num_rows()>0)
	     {
	     	$result=$check_cli2->result_array();

	     	    foreach ($result as $ch2) {

	     	    	

                    $name = $ch2['first_name'] . ' ' . $ch2['last_name'];
                    $me[$value->sender]['name'] = $name;
                }
	     }
	     else
	     {
	     	unset($me[$value->sender]['name']);
	     }

            
}

                
            }



            // if ($me[$value->sender]['name'] == '') {
            //     // check the name in contacts

           
            // }

        }

        foreach ($me as $key => $value) {
            $ord[] = strtotime($value['date_time']);
        }
        array_multisort($ord, SORT_DESC, $me);
    }




   return $me;
}


function insertGroup() {
  // Get the sender number and group ID from the request.
	$data = array(
	$first_name = $this->input->post('first_name'),
	$last_name = $this->input->post('last_name'),
  $number = $this->input->post('sender_number'),
  $groupId = $this->input->post('selected_option'),
);
  // Insert the sender number and group ID into the `tapp_groups` table.
	$this->load->database();
  $this->db->insert('tapp_groups',$data);
  return redirect('Inbox');

  // Return a success message.
  // return json_encode(['message' => 'Group inserted successfully.']);
}




		function delete($id){

$plus='+'.$id;
//get all by number delete from table data 


 $delete1=$this->db->query("delete from table_data where sender='$id' or sender ='$plus' ");
 $delete=$this->db->query("delete from tapp_msg_receive where sender='$id' or sender ='$plus' ");



			// $delete = "delete from tapp_msg_receive where id = '$id'";
			// $delete_result = $this->db->query($delete);
			if ($delete) {
				$_SESSION['receive_new_delete'] = 'Message has been deleted';
				return 'deleted';
			}
			else{
			return 'Failed';
			}
		}

		function search(){
			$month = $this->input->post('month');
			$year = $this->input->post('year');
			$sql = "SELECT * FROM tapp_msg_receive WHERE user_id = '".$_SESSION['id']."' AND MONTH( date_time ) = '$month' AND YEAR( date_time ) = '$year' ORDER BY date_time DESC";
			$result = $this->db->query($sql);
			if ($result->num_rows()>0) {
				return	$data_recieve = $result->result_array();
			}
			else{
				return $data_recieve = 'No';
			}
		}

		function searchnum(){
			$msg_num = $this->input->post('msg_num');
			$sql = "select * from tapp_msg_receive where user_id = '".$_SESSION['id']."' and sender='$msg_num' order by date_time desc";
			$result = $this->db->query($sql);
			if ($result->num_rows()>0) {
				return	$data_recieve = $result->result_array();
			}
			else{
				$sql = "select * from tapp_msg_receive where user_id = '".$_SESSION['id']."' and body like '%$msg_num%'  order by date_time desc";
				$result = $this->db->query($sql);
				if ($result->num_rows()>0) {
					return	$data_recieve = $result->result_array();
				}
				else{
					return $data_recieve = 'No';
				}
			}
		}

		function chat($id){
			$sql = "select * from tapp_msg_receive where id = '$id'";
			$result = $this->db->query($sql);
			if ($result->num_rows()==1) {
				$numData = $result->result_array();
				$number = $numData[0]['sender'];
				$_SESSION['number'] = $number;
				return $number;
			}
			else{
				return $number = 'No';
			}
		}

		function chatnum($r){
			$sql  = "update tapp_msg_receive set read_status='Y' where sender='$r'";
			$result = $this->db->query($sql);
			if ($result) {
			return $r;
			}
			else{
			return "Can't open this msg";
			}
			}

		function receivedmsglog(){
			$sql = "select * from tapp_msg_receive where user_id = '".$_SESSION['id']."' and date(date_time) = date(now())";
			$result = $this->db->query($sql);
			return $result->result_array();
			}

		function receivedmsg()
		{


  // Get the raw POST data from Telnyx
        $rawData = file_get_contents('php://input');

         // Decode the JSON data into a PHP array
    $requestData = json_decode($rawData, true);


$from =  $requestData['data']['payload']['from']['phone_number'];
    $body =  $requestData['data']['payload']['text'];
    $to = $requestData['data']['payload']['to'][0]['phone_number'];



// $from =  '+15802041169';
//     $body =  'run';
//     $to = '+19152963028';



		// $from = $_POST['From'];
		// $body = $_POST['Body'];
		// $to = substr($_POST['To'], 1);
		// $media = $_POST['mediaUrl'];


		$from =	str_replace('+' ,"", $from);
		$date_time = $this->db->query("select now()");
		$get_data = $this->db->query("SELECT * FROM tapp_twilio_number where number = '".$to."' or number='".str_replace('+','',$to)."' ");
		if ($get_data->num_rows()>0) {
			$data = $get_data->result_array();
			$user_id = $data[0]['user_id'];
		}
		if(strtolower($body)=='stop'){
			$in = $this->db->query("insert into tapp_blacklist (number,keyword,datetime,user_id)values('$from','$body',now(),'".$user_id."')");
		}
		$insert = $this->db->query("insert into tapp_msg_receive (sender,body,date_time,twilio_num,user_id)values('$from','$body',now(),'$to','".$user_id."')");
		if ($insert) {
			$sqlrec5 = $this->db->query("insert into table_data (sender,body,date_time,sending_status,user_id,twilio_num,read_status) values('".$from."','".$body."',now(),'R','".$user_id."','".str_replace('+','',$to)."',0)");
			$insert_data = 'true';
			$check_auto = $this->db->query("select * from tapp_unsub_keywords where user_id = '".$user_id."' and keyword='$body'");
			if ($check_auto->num_rows()>0) {
				$msg = $check_auto->result_array();
				$body1 = $msg[0]['message'];
				$get_sid = $this->db->query("select * from tapp_twilio_number where user_id = '".$user_id."' and number = '$to' or number='".str_replace('+','',$to)."' ");
				// if ($get_sid->num_rows()>0) {
					// $res=$this->db->query("select * from tapp_create_groups where name='$body'");
					// if($res->num_rows()>0){
					// 	$result=$res->result_array();
					// 	$group_id=$result[0]['id'];
					// 	$check_group_data = $this->db->get_where('tapp_groups',array('fk_group_data'=>$group_id,'group_name'=>$body,'number'=>$from));

					// 	if ($check_group_data->num_rows()==0) {
					// 		$this->db->query("insert into tapp_groups(group_name,number,fk_group_data,date_time) values('$body','$from','$group_id',now())");
					// 	}
					// }
					// 	else{
					// 	$add_group_name = $this->db->query("insert into tapp_create_groups(name,user_id) values('$body','$user_id')");
					// 	$last_id=$this->db->insert_id();
					// 	$add_group = $this->db->query("insert into tapp_groups(group_name,number,fk_group_data,date_time) values('$body','$from','$last_id',now())");
					// }
					$twilio_data = $get_sid->result_array();
					$sid = $twilio_data[0]['twilio_sid'];
					$twilio_token = $twilio_data[0]['twilio_token'];
					$service_type = $twilio_data[0]['service_type'];
					$num = '+'.$to;




					// $client = new Client($sid, $twilio_token);
					// $response = $client->messages->create(
					// $from,
					// array(
					// 'from' => $to,
					// 'body' => $body1,
					// 			)
					// 			);


$to='+'.str_replace('+','',$to);
$from='+'.str_replace('+','',$from);

$params = [
    'from' => $to, // Use your Telnyx 10DLC number
    'to' => $from, // Recipient's phone number
    'text' => $body1,
];



\Telnyx\Telnyx::setApiKey($sid);

 $response = \Telnyx\Message::create($params);



					$insert = $this->db->query("insert into tapp_msg_receive (sender,body,date_time,twilio_num,user_id)values('".str_replace('+','',$from)."','$body1',now(),'".str_replace('+','',$to)."','".$user_id."')");
					if ($insert) {
						$sqlrec5 = $this->db->query("insert into table_data (sender,body,date_time,sending_status,user_id,twilio_num,read_status) values('".str_replace('+','',$from)."','".$body1."',now(),'S','".$user_id."','".str_replace('+','',$to)."',0)");
						$insert_data = 'true';
					}
				// }
			}
		}
		else{
			$insert_data = 'fail';
		}



 // Respond with a success message.
        http_response_code(200);
        echo json_encode([
            'success' => true,
        ]);




		
		}

	function delete_s(){
	$id = $this->input->post('select');
	if (empty($id)) {
		$_SESSION['client_del_not'] = 'please select contact';
	}
	else{
	$select = explode(',', $id);
	for ($i=0; $i <sizeof($select) ; $i++) {
	$delete = "delete from tapp_msg_receive where id = '$select[$i]'";
	$result = $this->db->query($delete);
	if ($result==true) {
	$_SESSION['client_del'] = 'Messages deleted successfully';
	}
	}
	}
	}



public function weeklyreport()
{
	$tDate = date("Y-m-d 00:00:00");
	$date = date("Y-m-d 00:00:00",strtotime('-6 days'));

	$Sent_query = $this->db->query("SELECT * FROM tapp_sent_msg_log where date_time BETWEEN '$date' and '$tDate'")->result_array();
	$Failed_query = $this->db->query("SELECT * FROM tapp_sent_msg_failed where date_time BETWEEN '$date' and '$tDate'")->result_array();
	$Received_query = $this->db->query("SELECT * FROM tapp_msg_receive where date_time BETWEEN '$date' and '$tDate'")->result_array();

	$Sentdays = ['Mon' => 0,'Tue' => 0,'Wed' => 0,'Thu' => 0,'Fri' => 0,'Sat' =>0,'Sun' => 0];
	$Faildays = ['Mon' => 0,'Tue' => 0,'Wed' => 0,'Thu' => 0,'Fri' => 0,'Sat' =>0,'Sun' => 0];
	$Receiveddays = ['Mon' => 0,'Tue' => 0,'Wed' => 0,'Thu' => 0,'Fri' => 0,'Sat' =>0,'Sun' => 0];

	if(count($Sent_query)==0){
	    $Sent_query = "NO";
	}else{

	    foreach ($Sent_query as $key => $value) {
	        $Sentday = date('D', strtotime($value['date_time']));
	        $Sentdays[$Sentday] = $Sentdays[$Sentday] + 1;
	    }
	}

	if(count($Failed_query)==0){
	    $Failed_query = "NO";
	}else{

	    foreach ($Failed_query as $key => $value) {
	        $Failday = date('D', strtotime($value['date_time']));
	        $Faildays[$Failday] = $Faildays[$Failday] + 1;
	    }
	}

	if(count($Received_query)==0){
	    $Received_query = "NO";
	}else{

	    foreach ($Received_query as $key => $value) {
	        $Receivedday = date('D', strtotime($value['date_time']));
	        $Receiveddays[$Receivedday] = $Receiveddays[$Receivedday] + 1;
	    }
	}

$myData = [$Sentdays,$Faildays,$Receiveddays];
	return json_encode($myData);


}










}

?>
