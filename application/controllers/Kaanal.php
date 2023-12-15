<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaanal extends CI_Controller {

   function __construct() {
    parent::__construct();

    $this->load->helper('url');
	$this->load->model('KaanalModel');
		// if($this->session->userdata('register_id')) 
		// {
		// 	$this->load->view("dowenload_certificate");
		// }
   }

	public function index()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->index();	
		// $data = $this->KaanalModel->orangehvc();
		// echo'<pre>';print_r($data);exit;
		$this->load->view("index",$data);
	} 
	
	public function about()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->about();			
		$this->load->view("about",$data);
	} 
	public function review()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->review();			
		$this->load->view("review",$data);
	} 

	public function addreview()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->addreview();			
		$this->load->view("addreview",$data);
	} 
	public function aboutprofile()
	{	
	    header('Access-Control-Allow-Origin: *');
		// $data = $this->KaanalModel->aboutprofilee();
		$representatives_id = $this->uri->segment(2);
		$data = $this->KaanalModel->aboutprofilee($representatives_id);	
		// echo'<pre>';
		// print_r($data);
		// exit;			
		$this->load->view("aboutprofile",$data);
	} 
	public function teamdetails()
	{	
	    header('Access-Control-Allow-Origin: *');
		// $data = $this->KaanalModel->aboutprofilee();
		$team_id = $this->uri->segment(2);
		$data = $this->KaanalModel->teamdetailsdata($team_id);	
		// echo'<pre>';
		// print_r($data);
		// exit;			
		$this->load->view("teamdetails",$data);
	}
	public function trustboard()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->about();			
		$this->load->view("trust_board",$data);
	} 
	public function appeal()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->appeal();			
		$this->load->view("appeal",$data);
	} 
	public function donation()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->donation();			
		$this->load->view("donation",$data);
	} 
	public function partners()
	{	
	    header('Access-Control-Allow-Origin: *');
		$data = $this->KaanalModel->partners();		
		// $data = $this->KaanalModel->webdata('partners','');
		// $data['orangehvc'] = $this->KaanalModel->webdata('orangehvc','')['orangehvc'];	
		// echo'<pre>';
		// print_r($data);
		// exit;
		$this->load->view("partners",$data);
	}
	public function orangehvc()
	{	
	    header('Access-Control-Allow-Origin: *');
		$orangehvc_id = $this->uri->segment(2);
		$data = $this->KaanalModel->orangehvc($orangehvc_id);	
		// $data = $this->KaanalModel->orangehvcid();
		// $data[''] = $this->KaanalModel->webdata('orangehvc',$orangehvc_id.' = orangehvc_id');	
		// $data['orangehvc'] = $this->KaanalModel->webdata('orangehvc','')['orangehvc'];	
		// echo'<pre>';
		// print_r($data);
		// exit;
		$this->load->view("orangehvc",$data);
	}
	public function orangehvcgallerydata()
	{	
	    header('Access-Control-Allow-Origin: *');
		$orangehvc_id = $this->uri->segment(2);
		$data = $this->KaanalModel->orangehvcgallerydata($orangehvc_id);	
		// $data = $this->KaanalModel->orangehvcid();
		// $data[''] = $this->KaanalModel->webdata('orangehvc',$orangehvc_id.' = orangehvc_id');	
		// $data['orangehvc'] = $this->KaanalModel->webdata('orangehvc','')['orangehvc'];	
		// echo'<pre>';
		// print_r($data);
		// exit;
		$this->load->view("orangehvcgallery",$data);
	}
	
	public function news_events()
	{	
	    header('Access-Control-Allow-Origin: *');		
		$data = $this->KaanalModel->newsevent();	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("newsevents",$data);

	} 
	public function service()
	{	
	    header('Access-Control-Allow-Origin: *');		
		$data = $this->KaanalModel->service();	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("kaanalservice",$data);

	} 
	public function communtityservices()
	{	
	    header('Access-Control-Allow-Origin: *');		
		$data = $this->KaanalModel->communtityservices();	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("communtityservices",$data);

	} 

	public function wttcenters()
	{	
	    header('Access-Control-Allow-Origin: *');		
		$data = $this->KaanalModel->wttcenters();	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("wttcenters",$data);

	} 

	public function wttpatient()
	{	
	    header('Access-Control-Allow-Origin: *');	
		$wttyr_id = $this->uri->segment(2);
		// $data = $this->KaanalModel->orangehvcgallerydata($wttyr_id);	
		$data = $this->KaanalModel->wttpatient($wttyr_id);	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("wttpatient",$data);

	}
	public function wttsurgery()
	{	
	    header('Access-Control-Allow-Origin: *');		
		$wttyr_id = $this->uri->segment(2);
		// $data = $this->KaanalModel->orangehvcgallerydata($wttyr_id);	
		$data = $this->KaanalModel->wttsurgery($wttyr_id);
		// $data = $this->KaanalModel->wttsurgery();	
		// echo'<pre>';
		// print_r($data);
		// exit;
	    $this->load->view("wttsurgery",$data);

	}
	
	public function rehabilitation()
	{	
	    header('Access-Control-Allow-Origin: *');		
		// $data = $this->KaanalModel->webdata('rehabilitation','');
		$data = $this->KaanalModel->rehabilitation();	
		// $data['rehabilitationimage'] = $this->KaanalModel->webdata('rehabilitationimage','')['rehabilitationimage'];
		// $data['orangehvc'] = $this->KaanalModel->webdata('orangehvc','')['orangehvc'];

	    $this->load->view("rehabilitation",$data);
	} 



	
	
	public function contact()
	{	
	    header('Access-Control-Allow-Origin: *');	
		$data = $this->KaanalModel->contact();		
		$this->load->view("contact",$data);
	} 

	public function insert_review()  {   
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();   
		$output = $this->KaanalModel->insert_revieww($data);
		echo json_encode($output);
	}

	public function send_mail()
	{
		$data = $this->input->post();
		// print_r($data);
		// exit;
// srialagartilesandgranites@gmail.com
// 		$EmailAddress= 'karthik1732k@gmail.com';
		$EmailAddress= 'srialagartilesandgranites@gmail.com';
		$name = ''.$data["name"].'';
		$subject="SriAlagarTiles";
		// $message="<p>From  : <b>".$data['name']."</b> <br> Phone Number : <b>".$data['phone']."</b> <br> Comments/Message : <b> ".$data['comments']."</b></p>";
		// Load PHPMailer library
// 		require_once APPPATH.'third_party/PHPMailer/Exception.php';
// 		require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
// 		require_once APPPATH.'third_party/PHPMailer/SMTP.php'; 	
        require_once APPPATH.'third_party/SMTP_PHPmailer/phpmailer.php'; 	
		$mail = new PHPMailer();
		// SMTP configuration
		$mail->isSMTP();
		$mail->Host = 'localhost';
		$mail->Port = 25;
		// $mail->SMTPDebug = 2; 
		$mail->SMTPAuth = false;
		$mail->Username = 'usedfortestingg@gmail.com'; //your mail id
		$mail->Password = 'wthokqjkkghttyno'; // pass
		$mail->SMTPSecure = false;
		$mail->setFrom(''.$data["email"].'', ''.$data["name"].'');
		$mail->addReplyTo(''.$data["email"].'', ''.$data["name"].'');
		$mail->addAddress(''.$EmailAddress.'', ''.$name.'');
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body ='<table style="border-collapse: collapse;width: 100%;">
						<tr>
						<th style="border: 1px solid #DDDDDD;padding: 8px;text-align:left;">Name</th>
						<th style="border: 1px solid #DDDDDD;padding: 8px;text-align:left;">Email Address</th>
						<th style="border: 1px solid #DDDDDD;padding: 8px;text-align:left;">Phone Number</th>
						<th style="border: 1px solid #DDDDDD;padding: 8px;text-align:left;">Message</th>
						</tr>
						<tr>
						<td style="border: 1px solid #DDDDDD;padding: 8px;">'.$data["name"].'</td>
						<td style="border: 1px solid #DDDDDD;padding: 8px;">'.$data["email"].'</td>
						<td style="border: 1px solid #DDDDDD;padding: 8px;">'.$data["phone"].'</td>
						<td style="border: 1px solid #DDDDDD;padding: 8px;">'.$data["message"].'</td>
						</tr>
					</table>';
		// $send_mail = $mail->send();

		if($mail->send()){
			$result['result'] = 'success';
			$result['message'] = 'Mail sent successfully';
			$result['code'] = 200;
		}
		else
		{
			$result['result'] = 'faile';
			$result['message'] = $mail->ErrorInfo;
			$result['code'] = 400;
		}

		// print_r($result);
		// exit;

		echo json_encode($result);
	}
	
		public function saveContactUsDetails()
	{
        header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
	   // echo"<pre>";
	   // print_r($data);
	   // exit;
	    
		$result = $this->KaanalModel->saveContactUsDetailsModel($data);
		echo json_encode($result);
	}
	

	}



