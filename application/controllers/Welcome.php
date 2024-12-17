<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct()

	{
	parent::__construct();
    
    //$this->load->library('session');
    	$this->load->library('session');
		$this->load->database('admin');
     	$this->load->helper('url');
     		$this->load->model('Common_model');
    
   // $this->load->library('session');

	//	$this->SessionModel->checkadminlogin(array("login","loginajax"));

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
  
  
  
  
  function uploadproductimagefile($key)

	{

		$message = array();

		$data = array();

		if($_FILES[$key]['size'] > 0)

		{

			$config = array(

				'upload_path' => "./upload/team1/",

				'allowed_types' => "gif|jpg|png|jpeg|pdf",

				/*'overwrite' => TRUE*/

				'max_size' => 60000,

				'max_height' => "",

				'max_width' => ""

			);

			$config['remove_spaces'] = true;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);



			if($this->upload->do_upload($key))

			{

			//$data = array('upload_data' => $this->upload->data());

				$uploadData = $this->upload->data();

				//$this->resizeImage($uploadData['file_name']);

				$image_name = $uploadData['file_name'];

				return $image_name;

			}

			else

			{

				echo $this->upload->display_errors();

			}

		}

		else

		{

			return 'Your uploaded image file is blank.';

		}

	}

function uploadproductvideofile($key)

	{

		$message = array();

		$data = array();

		if($_FILES[$key]['size'] > 0)

		{

			$config = array(

				'upload_path' => "./upload/team2/",

				'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4",

				/*'overwrite' => TRUE*/

				'max_size' => 60000,

				'max_height' => "",

				'max_width' => ""

			);

			$config['remove_spaces'] = true;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);



			if($this->upload->do_upload($key))

			{

			//$data = array('upload_data' => $this->upload->data());

				$uploadData = $this->upload->data();

				//$this->resizeImage($uploadData['file_name']);

				$image_name = $uploadData['file_name'];

				return $image_name;

			}

			else

			{

				echo $this->upload->display_errors();

			}

		}

		else

		{

			return 'Your uploaded image file is blank.';

		}

	}
function uploadteamfile($key)

	{

		$message = array();

		$data = array();

		if($_FILES[$key]['size'] > 0)

		{

			$config = array(

				'upload_path' => "./upload/team/",

				'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4",

				/*'overwrite' => TRUE*/

				'max_size' => 60000,

				'max_height' => "",

				'max_width' => ""

			);

			$config['remove_spaces'] = true;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);



			if($this->upload->do_upload($key))

			{

			//$data = array('upload_data' => $this->upload->data());

				$uploadData = $this->upload->data();

				//$this->resizeImage($uploadData['file_name']);

				$image_name = $uploadData['file_name'];

				return $image_name;

			}

			else

			{

				echo $this->upload->display_errors();

			}

		}

		else

		{

			return 'Your uploaded image file is blank.';

		}

	}

public function editprofile($id="")
	{

        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
     
          $data = array();

		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();
            $insert_data['id'] = $subscriber_id;
           
            $insert_data['email'] = $_POST["email"];
            $insert_data['pwd'] = $_POST["pwd"];
           
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('org_list',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('org_list',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/requester/editprofile');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('org_list', $whr);
	    
		}
 $whr2 = array('1'=>1);

	$data['taxlist2'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr2);
	
          

		$this->load->view('editprofile',$data);
	}

 else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}


function uploadchannelfile($key)

	{

		$message = array();

		$data = array();

		if($_FILES[$key]['size'] > 0)

		{

			$config = array(

				'upload_path' => "./upload/channels/",

				'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4",

				/*'overwrite' => TRUE*/

				'max_size' => 60000,

				'max_height' => "",

				'max_width' => ""

			);

			$config['remove_spaces'] = true;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);



			if($this->upload->do_upload($key))

			{

			//$data = array('upload_data' => $this->upload->data());

				$uploadData = $this->upload->data();

				//$this->resizeImage($uploadData['file_name']);

				$image_name = $uploadData['file_name'];

				return $image_name;

			}

			else

			{

				echo $this->upload->display_errors();

			}

		}

		else

		{

			return 'Your uploaded image file is blank.';

		}

	}


       public function realstate() {
        // API details
        $url = "https://ap-southeast-2.api.vaultre.com.au/api/v1.3/properties/residential/lease";
        $headers = [
            "Accept: application/json",
            "X-Api-Key: LHrbEPmCIe4gen3P9qtvA1ncAmilBkzo57lvgyke",
            "Authorization: Bearer hikhaezgirqshdwdirckequurltfwrckcitjnpoh"
        ];

        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        // Close cURL session
        curl_close($ch);

        // Convert JSON response to PHP array
        $data['properties'] = json_decode($response, true);

        // Load the view with the data
        $this->load->view('realstate', $data);
    }


  
	public function pageindex()
	{
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
		$this->load->view('index');
	}
    else {
            redirect("https://supporthub.xytr.org/ticket_admin");
        }
	}

      public function replyview($id="")
{
     $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
    $data = array();

    // Check if the 'id' parameter is not empty
    if (!empty($id)) {
        // Define the where clause to filter records by 'reply_id'
        $whr1 = array('reply_id' => $id);

        // Get all records matching the 'reply_id'
        $data['taxlist'] = $this->Common_model->getAllRecordsOrderById('ticket_reply', 'id', 'ASC', $whr1);
    } else {
        // Handle the case where 'id' is not provided (optional)
        $data['taxlist'] = array(); // Or some default data or message
    }

    // Load the view with the filtered data
    $this->load->view('replyview', $data);
}
else {
            redirect("https://supporthub.xytr.org/ticket_admin");
        }
	}


  public function businessarea()
	{
  $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
    
     $whr1 = array('user_id'=>$subscriber_id);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr1);
	
	 
		$this->load->view('businessarea',$data);
	}
    else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}

	public function companylist()
	{
  $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
    
     $whr1 = array('user_id'=>$subscriber_id);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('companylist', 'id', 'DESC',$whr1);
	
	 
		$this->load->view('companylist',$data);
	}
    else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}


     public function rolepermission()
	{

       $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
     $whr1 = array('1'=>1);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('role_permission', 'id', 'DESC',$whr1);
	
	 
		$this->load->view('role_permission',$data);
	}
   else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}
  
public function requesterlist($id="")
	{
  $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
$data = array();

        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();
            if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value){
			        //print_r($value['size']);
			        if($value['size'] > 0) {
						$filearraydata = $this->uploadchannelfile($key);
			            $filearray[$key] = $filearraydata;
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
			}   
			
            
             	
				if(isset($filearray['logo'])) {
				$insert_data['logo'] = $filearray['logo'];
			}
            $insert_data['type'] = 1;
            $insert_data['user_id'] = $subscriber_id;
            $insert_data['role'] = 'Requester';
                    //	$insert_data['c_name'] = $_POST["c_name"];
                        $insert_data['company_name'] = $_POST["company_name"];
                        $insert_data['busi_name'] = $_POST["busi_name"];
                        	$insert_data['busi_area'] = $_POST["busi_area"];
                            $insert_data['req_name'] = $_POST["req_name"];
                        $insert_data['email'] = $_POST["email"];
                        $insert_data['phone_no'] = $_POST["phone_no"];
                        $insert_data['city'] = $_POST["city"];
                        $insert_data['pwd'] = $_POST["pwd"];
                      
                    
           
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('org_list',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('org_list',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/ticket_admin/requesterlist');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('org_list', $whr);
	    
		}
        $whr1 = array('role'=>'Requester');

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr1);
	
$whr2 = array('1'=>1);

	$data['taxlist2'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr2);

	$whr3 = array('1'=>1);

	$data['taxlist3'] = $this->Common_model->getAllRecordsOrderById('companylist', 'id', 'DESC',$whr3);

		$this->load->view('requesterlist',$data);
	}
     else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}
public function createuser($id="")
	{
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {

         $data = array();

          
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();
            $insert_data['type'] = 2;
            $insert_data['user_id'] = $subscriber_id;
                    	$insert_data['role'] = $_POST["role"];
                        $insert_data['full_name'] = $_POST["full_name"];
                        	$insert_data['busi_area'] = $_POST["busi_area"];
                        $insert_data['email'] = $_POST["email"];
                        $insert_data['phone'] = $_POST["phone"];
                        $insert_data['city'] = $_POST["city"];
                        $insert_data['pwd'] = $_POST["pwd"];
                      
                    
           
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('org_list',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('org_list',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/ticket_admin/createuser');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('org_list', $whr);
	    
		}
        $whr1 = array('user_id'=>$subscriber_id,'type'=>2);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr1);
	
    $whr2 = array('1'=>1);

	$data['taxlist2'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr2);


	  
		$this->load->view('createuser',$data);
	}
else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}
    
public function userlist()
	{
		$this->load->view('userlist');
	}
    public function signup()
	{

           $data = array();
		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();

              if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value){
			        //print_r($value['size']);
			        if($value['size'] > 0) {
						$filearraydata = $this->uploadchannelfile($key);
			            $filearray[$key] = $filearraydata;
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
			}   
			
            
             	
				if(isset($filearray['logo'])) {
				$insert_data['logo'] = $filearray['logo'];
			}
          
            $insert_data['type'] = 2;
            $insert_data['company_name'] = $_POST["company_name"];
                        $insert_data['c_name'] = $_POST["c_name"];
                        $insert_data['req_name'] = $_POST["c_name"];
                       $insert_data['phone_no'] = $_POST["phone_no"];
                        $insert_data['email'] = $_POST["email"];
                       $insert_data['address'] = $_POST["address"]; 
                        $insert_data['city'] = $_POST["city"];
                        $insert_data['pwd'] = $_POST["pwd"];
                         $insert_data['role'] = 'Requester';
                      $insert_data['status'] = 0;
                    
           
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('org_list',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('org_list',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/requester/');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('org_list', $whr);
	    
		}
        $whr1 = array('user_id'=>$subscriber_id,'type'=>2);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr1);
	
    $whr2 = array('1'=>1);

	$data['taxlist2'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr2);

		$this->load->view('signup',$data);
	}

public function createbusiness($id = "")
{
    // Get user session data
    $userdata = $this->session->userdata(USER_SESSION);
    $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';

    // Redirect if no subscriber ID
    if (empty($subscriber_id)) {
        redirect("https://supporthub.xytr.org/ticket_admin/");
    }

    // Setup where condition to fetch user-specific data
    $whr2 = array("id" => $subscriber_id);

    if (!empty($subscriber_id)) {
        $data = array();

        // Check if POST data is set and not empty
        if (isset($_POST) && !empty($_POST)) {
            $insert_data = array();
            $insert_data['user_id'] = $subscriber_id;
            $insert_data['area_name'] = $_POST["area_name"];
            $insert_data['note'] = $_POST["note"];

            // Check if area_name already exists in the database
            $existing_area = $this->Common_model->getSingleRecordById('business_area', array('area_name' => $insert_data['area_name']));

            if ($existing_area) {
                // If the area_name already exists, show a message or handle accordingly
              $this->session->set_flashdata('error'
              ,'This Business Area is already created..');
redirect('https://supporthub.xytr.org/ticket_admin/createbusiness');

            }

            // If ID exists in POST, perform update, otherwise insert new record
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $result_id = $this->Common_model->updateRecords('business_area', $insert_data, array('id' => $_POST['id']));
            } else {
                $result_id = $this->Common_model->addRecords('business_area', $insert_data);
            }

            // Redirect after successful insertion or update
            if ($result_id) {
                redirect('https://supporthub.xytr.org/ticket_admin/businessarea');
            }
        }

        // If an ID is provided, load the record for editing
        if (!empty($id)) {
            $whr = array('id' => $id);
            $data['tax_data'] = $this->Common_model->getSingleRecordById('business_area', $whr);
        }

        // Load the view for creating business
        $this->load->view('createbusiness', $data);
    } else {
        redirect("https://supporthub.xytr.org/ticket_admin/");
    }
}

public function addcompany($id = "")
{
    // Get user session data
    $userdata = $this->session->userdata(USER_SESSION);
    $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';

    // Redirect if no subscriber ID
    if (empty($subscriber_id)) {
        redirect("https://supporthub.xytr.org/ticket_admin/");
    }

    // Setup where condition to fetch user-specific data
    $whr2 = array("id" => $subscriber_id);

    if (!empty($subscriber_id)) {
        $data = array();

        // Check if POST data is set and not empty
        if (isset($_POST) && !empty($_POST)) {
            $insert_data = array();
            $insert_data['user_id'] = $subscriber_id;
            $insert_data['company_name'] = $_POST["company_name"];

            $insert_data['note'] = $_POST["note"];
            

            $existing_area = $this->Common_model->getSingleRecordById('companylist', array('company_name' => $insert_data['company_name']));

if ($existing_area) {
    // If the company name already exists, show an error message and redirect
    $this->session->set_flashdata('error', 'This Company is already created');
    
redirect('https://supporthub.xytr.org/ticket_admin/addcompany');

}


            // If ID exists in POST, perform update, otherwise insert new record
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $result_id = $this->Common_model->updateRecords('companylist', $insert_data, array('id' => $_POST['id']));
            } else {
                $result_id = $this->Common_model->addRecords('companylist', $insert_data);
            }

            // Redirect after successful insertion or update
            if ($result_id) {
                redirect('https://supporthub.xytr.org/ticket_admin/companylist');
            }
        }

        // If an ID is provided, load the record for editing
        if (!empty($id)) {
            $whr = array('id' => $id);
            $data['tax_data'] = $this->Common_model->getSingleRecordById('companylist', $whr);
        }

        // Load the view for creating business
        $this->load->view('addcompany', $data);
    } else {
        redirect("https://supporthub.xytr.org/ticket_admin/");
    }
}



public function addrole($id="")
	{
          $data = array();

          
        $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();
            $insert_data['user_id'] = $subscriber_id;
                    	$insert_data['role'] = $_POST["role"];
                      
                    
           
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('role_permission',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('role_permission',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/ticket_admin/rolepermission');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('role_permission', $whr);
	    
		}
	  
		$this->load->view('addrole',$data);
	}

 public function addticket($id="")
	{

$userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {
         $userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
     
          $data = array();

		if(isset($_POST) && !empty($_POST)){
			$insert_data = array();
             if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value){
			        //print_r($value['size']);
			        if($value['size'] > 0) {
						$filearraydata = $this->uploadchannelfile($key);
			            $filearray[$key] = $filearraydata;
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
			}   
			
            
             	
				if(isset($filearray['attachment'])) {
				$insert_data['attachment'] = $filearray['attachment'];
			}

          //  $insert_data['req_name'] = $subscriber_id;
            $insert_data['ticket_id'] = rand(1000,9999);
          //  $insert_data['ticket_details'] = $_POST["ticket_details"];
           // $insert_data['customer_name'] = $_POST["customer_name"];
           
             $insert_data['busi_area'] = $_POST["busi_area"];
             $insert_data['status'] = $_POST["status"];
           
 $insert_data['assign_engg'] = $_POST["assign_engg"];
             $insert_data['assign_man'] = $_POST["assign_man"];

            $insert_data['ticket_subject'] = $_POST["ticket_subject"];
            $insert_data['ticket_descript'] = $_POST["ticket_descript"];
           //  $insert_data['effort'] = $_POST["effort"];
            $insert_data['created_date'] = date('Y-m-d h:i:s');
                      
			if (isset($_POST['id']) &&  !empty($_POST['id'])){
				$result_id = $this->Common_model->updateRecords('ticket_list',$insert_data,array('id'=>$_POST['id']));
			}else{
				$result_id = $this->Common_model->addRecords('ticket_list',$insert_data);
				//redirect('https://ezheal.ai/admin/appointlist')
			}
			        if ($result_id) {
            redirect('https://supporthub.xytr.org/ticket_admin/ticketlist');
        } 

		}
		if(!empty($id))
		{
			$whr = array('id'=>$id);
			$data['tax_data'] = $this->Common_model->getSingleRecordById('ticket_list', $whr);
	    
		}
 $whr2 = array('1'=>1);

	$data['taxlist2'] = $this->Common_model->getAllRecordsOrderById('business_area', 'id', 'DESC',$whr2);
	
            $whr4 = array('role'=>'Engineer');

	$data['taxlist4'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr4);

        $whr3 = array('role'=>'Manager');

	$data['taxlist3'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr3);

      $whr5 = array('role'=>'Requester');

	$data['taxlist5'] = $this->Common_model->getAllRecordsOrderById('org_list', 'id', 'DESC',$whr5);

		$this->load->view('addticket',$data);
	}

    else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}

    public function get_filtered_staff()
{
    $business_area_id = $this->input->post('busi_area');

    // Get filtered managers
    $managers = $this->Common_model->getFilteredRecords('org_list', array('role' => 'Manager', 'busi_area' => $business_area_id));
    
    // Get filtered engineers
    $engineers = $this->Common_model->getFilteredRecords('org_list', array('role' => 'Engineer', 'busi_area' => $business_area_id));

    // Prepare the response
    $response = array(
        'managers' => $managers,
        'engineers' => $engineers
    );

    echo json_encode($response);
}


  	public function index(){
        $data = array();
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            
            $chkreturnrequest = $this->Common_model->getSingleRecordById('org_list', array('email' => $email, 'pwd' => $password));
          //  print_r($chkreturnrequest);
            if ($chkreturnrequest) {
                if ($chkreturnrequest['status'] == 3) {
                    if ($chkreturnrequest['type'] == 3) {
                  if ($chkreturnrequest['org_type'] == 'Organisation'){
                  
                    $fidsrst = $this->session->userdata('email',$email);
                    $timefis = !empty($fidsrst['email']) ? $fidsrst['email'] : '';
                    if (!empty($timefis)) {
                        $this->session->set_userdata(USER_SESSION, $chkreturnrequest);
                        $data['success'] = "successfully login";
                			redirect('https://supporthub.xytr.org/ticket_admin/pageindex');

                    } else {
                        $this->session->set_userdata(USER_SESSION, $chkreturnrequest);
                        $data['success'] = "Successfully login";
                    }
                } else {
                    $data['error'] = "Waiting for approval";
                }
            } 
            }
              else {
                $data['error'] = "Invalid Credentials please try again";
            }
            }
        }
   
	    
	    
	    
		$this->load->view('login',$data);
	}


	
  			
	 public function ticketlist()
	{
$userdata = $this->session->userdata(USER_SESSION);
      $subscriber_id = !empty($userdata['id']) ? $userdata['id'] : '';
                $whr2 = array("id" => $subscriber_id);
    if (!empty($subscriber_id)) {


     $whr1 = array('1'=>1);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('ticket_list', 'id', 'DESC',$whr1);
	
	    
	    
		$this->load->view('ticketlist',$data);
	}
    else {
            redirect("https://supporthub.xytr.org/ticket_admin/");
        }
	}

public function ticketreport()
	{
        $whr1 = array('1'=>1);

	$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('ticket_list', 'id', 'DESC',$whr1);
	
    $this->load->view('ticketreport',$data);
	}


	 public function joblist()
	{
	    
	     $data = array();

		$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('job','id', 'DESC',$data);
		$this->load->view('job',$data);
	}
	
	
	public function change_status(){

        $tablename = $_POST['tablename'];

        $status = $_POST['status'];

        $id = $_POST['id'];

        $action = $_POST['action'];

        $whrcol = $_POST['whrcol'];

        $whrstatuscol = $_POST['whrstatuscol'];

        $res = $this->Common_model->updateRecords($tablename, array($whrstatuscol=>$status), array($whrcol => $id));

        // $resp = array('code'=>SUCCESS,'message'=>'Record has been '.$action.'successfully');

        // echo json_encode($resp);

        $msg = array('status'=>1, 'msg'=>'Record has been '.$action.' successfully');

		echo json_encode($msg);

		exit();

    }
public function filterTickets()
{
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');
    
    $this->load->model('Common_model');
    
    // Fetch tickets based on the date range
    $whr = array(
        'created_date >=' => $start_date,
        'created_date <=' => $end_date
    );
    
    $tickets = $this->Common_model->getRecordsByCondition('ticket_list', $whr);
    
    $result = array();
    foreach ($tickets as $ticket) {
        // Fetch additional details
        $area = $this->Common_model->getSingleRecordById('business_area', array('id' => $ticket['busi_area']));
        $manager = $this->Common_model->getSingleRecordById('org_list', array('id' => $ticket['assign_man']));
        $engineer = $this->Common_model->getSingleRecordById('org_list', array('id' => $ticket['assign_engg']));
        
        $result[] = array(
            'id' => $ticket['id'],
            'created_date' => $ticket['created_date'],
            'ticket_id' => $ticket['ticket_id'],
            'ticket_details' => $ticket['ticket_details'],
            'customer_name' => $ticket['customer_name'],
            'req_name' => $ticket['req_name'],
            'area_name' => $area['area_name'],
            'assign_man' => $manager['full_name'],
            'assign_engg' => $engineer['full_name'],
            'status' => $ticket['status']
        );
    }
    
    echo json_encode(array('tickets' => $result));
}




public function get_assignments_by_area()
{
    $busi_area_id = $this->input->post('busi_area');

    if ($busi_area_id) {
        // Fetch managers and engineers based on business area
        $managers = $this->Common_model->getRecordsByField('org_list', 'role', 'Manager', array('busi_area' => $busi_area_id));
        $engineers = $this->Common_model->getRecordsByField('org_list', 'role', 'Engineer', array('busi_area' => $busi_area_id));

        $data = array(
            'managers' => $managers,
            'engineers' => $engineers
        );

        echo json_encode($data);
    }
}


  
  
public function profile()

	{

	 $data = array();

	 $check_admin_password = $this->Common_model->getSingleRecord("admin",array('id'=>1));

	 $admin_current_password = $check_admin_password['password'];

	 $admin_txn_current_password = $check_admin_password['password'];

	 

	 if(isset($_POST['changeprofileinformation'])){

	  $yourfirstname = $_POST['yourfirstname'];

	  $yourlastname = $_POST['yourlastname'];

	  $youremailid = $_POST['youremailid'];
	  
	   $yourpassword = $_POST['yourpassword'];

	  $today_date = date('Y-m-d h:i:s A',time());

	  

	  $this->Common_model->updateRecords('admin',array('name'=>$yourfirstname,'lastname'=>$yourlastname,'email'=>$youremailid,'password'=>$yourpassword),array('id'=>1));

	  $data['success'] = "Updating please wait...!";

	 }

	 if(isset($_POST['changenormalpassword'])){

	  $current_password = md5(trim($_POST['current_password']));

	  $new_password = md5(trim($_POST['new_password']));

	  $re_enter_password = md5(trim($_POST['re_enter_password']));	  

	  $today_date = date('Y-m-d h:i:s A',time());

	  	  

	  if($admin_current_password!=$current_password){

	   $data['error'] = "Invalid Current Password...!";

	  }

	  else{

	   if($new_password!=$re_enter_password){

	    $data['error'] = "New password not matched...!";

	   }

	   else{

	    $this->Common_model->updateRecords('admin',array('password'=>$re_enter_password),array('id'=>1));

		$data['success'] = "Password updating, please wait...!";

	   }

	  }

	 }	 

	 if(isset($_POST['changetxnpassword'])){

	  $current_txn_password = md5(trim($_POST['current_password']));

	  $new_txn_password = md5(trim($_POST['new_password']));

	  $re_enter_txn_password = md5(trim($_POST['re_enter_password']));	  

	  $today_date = date('Y-m-d h:i:s A',time());

	  	  

	  if($admin_txn_current_password!=$current_txn_password){

	   $data['error'] = "Invalid Current TXN Password...!";

	  }

	  else{

	   if($new_txn_password!=$re_enter_txn_password){

	    $data['error'] = "New TXN password not matched...!";

	   }

	   else{

	    $this->Common_model->updateRecords('admin',array('password'=>$re_enter_txn_password),array('id'=>1));

		$data['success'] = "TXN Password updating, please wait...!";

	   }

	  }

	 }

	 $data['admin_information'] = $this->Common_model->getSingleRecord("admin",array('id'=>1));
	 
		$this->load->view('manageprofile',$data);
	}
		public function sellproduct()
	{
	    
	    
	   $data = array();

		$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('product','id',    'DESC',$data);
 
		$this->load->view('sellproduct',$data);
	}



public function exportuserreport(){ 
   // file name 
   $filename = 'users_'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; ");
   
   // get data 
   $usersData = $this->Common_model->getUserDetails15();

   // file creation 
   $file = fopen('php://output', 'w');
 
   $header = array("ticket_id","ticket_details","customer_name","req_name","status","created_date"); 
   fputcsv($file, $header);
   foreach ($usersData as $key=>$line){ 
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
}


 
	public function sellorderlist()
	{
	    
	    
	   $data = array();

		$data['taxlist'] = $this->Common_model->getAllRecordsOrderById('delivery_address','id', 'DESC',$data);
 
		$this->load->view('sellorderlist',$data);
	}

  public function deleteRecord()   
    {
    
        $id = $_POST['id'];

        $table = $_POST['table'];

        $colwhr = $_POST['colwhr'];

      	$this->Common_model->deleteRecords($table,array($colwhr=>$id));
      	
      	$msg = array('status'=>1, 'msg'=>'Deleted successfully!');

		echo json_encode($msg);

		exit();

     	// redirect(base_url().'adminnew/Service_list', 'refresh');

    }

    public function logout()

	{
		$this->session->unset_userdata(USER_SESSION);

		redirect("https://supporthub.xytr.org/ticket_admin/",'refresh');

	}
  
    
}
