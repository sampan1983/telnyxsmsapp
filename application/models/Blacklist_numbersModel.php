<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blacklist_numbersModel extends CI_Model
{
public function addnum()
{
    // Get the input numbers
    $numbers = $this->input->post('numbers');

    // Split the numbers by space, comma, or new line
    $numbersArray = preg_split('/[\s,]+/', trim($numbers));

    // Initialize a result array
    $insertedNumbers = [];
    $existingNumbers = [];

    // Loop through each number
    foreach ($numbersArray as $number) {
        // Clean the number (optional: remove any unwanted characters)
        $number = trim($number);

        // Check if the number already exists in the database for the user
        $sql = "SELECT * FROM tapp_blacklist WHERE number = '$number' AND user_id = '".$_SESSION['id']."'";
        $check = $this->db->query($sql);

        if ($check->num_rows() > 0) {
            // If the number exists, add to the existing list
            $existingNumbers[] = $number;
        } else {
            // If the number does not exist, insert it into the database
            $insert = "INSERT INTO tapp_blacklist (number, datetime, user_id) VALUES ('$number', NOW(), '".$_SESSION['id']."')";
            $insert_data = $this->db->query($insert);
            if ($insert_data) {
                // Add the number to the inserted list
                $insertedNumbers[] = $number;
            }
        }
    }

    // Return the result (you can handle this part to display messages as needed)
    if (!empty($existingNumbers)) {
        $_SESSION['blacklist_already'] = 'The following numbers already exist: ' . implode(', ', $existingNumbers);
    }

    if (!empty($insertedNumbers)) {
        $_SESSION['blacklist_added'] = 'The following numbers were added: ' . implode(', ', $insertedNumbers);
        return 'inserted';
    } else {
        return false;
    }
}




	function getdata()
	{
	  $sql = "select * from tapp_blacklist where user_id = '".$_SESSION['id']."'";
	  $result = $this->db->query($sql);
	  if ($result->num_rows()>0)
	 {
      $data = $result->result_array();
      return $data;
	 }
	  else
	 {
	  return $data = "No";
	  }
	}

	function delete_blacklist($i)
	{
		$sql = "delete from tapp_blacklist where id = '$i'";
		$check = $this->db->query($sql);
		if ($check==true)
		{
			$_SESSION['delete_blacklist'] = 'Number has been deleted';
			return 'delete';
		}
		else
		{
			return false;
		}
	}

}

?>
