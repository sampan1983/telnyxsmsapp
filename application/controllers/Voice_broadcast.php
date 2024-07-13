<?php



defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;





class Voice_broadcast extends CI_Controller {



		function __construct(){



			parent::__construct();



			if (!isset($_SESSION['logged_in'])) {



				header('Location: '.base_url().'Login');



			}

	

			$this->load->model('Voice_broadcastModel');



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

				$this->load->model('ClientModel');



		$result['clientdata'] = $this->ClientModel->get();



		$this->load->model('Add_group_numbersModel');



		$result['getgroup'] = $this->Add_group_numbersModel->getgroup();



		$result['data_user'] = $this->User_listModel->get();



			$result['data'] = $this->Voice_broadcastModel->getnum();



		$this->load->view('voice_broadcast',$result);



	}



	public function get_voice_broadcast(){

		$twilio_number = $_POST['twilio_number'];

		$agent_number = $_POST['agent_number'].'<br>';

		$result = $this->Voice_broadcastModel->get_voice_broadcast();

	


		redirect('Voice_broadcast');



}

}

















	





?>









