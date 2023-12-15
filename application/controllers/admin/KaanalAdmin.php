<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaanalAdmin extends CI_Controller {
    
   	public function __construct() {
	    parent::__construct();
        $this->load->helper('url');
		$this->load->model('KaanalModel');
		if(!$this->session->userdata('user_username')){ 
			redirect('admin/Login');
		}
   	}

	public function index()	{	
	    header('Access-Control-Allow-Origin: *');		
		$this->load->view("admin/settingsLogin");
	}

	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('admin/Login/index');
	}

    // *************************** [Banner] ********************************************************************
    public function Banner(){	
	    header('Access-Control-Allow-Origin: *');		
		$this->load->view("admin/home/banner");
	}

    public function get_banner() {   
        header('Access-Control-Allow-Origin: *');       
        $output = $this->KaanalModel->get_bannerr();
        echo json_encode($output);
    }

    public function insert_banner()  {   
        header('Access-Control-Allow-Origin: *');
        $data = $this->input->post();   
        if($_FILES['image_url']['name'] == "")
        {
            $data["image_url"] = '';
        }
        else if($_FILES['image_url']['name'] != '')
        {
            $name = $_FILES['image_url']['name'];
            $name = str_replace(" ","_",$name);
            $file_path_doc = "uploads/banner/";
            $randomNumber = uniqid();
            $file_path = $file_path_doc . $randomNumber . $name;
            $moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
            $data["image_url"] = $file_path;
        }   
        $output = $this->KaanalModel->insert_bannerr($data);
        echo json_encode($output);
    }

    public function delete_banner()  {   

        header('Access-Control-Allow-Origin: *');
        $data = $this->input->post();   
		// print_r($data);
		// exit;
        $output = $this->KaanalModel->delete_bannerr($data);
        echo json_encode($output);
    }

	public function update_banner()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			header('Access-Control-Allow-Origin: *');
			$data = $this->input->post();
			if(empty($_FILES['image_url']['name']))
            {      
				$success=$this->KaanalModel->update_bannerr($data);
                echo json_encode($success);
            }
            else
            {
				$config['upload_path'] = './uploads/banner/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = 2048;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);	
				if($this->upload->do_upload('image_url'))
				{
					unset($data["image_url"]);
					$data["image_url"] = 'uploads/banner/'.$this->upload->data('file_name');			
					$success=$this->address->update_bannerr($data);
					echo json_encode($success);
				}
				
            }
		}
		else
		{
			$result["status"]="fail";
			echo json_encode($result);
		}		
	}



// *************************** [hospital detail] ********************************************************************


    public function hospitaldetails()	{	
	    header('Access-Control-Allow-Origin: *');			
		$this->load->view("admin/home/hospitaldetails");
	}

	public function get_hospital_detail() {   
        header('Access-Control-Allow-Origin: *');       
        $output = $this->KaanalModel->get_hospital_detaill(); 
        echo json_encode($output);
    }

	public function insert_hospital_detail()  {   
        header('Access-Control-Allow-Origin: *');
        $data = $this->input->post();   
       
        $output = $this->KaanalModel->insert_hospital_detaill($data);
        echo json_encode($output);
    }

    public function delete_hospital_detail()  {   

        header('Access-Control-Allow-Origin: *');
        $data = $this->input->post();   
		// print_r($data);
		// exit;
        $output = $this->KaanalModel->delete_hospital_detaill($data);
        echo json_encode($output);
    }

	public function update_hospital_detail()
	{
		header('Access-Control-Allow-Origin: *');	
		$data = $this->input->post();
		$output = $this->KaanalModel->update_hospital_detaill($data);
		echo json_encode($output);
	}
// *************************** [About] ********************************************************************


public function about()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/home/about");
}

public function get_about() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_aboutt(); 
	echo json_encode($output);
}

public function insert_about()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_aboutt($data);
	echo json_encode($output);
}

public function delete_about()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_aboutt($data);
	echo json_encode($output);
}

public function update_about()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_aboutt($data);
	echo json_encode($output);
}
	
// *************************** [Video] ********************************************************************


public function video()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/home/ourvideos");
}

public function get_video() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_videoo(); 
	echo json_encode($output);
}

public function insert_video()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_videoo($data);
	echo json_encode($output);
}

public function delete_video()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_videoo($data);
	echo json_encode($output);
}

public function update_video()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_videoo($data);
	echo json_encode($output);
}

// *************************** [Profile] ********************************************************************


public function profile()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/home/profile");
}

public function get_profile() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_profilee(); 
	echo json_encode($output);
}

public function insert_profile()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_profilee($data);
	echo json_encode($output);
}

public function delete_profile()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_profilee($data);
	echo json_encode($output);
}

public function update_profile()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_profilee($data);
	echo json_encode($output);
}
	

		
  // *************************** [chart] ********************************************************************
  public function chart()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/charts");
}

public function get_chart() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_chartt();
	echo json_encode($output);
}

public function insert_chart()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/chart/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_chartt($data);
	echo json_encode($output);
}

public function delete_chart()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_chartt($data);
	echo json_encode($output);
}

public function update_chart()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_chartt($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/chart/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/chart/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_chartt($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [Service] ********************************************************************
public function service()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/services");
}

public function get_service() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_servicee();
	echo json_encode($output);
}

public function insert_service()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/service/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_servicee($data);
	echo json_encode($output);
}

public function delete_service()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_servicee($data);
	echo json_encode($output);
}

public function update_service()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_servicee($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/service/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/service/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_servicee($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

 
// *************************** [Event] ********************************************************************
public function event()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/events");
}

public function get_event() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_eventt();
	echo json_encode($output);
}

public function insert_event()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/event/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_eventt($data);
	echo json_encode($output);
}

public function delete_event()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_eventt($data);
	echo json_encode($output);
}

public function update_event()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_eventt($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/event/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/event/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_eventt($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}
// *************************** [kaanalservicestitle] ********************************************************************


public function kaanalservicestitle()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/kaanalservicestitle");
}

public function get_kaanalservicestitle() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_kaanalservicestitlee(); 
	echo json_encode($output);
}

public function insert_kaanalservicestitle()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_kaanalservicestitlee($data);
	echo json_encode($output);
}

public function delete_kaanalservicestitle()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_kaanalservicestitlee($data);
	echo json_encode($output);
}

public function update_kaanalservicestitle()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_kaanalservicestitlee($data);
	echo json_encode($output);
}

// *************************** [kaanalservices] ********************************************************************
public function kaanalservices()	{	
	header('Access-Control-Allow-Origin: *');	
	$this->load->view("admin/kaanalservices",);
}

public function get_kaanalservices() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_kaanalservicess();
	echo json_encode($output);
}

public function insert_kaanalservices()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// if($_FILES['image_url']['name'] == "")
	// {
	// 	$data["image_url"] = '';
	// }
	// else if($_FILES['image_url']['name'] != '')
	// {
	// 	$name = $_FILES['image_url']['name'];
	// 	$name = str_replace(" ","_",$name);
	// 	$file_path_doc = "uploads/kaanalservices/";
	// 	$randomNumber = uniqid();
	// 	$file_path = $file_path_doc . $randomNumber . $name;
	// 	$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
	// 	$data["image_url"] = $file_path;
	// }   
	$output = $this->KaanalModel->insert_kaanalservicess($data);
	echo json_encode($output);
}

public function delete_kaanalservices()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_kaanalservicess($data);
	echo json_encode($output);
}

public function update_kaanalservices()
{
	// if ($this->input->server('REQUEST_METHOD') == 'POST')
	// {
	// 	header('Access-Control-Allow-Origin: *');
	// 	$data = $this->input->post();
	// 	if(empty($_FILES['image_url']['name']))
	// 	{      
	// 		$success=$this->KaanalModel->update_kaanalservicess($data);
	// 		echo json_encode($success);
	// 	}
	// 	else
	// 	{
	// 		$config['upload_path'] = './uploads/kaanalservices/';
	// 		$config['allowed_types'] = 'gif|jpg|png|jpeg';
	// 		$config['max_size'] = 2048;
	// 		// $config['randomNumber']= uniqid();
	// 		$this->load->library('upload', $config);
	// 		$this->upload->initialize($config);	
	// 		if($this->upload->do_upload('image_url'))
	// 		{
	// 			unset($data["image_url"]);
	// 			$data["image_url"] = 'uploads/kaanalservices/'.$this->upload->data('file_name');			
	// 			$success=$this->KaanalModel->update_kaanalservicess($data);
	// 			echo json_encode($success);
	// 		}
			
	// 	}
	// }
	// else
	// {
	// 	$result["status"]="fail";
	// 	echo json_encode($result);
	// }		
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_kaanalservicess($data);
	echo json_encode($output);
}

// *************************** [inaugration] ********************************************************************
public function inaugration()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/inaugrationfunction");
}

public function get_inaugration() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_inaugrationn();
	echo json_encode($output);
}

public function insert_inaugration()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/inaugration/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_inaugrationn($data);
	echo json_encode($output);
}

public function delete_inaugration()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_inaugrationn($data);
	echo json_encode($output);
}

public function update_inaugration()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_inaugrationn($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/inaugration/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/inaugration/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_inaugrationn($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [communtityservices] ********************************************************************
public function communtityservices()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/communtityservices");
}

public function get_communtityservices() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_communtityservicess();
	echo json_encode($output);
}

public function insert_communtityservices()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/communtityservices/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_communtityservicess($data);
	echo json_encode($output);
}

public function delete_communtityservices()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_communtityservicess($data);
	echo json_encode($output);
}

public function update_communtityservices()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_communtityservicess($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/communtityservices/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/communtityservices/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_communtityservicess($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}
// *************************** [testimonial] ********************************************************************
public function testimonial()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/testimonial");
}

public function get_testimonial() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_testimoniall();
	echo json_encode($output);
}

public function insert_testimonial()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/testimonial/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_testimoniall($data);
	echo json_encode($output);
}

public function delete_testimonial()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_testimoniall($data);
	echo json_encode($output);
}

public function update_testimonial()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_testimoniall($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/testimonial/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/testimonial/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_testimoniall($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

// *************************** [teamdetails] ********************************************************************


public function teamdetails()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->teamdetails();
    // echo'<pre>';print_r($data);exit;
	$this->load->view("admin/home/teamdetails",$data);
}

public function get_teamdetails() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_teamdetailse(); 
	echo json_encode($output);
}

public function insert_teamdetails()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_teamdetailse($data);
	echo json_encode($output);
}

public function delete_teamdetails()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_teamdetailse($data);
	echo json_encode($output);
}

public function update_teamdetails()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_teamdetailse($data);
	echo json_encode($output);
}


// *************************** [team] ********************************************************************
public function team()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/home/team");
}

public function get_team() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_teams();
	echo json_encode($output);
}

public function insert_team()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/team/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_teams($data);
	echo json_encode($output);
}

public function delete_team()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_teams($data);
	echo json_encode($output);
}

public function update_team()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_teams($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/team/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/team/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_teams($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}




// *************************** [abouttrust] ********************************************************************
public function abouttrust()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/about/abouttrust");
}

public function get_abouttrust() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_abouttrustt();
	echo json_encode($output);
}

public function insert_abouttrust()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/abouttrust/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_abouttrustt($data);
	echo json_encode($output);
}

public function delete_abouttrust()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_abouttrustt($data);
	echo json_encode($output);
}

public function update_abouttrust()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_abouttrustt($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/abouttrust/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/abouttrust/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_abouttrustt($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [representatives] ********************************************************************
public function representatives()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/about/trustrepresentatives");
}

public function get_representatives() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_representativess();
	echo json_encode($output);
}

public function insert_representatives()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/representatives/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_representativess($data);
	echo json_encode($output);
}

public function delete_representatives()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_representativess($data);
	echo json_encode($output);
}

public function update_representatives()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_representativess($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/representatives/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/representatives/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_representativess($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

// *************************** [rehabilitationimage] ********************************************************************
public function rehabilitationimage()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/rehabilitation_images");
}

public function get_rehabilitationimage() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_rehabilitationimagee();
	echo json_encode($output);
}

public function insert_rehabilitationimage()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/rehabilitationimage/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_rehabilitationimagee($data);
	echo json_encode($output);
}

public function delete_rehabilitationimage()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_rehabilitationimagee($data);
	echo json_encode($output);
}

public function update_rehabilitationimage()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_rehabilitationimagee($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/rehabilitationimage/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/rehabilitationimage/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_rehabilitationimagee($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

// *************************** [orangehvcgallery] ********************************************************************
public function orangehvcgallery()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->orangehvcgallery();	
	$this->load->view("admin/orangehvcgallery",$data);
}

public function get_orangehvcgallery() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_orangehvcgalleryy();
	echo json_encode($output);
}

public function insert_orangehvcgallery()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/orangehvcgallery/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_orangehvcgalleryy($data);
	echo json_encode($output);
}

public function delete_orangehvcgallery()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_orangehvcgalleryy($data);
	echo json_encode($output);
}

public function update_orangehvcgallery()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_orangehvcgalleryy($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/orangehvcgallery/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/orangehvcgallery/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_orangehvcgalleryy($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [rehabilitation] ********************************************************************


public function rehabilitation()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/rehabilitation_description");
}

public function get_rehabilitation() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_rehabilitationn(); 
	echo json_encode($output);
}

public function insert_rehabilitation()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_rehabilitationn($data);
	echo json_encode($output);
}

public function delete_rehabilitation()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_rehabilitationn($data);
	echo json_encode($output);
}

public function update_rehabilitation()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_rehabilitationn($data);
	echo json_encode($output);
}

// *************************** [appeal] ********************************************************************
public function appeal()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/appeal");
}

public function get_appeal() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_appeall();
	echo json_encode($output);
}

public function insert_appeal()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/appeal/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_appeall($data);
	echo json_encode($output);
}

public function delete_appeal()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_appeall($data);
	echo json_encode($output);
}

public function update_appeal()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_appeall($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/appeal/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/appeal/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_appeall($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [donation] ********************************************************************


public function donation()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/donations");
}

public function get_donation() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_donationn(); 
	echo json_encode($output);
}

public function insert_donation()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_donationn($data);
	echo json_encode($output);
}

public function delete_donation()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_donationn($data);
	echo json_encode($output);
}

public function update_donation()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_donationn($data);
	echo json_encode($output);
}

// *************************** [orangehvc] ********************************************************************


public function orangehvc()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/orangehvc");
}

public function get_orangehvc() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_orangehvcc(); 
	echo json_encode($output);
}

public function insert_orangehvc()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_orangehvcc($data);
	echo json_encode($output);
}

public function delete_orangehvc()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_orangehvcc($data);
	echo json_encode($output);
}

public function update_orangehvc()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_orangehvcc($data);
	echo json_encode($output);
}

// *************************** [partners] ********************************************************************
public function partners()	{	
	header('Access-Control-Allow-Origin: *');		
	$this->load->view("admin/partners");
}

public function get_partners() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_partnerss();
	echo json_encode($output);
}

public function insert_partners()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/partners/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_partnerss($data);
	echo json_encode($output);
}

public function delete_partners()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_partnerss($data);
	echo json_encode($output);
}

public function update_partners()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_partnerss($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/partners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/partners/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_partnerss($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [contact] ********************************************************************


public function contact()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/contact");
}

public function get_contact() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_contactt(); 
	echo json_encode($output);
}

public function insert_contact()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_contactt($data);
	echo json_encode($output);
}

public function delete_contact()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_contactt($data);
	echo json_encode($output);
}

public function update_contact()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_contactt($data);
	echo json_encode($output);
}


// *************************** [aboutprofile] ********************************************************************


public function aboutprofile()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->aboutprofile();
    // echo'<pre>';print_r($data);exit;
	$this->load->view("admin/about/aboutprofile",$data);
}

public function get_aboutprofile() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_aboutprofilee(); 
	echo json_encode($output);
}

public function insert_aboutprofile()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_aboutprofilee($data);
	echo json_encode($output);
}

public function delete_aboutprofile()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_aboutprofilee($data);
	echo json_encode($output);
}

public function update_aboutprofile()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_aboutprofilee($data);
	echo json_encode($output);
}


// *************************** [newstitle] ********************************************************************


public function newstitle()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/newstitle");
}

public function get_newstitle() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_newstitlee(); 
	echo json_encode($output);
}

public function insert_newstitle()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_newstitlee($data);
	echo json_encode($output);
}

public function delete_newstitle()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_newstitlee($data);
	echo json_encode($output);
}

public function update_newstitle()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_newstitlee($data);
	echo json_encode($output);
}
// *************************** [newsdescription] ********************************************************************


public function newsdescription()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->newstitle();
	// echo'<pre>';
	// print_r($data);
	// exit;		
	$this->load->view("admin/newsdescription",$data);
}

public function get_newsdescription() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_newsdescriptionn(); 
	// echo'<pre>';
	// print_r($output);
	// exit;
	echo json_encode($output);
}

public function insert_newsdescription()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
//    echo'<pre>';
// 	print_r($data);
// 	exit;	
	$output = $this->KaanalModel->insert_newsdescriptionn($data);
	echo json_encode($output);
}

public function delete_newsdescription()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_newsdescriptionn($data);
	echo json_encode($output);
}

public function update_newsdescription()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_newsdescriptionn($data);
	echo json_encode($output);
}
// *************************** [newsimage] ********************************************************************
public function newsimage()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->newstitle();	
	$this->load->view("admin/newsimage",$data);
}

public function get_newsimage() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_newsimages();
	echo json_encode($output);
}

public function insert_newsimage()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/newsimage/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_newsimages($data);
	echo json_encode($output);
}

public function delete_newsimage()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_newsimages($data);
	echo json_encode($output);
}

public function update_newsimage()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_newsimages($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/newsimage/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/newsimage/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_newsimages($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}


// *************************** [review] ********************************************************************
public function review()	{	
	header('Access-Control-Allow-Origin: *');	
	$this->load->view("admin/review");
}

public function get_review() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_reviews();
	echo json_encode($output);
}

public function insert_review()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	if($_FILES['image_url']['name'] == "")
	{
		$data["image_url"] = '';
	}
	else if($_FILES['image_url']['name'] != '')
	{
		$name = $_FILES['image_url']['name'];
		$name = str_replace(" ","_",$name);
		$file_path_doc = "uploads/review/";
		$randomNumber = uniqid();
		$file_path = $file_path_doc . $randomNumber . $name;
		$moved = move_uploaded_file($_FILES['image_url']['tmp_name'], $file_path);
		$data["image_url"] = $file_path;
	}   
	$output = $this->KaanalModel->insert_reviews($data);
	echo json_encode($output);
}

public function delete_review()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_reviews($data);
	echo json_encode($output);
}

public function update_review()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['image_url']['name']))
		{      
			$success=$this->KaanalModel->update_reviews($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/review/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('image_url'))
			{
				unset($data["image_url"]);
				$data["image_url"] = 'uploads/review/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_reviews($data);
				echo json_encode($success);
			}
			
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

// *************************** [reviewvideo] ********************************************************************
public function reviewvideo()	{	
	header('Access-Control-Allow-Origin: *');	
	$this->load->view("admin/reviewvideo");
}

public function get_reviewvideo() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_reviewvideos();
	echo json_encode($output);
}

// public function insert_reviewvideo()  {   
// 	header('Access-Control-Allow-Origin: *');
// 	$data = $this->input->post();   

// 	if($_FILES['video_url']['name'] == "")
// 	{
// 		$data["video_url"] = '';
// 	}

// 	else if($_FILES['video_url']['name'] != '')
// 	{
// 		$name = $_FILES['video_url']['name'];
// 		$name = str_replace(" ","_",$name);
// 		$file_path_doc = "uploads/reviewvideo/";
// 		$randomNumber = uniqid();
// 		$file_path = $file_path_doc . $randomNumber . $name;
// 		$moved = move_uploaded_file($_FILES['video_url']['tmp_name'], $file_path);
// 		$data["video_url"] = $file_path;
// 	}   
// 	print_r($data["video_url"]);
// 	exit;
// 	$output = $this->KaanalModel->insert_reviewvideos($data);
// 	echo json_encode($output);
// }

    public function insert_reviewvideo()  {   
        header('Access-Control-Allow-Origin: *');
        $data = $this->input->post();   
        if($_FILES['video_url']['name'] == "")
        {
            $data["video_url"] = '';
        }
        else if($_FILES['video_url']['name'] != '')
        {
            $name = $_FILES['video_url']['name'];
            $name = str_replace(" ","_",$name);
            $file_path_doc = "uploads/reviewvideo/";
            $randomNumber = uniqid();
            $file_path = $file_path_doc . $randomNumber . $name;
            $moved = move_uploaded_file($_FILES['video_url']['tmp_name'], $file_path);
            $data["video_url"] = $file_path;
        }   
        // echo'<pre>';
        // print_r($data["video_url"]);
        // exit;
        $output = $this->KaanalModel->insert_reviewvideos($data);
        echo json_encode($output);
    }




public function delete_reviewvideo()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_reviewvideos($data);
	echo json_encode($output);
}

public function update_reviewvideo()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
	{
		header('Access-Control-Allow-Origin: *');
		$data = $this->input->post();
		if(empty($_FILES['video_url']['name']))
		{      
			$success=$this->KaanalModel->update_reviewvideos($data);
			echo json_encode($success);
		}
		else
		{
			$config['upload_path'] = './uploads/reviewvideo/';
			// $config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			// $config['randomNumber']= uniqid();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if($this->upload->do_upload('video_url'))
			{
				unset($data["video_url"]);
				$data["video_url"] = 'uploads/reviewvideo/'.$this->upload->data('file_name');			
				$success=$this->KaanalModel->update_reviewvideos($data);
				echo json_encode($success);
			}
			else{
				print_r($this->upload->display_errors());
				echo 'not upload';
			}
		}
	}
	else
	{
		$result["status"]="fail";
		echo json_encode($result);
	}		
}

public function getreview()	{	
	header('Access-Control-Allow-Origin: *');	
	$this->load->view("admin/getreview");
}

public function get_getreview() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_getrevieww();
	echo json_encode($output);
}
public function update_getreview()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_getrevieww($data);
	echo json_encode($output);
}

public function delete_getreview()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_getrevieww($data);
	echo json_encode($output);
}
// *************************** [wttcenters] ********************************************************************


public function wttcenters()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/wttcenters");
}

public function get_wttcenters() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_wttcenterss(); 
	echo json_encode($output);
}

public function insert_wttcenters()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_wttcenterss($data);
	echo json_encode($output);
}

public function delete_wttcenters()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_wttcenterss($data);
	echo json_encode($output);
}

public function update_wttcenters()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_wttcenterss($data);
	echo json_encode($output);
}
// *************************** [wttyr] ********************************************************************


public function wttyr()	{	
	header('Access-Control-Allow-Origin: *');			
	$this->load->view("admin/wttyr");
}

public function get_wttyr() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_wttyrs(); 
	echo json_encode($output);
}

public function insert_wttyr()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
   
	$output = $this->KaanalModel->insert_wttyrs($data);
	echo json_encode($output);
}

public function delete_wttyr()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_wttyrs($data);
	echo json_encode($output);
}

public function update_wttyr()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_wttyrs($data);
	echo json_encode($output);
}


// *************************** [wttpatient] ********************************************************************


public function wttpatient()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->wttyr();
	// echo'<pre>';
	// print_r($data);
	// exit;		
	$this->load->view("admin/wttpatient",$data);
}
public function get_wttpatient() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_wttpatientt(); 
	// echo'<pre>';
	// print_r($output);
	// exit;
	echo json_encode($output);
}

public function insert_wttpatient()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
//    echo'<pre>';
// 	print_r($data);
// 	exit;	
	$output = $this->KaanalModel->insert_wttpatientt($data);
	echo json_encode($output);
}

public function delete_wttpatient()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_wttpatientt($data);
	echo json_encode($output);
}

public function update_wttpatient()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_wttpatientt($data);
	echo json_encode($output);
}


// *************************** [wttsurgery] ********************************************************************

public function wttsurgery()	{	
	header('Access-Control-Allow-Origin: *');	
	$data = $this->KaanalModel->wttyr();
			
	$this->load->view("admin/wttsurgery",$data);
}


public function get_wttsurgery() {   
	header('Access-Control-Allow-Origin: *');       
	$output = $this->KaanalModel->get_wttsurgeryt(); 
	// echo'<pre>';
	// print_r($output);
	// exit;
	echo json_encode($output);
}

public function insert_wttsurgery()  {   
	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
//    echo'<pre>';
// 	print_r($data);
// 	exit;	
	$output = $this->KaanalModel->insert_wttsurgeryt($data);
	echo json_encode($output);
}

public function delete_wttsurgery()  {   

	header('Access-Control-Allow-Origin: *');
	$data = $this->input->post();   
	// print_r($data);
	// exit;
	$output = $this->KaanalModel->delete_wttsurgeryt($data);
	echo json_encode($output);
}

public function update_wttsurgery()
{
	header('Access-Control-Allow-Origin: *');	
	$data = $this->input->post();
	$output = $this->KaanalModel->update_wttsurgeryt($data);
	echo json_encode($output);
}

}

?>



