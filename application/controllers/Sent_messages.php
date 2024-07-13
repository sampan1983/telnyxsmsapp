<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;

class Sent_messages extends CI_Controller {

	function __construct(){

			parent::__construct();

			if (!isset($_SESSION['logged_in'])) {

				header('Location: '.base_url().'Login');

			}



		}

	public function index()

	{
		$this->load->model('User_listModel');

		$result['data_user'] = $this->User_listModel->get();

		$this->load->model('ClientModel');

		$result['data'] = $this->ClientModel->get();

		$this->load->model('Single_messageModel');

		$result['sent_msg_log'] = $this->Single_messageModel->sentmsglog();

		$this->load->model('Failed_numbersModel');

		$result['failed_numbers'] = $this->Failed_numbersModel->failedmsglog();

		$this->load->model('Pending_numbersModel');

		$result['pending_numbers'] = $this->Pending_numbersModel->pendingmsglog();

		$this->load->model('Received_messages_newModel');

		$result['Received_messages_new'] = $this->Received_messages_newModel->receivedmsglog();

				$this->load->model('Received_messages_newModel');

		$result['Received_messages_new'] = $this->Received_messages_newModel->receivedmsglog();

		$this->load->model('User_listModel');

		$result['data'] = $this->User_listModel->get();

		$this->load->model('Sent_messagesModel');

		$result['sent_msg'] = $this->Sent_messagesModel->getsentmsg();


		$this->load->view('sent_messages',$result);

	}

	public function deletedata(){

				$this->load->model('Sent_messagesModel');

		$result = $this->Sent_messagesModel->deletedata();

		echo json_encode($result);

	}

	public function filter_data(){

		$filter = $this->input->post('filter');
		if($filter == '1_Week'){
			$minus = '-1 week';
		}if($filter == '1_Month'){
			$minus = '-1 month';
		}if($filter == '3_Months'){
			$minus = '-3 month';
		}if($filter == '6_Months'){
			$minus = '-6 month';
		}if($filter == '1_Year'){
			$minus = '-1 year';
		}if($filter == '2_Week'){
			$minus = '-2 week';
		}

		date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
$data_3 = date('Y-m-d H:i:s', strtotime($minus, strtotime($date)));

		$result = $this->db->query("select * from tapp_sent_msg_log WHERE date_time BETWEEN '$data_3' AND '$date' ORDER BY date_time desc limit 1000 ")->result_array();

		echo json_encode($result);

	}



	public function search(){

		$this->load->model('Sent_messagesModel');

		$result = $this->Sent_messagesModel->search();

		echo json_encode($result);

	}

	public function delete_s(){
		$this->load->model('Sent_messagesModel');

		$result = $this->Sent_messagesModel->delete_s();
		redirect(base_url().'Sent_messages');

	}


	public function export($num_msg="null"){

		$filename = 'Sent_messages.csv';

//set headers to download file

header( 'Content-Type: text/csv' );

header( 'Content-Disposition: attachment;filename='.$filename);

		if ($num_msg=='null') {

			$num_msg='';

		}

	$file = fopen('php://output', 'w');







//set the column names

$cells[] = array('S.No.', 'Number', 'Twilio Number', 'Message', 'Date' );



	                if($num_msg=='')

					{



					$result=$this->db->query("select * from tapp_sent_msg_log where user_id = '".$_SESSION['id']."'");

					}

					else

					{



					$result=$this->db->query("select * from tapp_sent_msg_log where user_id = '".$_SESSION['id']."' and (sms_number='".$num_msg."' or message  like '%".$num_msg."%') ");

					}

							$row = $result->result_array();

									// while($row=mysqli_fetch_array($result))

									// {

									for ($i=0; $i <sizeof($row) ; $i++) {

                          $d = $i+1;

//pass all the form values

$cells[] = array( $d, $row[$i]['sms_number'], $row[$i]['twilio_num'], $row[$i]['message'],  $row[$i]['date_time'] );

}

foreach($cells as $cell)

{

	fputcsv($file,$cell);

}

fclose($file);



	}
}

?>
