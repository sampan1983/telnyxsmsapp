<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Received_messages_new extends CI_Controller {



	function __construct(){

			parent::__construct();

			if (!isset($_SESSION['logged_in'])) {

				header('Location: '.base_url().'Login');

			}

			$this->load->model('Received_messages_newModel');

		}

	public function index()

	{	$this->load->model('User_listModel');

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
		$this->load->model('User_listModel');

		$result['data'] = $this->User_listModel->get();

		$result['new_recieve'] = $this->Received_messages_newModel->getnewrecieve();

		$this->load->model('Received_messages_newModel');

		$result['Received_messages_new'] = $this->Received_messages_newModel->receivedmsglog();
       
       $this->load->model('Add_group_numbersModel');
        $result['getgroup'] = $this->Add_group_numbersModel->getgroup();
        
		// $this->load->view('received_messages_new',$result);
		$this->load->view('chat',$result);
       



	}


public function deleteAll_chat()
{

 $delete1=$this->db->query("delete from table_data ");
 $delete=$this->db->query("delete from tapp_msg_receive ");



           
            if ($delete) {
                $_SESSION['success'] = 'Message has been deleted';
               
            redirect('Inbox');
            }
            else{

                $_SESSION['error'] = 'Message not deleted';


            redirect('Inbox');
            }
}







	public function delete($id){

		$result = $this->Received_messages_newModel->delete($id);
		
		echo json_encode($result);

	}

	public function search(){

		$result = $this->Received_messages_newModel->search();

		echo json_encode($result);

	}

	public function searchnum(){

		$result = $this->Received_messages_newModel->searchnum();

		echo json_encode($result);

	}



	public function chat($id){

				$result = $this->Received_messages_newModel->chat($id);

		echo json_encode($result);

	}
	public function receivedmsg()
	{
		$result = $this->Received_messages_newModel->receivedmsg();
		echo $result;
	}
	public function delete_s(){
		$result = $this->Received_messages_newModel->delete_s();
		redirect(base_url().'Inbox');
	}



public function get_num_chat()
{

//update read status






    // Load necessary libraries and helpers
    $this->load->library('session');
    $this->load->database();

    $number = $this->input->post('number'); // Assuming the 'number' is submitted via POST

    // Update status in tapp_msg_receive table
    $this->db->where('sender', $number);
    $this->db->where('user_id', $this->session->userdata('id'));
    $this->db->update('tapp_msg_receive', ['status' => '1']);

    // Fetch chat data from table_data
    $this->db->where('sender', $number);
    $this->db->where('user_id', $this->session->userdata('id'));
    $this->db->where('body !=', ''); // Assuming you want to exclude empty body
    $chatquery = $this->db->get('table_data')->result();

    // Update read_status in table_data
    $this->db->where('sender', $number);
    $this->db->where('user_id', $this->session->userdata('id'));
    $this->db->update('table_data', ['read_status' => '1']);

    if (empty($chatquery)) {
        echo '<div><p>Start Conversion Here!</p></div>';
    }

    foreach ($chatquery as $key) {
        $time = date("H:i:s", strtotime($key->date_time));
        $cahttt = ($key->chat_status == 0) ? 'failed' : '';

        if ($key->sending_status == 'S') {
            // echo '<div class="chat">
            //         <div class="chat-avatar">
            //             <a class="avatar m-0 float-right">
            //                 <img src="https://app.smsandvoice.com/public/app-assets/images/logo/default.png" alt="avatar" height="36" width="36">
            //             </a>
            //         </div>
            //         <div class="chat-body">
            //             <div class="chat-message edit-right-msg">';
            // if ($key->mediaUrl != '') {
            //     echo '<img class="chatmedia" src="' . $key->mediaUrl . '" height="200" width="200">';
            // }
            // echo '<p class="chat-pera-edit-right">' . $key->body . '</p>
            //                   <span class="chat-time edit-right-time right"> <span style="color:red">' . $cahttt . '</span>&nbsp' . $time . '</span>
            //                   <input type="hidden" id="from_num" value="' . $key->twilio_num . '">
            //                   <input type="hidden" id="to_num" value="' . $key->sender . '" >
            //               </div>
            //           </div>
            //       </div>';






echo '<div class="d-flex justify-content-end mb-4"><div class="chatimg">';
  if ($key->mediaUrl != '') {
                echo '<img class="chatmedia" src="' . $key->mediaUrl . '" height="200" width="200">';
            }
								echo '<div class="msg_cotainer_send">'.$key->body.'
									<span class="msg_time_send">'.$time.'</span>';



								echo '</div></div>
								<div class="img_cont_msg">
							<img class="imguser" src="https://app.smsandvoice.com/public/app-assets/images/logo/default.png" alt="avatar" height="36" width="36">
								</div>
							</div>';












        } elseif ($key->sending_status == 'R') {
            echo '<div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                       
                            <img class="imguser" src="https://app.smsandvoice.com/public/app-assets/images/chat_images.png" alt="avatar" height="36" width="36">
                       
                    </div>';

  if ($key->mediaUrl != '') {
                echo '<img class="chatmedia" src="' . $key->mediaUrl . '" height="200" width="200">';
            }

                   echo' <div class="msg_cotainer">
                       ';
          
            echo  $key->body . '
                              <span class="msg_time">' . $time . '</span>
                          </div>
                      
                  </div>';





							
						


        }
    }
}






public function send_chat_msg(){

print_r($_POST);
	exit();



$message=$this->input->post('main_chat');
$twilio_number='+'.str_replace('+','',$this->input->post('twilio_number') );
$sender_number='+'.str_replace('+','',$this->input->post('sender_number') );
$mediaUrl='';





$tmp_img = $_FILES;


            if(!empty($tmp_img))
               {

                $img = $_FILES['file'];

               

                if (isset($_FILES['file'])) {
            // for ($i=0; $i <sizeof($_FILES['file']['name']) ; $i++) {
                $_FILES['myimg']['name'] = $_FILES['file']['name'];
                $_FILES['myimg']['size'] = $_FILES['file']['size'];
                $_FILES['myimg']['type'] = $_FILES['file']['type'];
                $_FILES['myimg']['tmp_name'] = $_FILES['file']['tmp_name'];
                $_FILES['myimg']['error'] = $_FILES['file']['error'];

                $config['allowed_types'] = 'jpg|jpeg|gif|png';
                $config['file_name'] = 'img'.rand(100,1000);
                $config['upload_path'] = './upload';


            $this->load->library('upload',$config);

                if (!$this->upload->do_upload('myimg')) {
            $mediaUrl = null;
                }
                else{
            $file_data = $this->upload->data();
                $mediaUrl = base_url()."upload/".$file_data['file_name'];

                }
                // }
                }
                }






//get dynamic tags values

$get=$this->db->query("select * from tapp_tbl_clients where sender='$sender_number' or sender='".str_replace('+','',$this->input->post('sender_number'))."'");
if($get->num_rows()>0)
{
	$arr=$get->result_array();
	$Firstname=$arr[0]['first_name'];
	$lastname=$arr[0]['last_name'];
	$phone=$arr[0]['sender'];
	$jobtitle=$arr[0]['job_title'];
}
else
{
	$Firstname='';
	$lastname='';
	$phone='';
	$jobtitle='';
}


//replace

$message1=str_replace('{{firstname}}',$Firstname,$message);
$message2=str_replace('{{lastname}}',$lastname,$message1);
$message3=str_replace('{{phonenumber}}',$phone,$message2);
$message4=str_replace('{{jobtitle}}',$jobtitle,$message3);

$message=$message4;

//get api details

$get_api=$this->db->query("select * from tapp_twilio_account")->result_array();
$sid=$get_api[0]['twilio_sid'];


try{



if($mediaUrl!='')
{

    $params = [
    'from' => $twilio_number, // Use your Telnyx 10DLC number
    'to' => $sender_number, // Recipient's phone number
    'text' => $message,
     'subject' => 'Picture', 
    'media_urls' => [$mediaUrl]
];



}else
{
    $params = [
    'from' => $twilio_number, // Use your Telnyx 10DLC number
    'to' => $sender_number, // Recipient's phone number
    'text' => $message,
];
}





	\Telnyx\Telnyx::setApiKey($sid);

 $response = \Telnyx\Message::create($params);

//without plus

 $twilio_number=str_replace('+','',$this->input->post('twilio_number'));
 $sender_number=str_replace('+','',$this->input->post('sender_number'));
$date_time=date('Y-m-d h:i:s');



 // Log successful message send
                        $this->db->insert('tapp_sent_msg_log', [
                            'sms_number' => $sender_number,
                            'twilio_num' => $twilio_number,
                            'message' => $message,
                            'date_time' => $date_time,
                            'images' => $mediaUrl,
                            'user_id' => $this->session->userdata('id')
                           
                        ]);

                        $this->db->insert('table_data', [
                            'sender' => $sender_number,
                            'twilio_num' => $twilio_number,
                            'body' => $message,
                            'mediaUrl' => $mediaUrl,
                            'date_time' => $date_time,
                            'sending_status' => 'S',
                            'chat_status' => '1',
                            'user_id' => $this->session->userdata('id')
                        ]);
echo "send";


}
	catch (\Telnyx\Exception\TelnyxException $e)

		    {


$errorget = $e->getMessage();

 $twilio_number=str_replace('+','',$this->input->post('twilio_number'));
 $sender_number=str_replace('+','',$this->input->post('sender_number'));
$date_time=date('Y-m-d h:i:s');




// Handle exception and log failure
                    $this->db->insert('tapp_sent_msg_failed', [
                        'sms_number' => $sender_number,
                        'twilio_num' => $twilio_number,
                        'message' => $message,
                        'images' => $mediaUrl,
                        'error' => $e->getMessage(),
                        'date_time' => $date_time,
                       
                        'user_id' => $this->session->userdata('id')
                    ]);

                    $this->db->insert('table_data', [
                        'sender' => $sender_number,
                        'twilio_num' => $twilio_number,
                        'mediaUrl' => $mediaUrl,
                        'body' => $message,
                        'date_time' => $date_time,
                        'sending_status' => 'S',
                        'chat_status' => '0',
                        'user_id' => $this->session->userdata('id')
                    ]);
echo "failed";

		    }


}

	

}

?>

