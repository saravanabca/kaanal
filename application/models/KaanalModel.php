<?php
    class KaanalModel extends CI_Model
    { 
        function __construct(){
            parent::__construct();
            $this->load->database('default');
        }

        public function CheckLogin($data)  
	{  
		$this->db->where('username', $data["username"]);
		$this->db->where('password', $data["password"]);
		$this->db->where('type', $data["type"]);
		$query = $this->db->get('admin');
		if($query->num_rows()>0)
		{
			$details = $query->result_array();
			$result['details'] = $details;
			$result['status'] = true;
		}
		else
		{
			$result['details'] = [];
			$result['status'] = false;
		}
		return $result;
	}
	
	public function successMessage($type, $data, $message)
    {
		
        if($type == 'get') {
            $result["status"] = "success";
            $result["statusCode"] = "200";
            $result["details"] = $data;
            $result["message"] = $message;
        }
        else {
            $result["status"] = "success";
            $result["statusCode"] = "200";
            $result["message"] = $message;
        }
		return $result;     
    }
    public function failureMessage($type, $data, $message)
    {
        if($type == 'get') {
            $result["status"] = "fail";
            $result["statusCode"] = "400";
            $result["details"] = $data;
            $result["message"] = $message;
        }
        else {
            $result["status"] = "fail";
            $result["statusCode"] = "400";
            $result["message"] = $message;
        }
        return $result;     
    }
 // *************************** [Banner] ********************************************************************
    public function get_bannerr()  
	{ 
		$this->db->select('*');
		$this->db->from('home_banner');	
		$this->db->where('flag','1');		
		$this->db->order_by('banner_id desc');		
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_bannerr($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$this->db->insert('home_banner',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('save', '', 'inserted successfully');
		}
		else
		{
			$result = $this->failureMessage('save', '', 'Error in core insert');
		}
		return $result;
	}	

	public function update_bannerr($data)  
	{  
		$banner_id = $data["banner_id"];
		unset($data['banner_id']);
		$this->db->where('banner_id',$banner_id);
		$this->db->update('home_banner',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('update', '', 'updated successfully');
		}
		else
		{
			$result = $this->failureMessage('update', '', 'Something went wrong..!');
		}
		return $result;
	}	

	public function delete_bannerr($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$banner_id=$data["banner_id"];
	    $this->db->where('banner_id',$banner_id)->update('home_banner',array('flag'=>0));
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('delete', '', 'deleted successfully');
		}
		else
		{
			$result = $this->successMessage('delete', '', 'Something went wrong..!');
		}
		return $result;

	}


	 // *************************** [hospital detaill] ********************************************************************

	public function  get_hospital_detaill()  
	{ 
		$this->db->select('*');
		$this->db->from('hospital_detail');	
		$this->db->where('flag','1');		
		$this->db->order_by('hospital_detail_id desc');		
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_hospital_detaill($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$this->db->insert('hospital_detail',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('save', '', 'inserted successfully');
		}
		else
		{
			$result = $this->failureMessage('save', '', 'Error in core insert');
		}
		return $result;
	}	

	public function update_hospital_detaill($data)  
	{  
		$hospital_detail_id = $data["hospital_detail_id"];
		unset($data['hospital_detail_id']);
		$this->db->where('hospital_detail_id',$hospital_detail_id);
		$this->db->update('hospital_detail',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('update', '', 'updateddd successfully');
		}
		else
		{
			$result = $this->failureMessage('update', '', 'Something went wrong..!');
		}
		return $result;
	}	

	public function delete_hospital_detaill($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$hospital_detail_id=$data["hospital_detail_id"];
	    $this->db->where('hospital_detail_id',$hospital_detail_id)->update('hospital_detail',array('flag'=>0));
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('delete', '', 'deleted successfully');
		}
		else
		{
			$result = $this->successMessage('delete', '', 'Something went wrong..!');
		}
		return $result;

	}


 // *************************** [About detaill] ********************************************************************
	
 	public function get_aboutt()  
	{ 
		$this->db->select('*');
		$this->db->from('about');	
		$this->db->where('flag','1');		
		$this->db->order_by('about_id desc');		
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_aboutt($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$this->db->insert('about',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('save', '', 'inserted successfully');
		}
		else
		{
			$result = $this->failureMessage('save', '', 'Error in core insert');
		}
		return $result;
	}	

	public function update_aboutt($data)  
	{  
		// print_r($data); exit;
		$about_id = $data["about_id"];
		unset($data['about_id']);
		$this->db->where('about_id',$about_id);
		$this->db->update('about',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('update', '', 'updated successfully');
		}
		else
		{
			$result = $this->failureMessage('update', '', 'Something went wrong..!');
		}
		return $result;
	}	

	public function delete_aboutt($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$about_id=$data["about_id"];
	    $this->db->where('about_id',$about_id)->update('about',array('flag'=>0));
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('delete', '', 'deleted successfully');
		}
		else
		{
			$result = $this->successMessage('delete', '', 'Something went wrong..!');
		}
		return $result;

	}
	 // *************************** [hospital detaill] ********************************************************************

	 public function  get_videoo()  
	 { 
		 $this->db->select('*');
		 $this->db->from('video');	
		 $this->db->where('flag','1');		
		 $this->db->order_by('video_id desc');		
		 $query = $this->db->get();
		 return $query->result();
	 }
 
	 public function insert_videoo($data)  
	 {  
		 // echo'<pre>';print_r($data);exit;
		 $this->db->insert('video',$data);
		 if ($this->db->affected_rows() == '1')
		 {
			 $result = $this->successMessage('save', '', 'inserted successfully');
		 }
		 else
		 {
			 $result = $this->failureMessage('save', '', 'Error in core insert');
		 }
		 return $result;
	 }	
 
	 public function update_videoo($data)  
	 {  
		 $video_id = $data["video_id"];
		 unset($data['video_id']);
		 $this->db->where('video_id',$video_id);
		 $this->db->update('video',$data);
		 if ($this->db->affected_rows() == '1')
		 {
			 $result = $this->successMessage('update', '', 'updateddd successfully');
		 }
		 else
		 {
			 $result = $this->failureMessage('update', '', 'Something went wrong..!');
		 }
		 return $result;
	 }	
 
	 public function delete_videoo($data)  
	 {  
		 // echo'<pre>';print_r($data);exit;
		 $video_id=$data["video_id"];
		 $this->db->where('video_id',$video_id)->update('video',array('flag'=>0));
		 if ($this->db->affected_rows() == '1')
		 {
			 $result = $this->successMessage('delete', '', 'deleted successfully');
		 }
		 else
		 {
			 $result = $this->successMessage('delete', '', 'Something went wrong..!');
		 }
		 return $result;
 
	 }
	
	 // *************************** [Profile] ********************************************************************
	
	public function get_profilee()  
	{ 
		$this->db->select('*');
		$this->db->from('profile');	
		$this->db->where('flag','1');		
		$this->db->order_by('profile_id desc');		
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_profilee($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$this->db->insert('profile',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('save', '', 'inserted successfully');
		}
		else
		{
			$result = $this->failureMessage('save', '', 'Error in core insert');
		}
		return $result;
	}	

	public function update_profilee($data)  
	{  
		// print_r($data); exit;
		$profile_id = $data["profile_id"];
		unset($data['profile_id']);
		$this->db->where('profile_id',$profile_id);
		$this->db->update('profile',$data);
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('update', '', 'updated successfully');
		}
		else
		{
			$result = $this->failureMessage('update', '', 'Something went wrong..!');
		}
		return $result;
	}	

	public function delete_profilee($data)  
	{  
		// echo'<pre>';print_r($data);exit;
		$profile_id=$data["profile_id"];
	    $this->db->where('profile_id',$profile_id)->update('profile',array('flag'=>0));
		if ($this->db->affected_rows() == '1')
		{
			$result = $this->successMessage('delete', '', 'deleted successfully');
		}
		else
		{
			$result = $this->successMessage('delete', '', 'Something went wrong..!');
		}
		return $result;

	}
	
	
 // *************************** [chart] ********************************************************************
 public function get_chartt()  
 { 
	 $this->db->select('*');
	 $this->db->from('chart');	
	 $this->db->where('flag','1');		
	 $this->db->order_by('chart_id desc');		
	 $query = $this->db->get();
	 return $query->result();
 }

 public function insert_chartt($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $this->db->insert('chart',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('save', '', 'inserted successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('save', '', 'Error in core insert');
	 }
	 return $result;
 }	

 public function update_chartt($data)  
 {  
	 $chart_id = $data["chart_id"];
	 unset($data['chart_id']);
	 $this->db->where('chart_id',$chart_id);
	 $this->db->update('chart',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('update', '', 'updated successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('update', '', 'Something went wrong..!');
	 }
	 return $result;
 }	

 public function delete_chartt($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $chart_id=$data["chart_id"];
	 $this->db->where('chart_id',$chart_id)->update('chart',array('flag'=>0));
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('delete', '', 'deleted successfully');
	 }
	 else
	 {
		 $result = $this->successMessage('delete', '', 'Something went wrong..!');
	 }
	 return $result;

 }

// *************************** [service] ********************************************************************
public function get_servicee()  
{ 
	$this->db->select('*');
	$this->db->from('service');	
	$this->db->where('flag','1');		
	$this->db->order_by('service_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_servicee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('service',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_servicee($data)  
{  
	$service_id = $data["service_id"];
	unset($data['service_id']);
	$this->db->where('service_id',$service_id);
	$this->db->update('service',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_servicee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$service_id=$data["service_id"];
	$this->db->where('service_id',$service_id)->update('service',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
 
// *************************** [event] ********************************************************************
public function get_eventt()  
{ 
	$this->db->select('*');
	$this->db->from('event');	
	$this->db->where('flag','1');		
	$this->db->order_by('event_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_eventt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('event',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_eventt($data)  
{  
	$event_id = $data["event_id"];
	unset($data['event_id']);
	$this->db->where('event_id',$event_id);
	$this->db->update('event',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_eventt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$event_id=$data["event_id"];
	$this->db->where('event_id',$event_id)->update('event',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [testimonial] ********************************************************************
public function get_testimoniall()  
{ 
	$this->db->select('*');
	$this->db->from('testimonial');	
	$this->db->where('flag','1');		
	$this->db->order_by('testimonial_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_testimoniall($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('testimonial',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_testimoniall($data)  
{  
	$testimonial_id = $data["testimonial_id"];
	unset($data['testimonial_id']);
	$this->db->where('testimonial_id',$testimonial_id);
	$this->db->update('testimonial',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_testimoniall($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$testimonial_id=$data["testimonial_id"];
	$this->db->where('testimonial_id',$testimonial_id)->update('testimonial',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [abouttrust] ********************************************************************
public function get_abouttrustt()  
{ 
	$this->db->select('*');
	$this->db->from('abouttrust');	
	$this->db->where('flag','1');		
	$this->db->order_by('abouttrust_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_abouttrustt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('abouttrust',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_abouttrustt($data)  
{  
	$abouttrust_id = $data["abouttrust_id"];
	unset($data['abouttrust_id']);
	$this->db->where('abouttrust_id',$abouttrust_id);
	$this->db->update('abouttrust',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_abouttrustt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$abouttrust_id=$data["abouttrust_id"];
	$this->db->where('abouttrust_id',$abouttrust_id)->update('abouttrust',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [representatives] ********************************************************************
public function get_representativess()  
{ 
	$this->db->select('*');
	$this->db->from('representatives');	
	$this->db->where('flag','1');		
	$this->db->order_by('representatives_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_representativess($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('representatives',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_representativess($data)  
{  
	$representatives_id = $data["representatives_id"];
	unset($data['representatives_id']);
	$this->db->where('representatives_id',$representatives_id);
	$this->db->update('representatives',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_representativess($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$representatives_id=$data["representatives_id"];
	$this->db->where('representatives_id',$representatives_id)->update('representatives',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [rehabilitationimage] ********************************************************************
public function get_rehabilitationimagee()  
{ 
	$this->db->select('*');
	$this->db->from('rehabilitationimage');	
	$this->db->where('flag','1');		
	$this->db->order_by('rehabilitationimage_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_rehabilitationimagee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('rehabilitationimage',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_rehabilitationimagee($data)  
{  
	$rehabilitationimage_id = $data["rehabilitationimage_id"];
	unset($data['rehabilitationimage_id']);
	$this->db->where('rehabilitationimage_id',$rehabilitationimage_id);
	$this->db->update('rehabilitationimage',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_rehabilitationimagee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$rehabilitationimage_id=$data["rehabilitationimage_id"];
	$this->db->where('rehabilitationimage_id',$rehabilitationimage_id)->update('rehabilitationimage',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [orangehvcgallery] ********************************************************************

public function orangehvcgallery()
 {
	 $data['orangehvcgallery'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
	 return $data;  
 }

public function get_orangehvcgalleryy()  
{ 


	$this->db->select('a.*,b.orangehvc_title');
	$this->db->from('orangehvcgallery a');	
	$this->db->join('orangehvc b','a.orangehvc_id = b.orangehvc_id');
	$this->db->where('a.flag','1');	
	$this->db->where('b.flag','1');	
	$query = $this->db->get();
	return $query->result();


	// $this->db->select('*');
	// $this->db->from('orangehvcgallery');	
	// $this->db->where('flag','1');		
	// $this->db->order_by('orangehvcgallery_id desc');		
	// $query = $this->db->get();
	// return $query->result();
}

public function insert_orangehvcgalleryy($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('orangehvcgallery',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_orangehvcgalleryy($data)  
{  
	$orangehvcgallery_id = $data["orangehvcgallery_id"];
	unset($data['orangehvcgallery_id']);
	$this->db->where('orangehvcgallery_id',$orangehvcgallery_id);
	$this->db->update('orangehvcgallery',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_orangehvcgalleryy($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$orangehvcgallery_id=$data["orangehvcgallery_id"];
	$this->db->where('orangehvcgallery_id',$orangehvcgallery_id)->update('orangehvcgallery',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


 // *************************** [rehabilitation] ********************************************************************
	
 public function get_rehabilitationn()  
 { 
	 $this->db->select('*');
	 $this->db->from('rehabilitation');	
	 $this->db->where('flag','1');		
	 $this->db->order_by('rehabilitation_id desc');		
	 $query = $this->db->get();
	 return $query->result();
 }

 public function insert_rehabilitationn($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $this->db->insert('rehabilitation',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('save', '', 'inserted successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('save', '', 'Error in core insert');
	 }
	 return $result;
 }	

 public function update_rehabilitationn($data)  
 {  
	 // print_r($data); exit;
	 $rehabilitation_id = $data["rehabilitation_id"];
	 unset($data['rehabilitation_id']);
	 $this->db->where('rehabilitation_id',$rehabilitation_id);
	 $this->db->update('rehabilitation',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('update', '', 'updated successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('update', '', 'Something went wrong..!');
	 }
	 return $result;
 }	

 public function delete_rehabilitationn($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $rehabilitation_id=$data["rehabilitation_id"];
	 $this->db->where('rehabilitation_id',$rehabilitation_id)->update('rehabilitation',array('flag'=>0));
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('delete', '', 'deleted successfully');
	 }
	 else
	 {
		 $result = $this->successMessage('delete', '', 'Something went wrong..!');
	 }
	 return $result;

 }

 // *************************** [appeal] ********************************************************************
public function get_appeall()  
{ 
	$this->db->select('*');
	$this->db->from('appeal');	
	$this->db->where('flag','1');		
	$this->db->order_by('appeal_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_appeall($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('appeal',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_appeall($data)  
{  
	$appeal_id = $data["appeal_id"];
	unset($data['appeal_id']);
	$this->db->where('appeal_id',$appeal_id);
	$this->db->update('appeal',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_appeall($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$appeal_id=$data["appeal_id"];
	$this->db->where('appeal_id',$appeal_id)->update('appeal',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [orangehvc] ********************************************************************
public function get_orangehvcc()  
{ 
	$this->db->select('*');
	$this->db->from('orangehvc');	
	$this->db->where('flag','1');		
	$this->db->order_by('orangehvc_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_orangehvcc($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('orangehvc',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_orangehvcc($data)  
{  
	$orangehvc_id = $data["orangehvc_id"];
	unset($data['orangehvc_id']);
	$this->db->where('orangehvc_id',$orangehvc_id);
	$this->db->update('orangehvc',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_orangehvcc($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$orangehvc_id=$data["orangehvc_id"];
	$this->db->where('orangehvc_id',$orangehvc_id)->update('orangehvc',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
 

// *************************** [donation] ********************************************************************
public function get_donationn()  
{ 
	$this->db->select('*');
	$this->db->from('donation');	
	$this->db->where('flag','1');		
	$this->db->order_by('donation_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_donationn($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('donation',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_donationn($data)  
{  
	$donation_id = $data["donation_id"];
	unset($data['donation_id']);
	$this->db->where('donation_id',$donation_id);
	$this->db->update('donation',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_donationn($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$donation_id=$data["donation_id"];
	$this->db->where('donation_id',$donation_id)->update('donation',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [partners] ********************************************************************
public function get_partnerss()  
{ 
	$this->db->select('*');
	$this->db->from('partners');	
	$this->db->where('flag','1');		
	$this->db->order_by('partners_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_partnerss($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('partners',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_partnerss($data)  
{  
	$partners_id = $data["partners_id"];
	unset($data['partners_id']);
	$this->db->where('partners_id',$partners_id);
	$this->db->update('partners',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_partnerss($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$partners_id=$data["partners_id"];
	$this->db->where('partners_id',$partners_id)->update('partners',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [contact] ********************************************************************
public function get_contactt()  
{ 
	$this->db->select('*');
	$this->db->from('contact');	
	$this->db->where('flag','1');		
	$this->db->order_by('contact_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_contactt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('contact',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_contactt($data)  
{  
	$contact_id = $data["contact_id"];
	unset($data['contact_id']);
	$this->db->where('contact_id',$contact_id);
	$this->db->update('contact',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_contactt($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$contact_id=$data["contact_id"];
	$this->db->where('contact_id',$contact_id)->update('contact',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [inaugration] ********************************************************************
public function get_inaugrationn()  
{ 
	$this->db->select('*');
	$this->db->from('inaugration');	
	$this->db->where('flag','1');		
	$this->db->order_by('inaugration_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_inaugrationn($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('inaugration',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_inaugrationn($data)  
{  
	$inaugration_id = $data["inaugration_id"];
	unset($data['inaugration_id']);
	$this->db->where('inaugration_id',$inaugration_id);
	$this->db->update('inaugration',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_inaugrationn($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$inaugration_id=$data["inaugration_id"];
	$this->db->where('inaugration_id',$inaugration_id)->update('inaugration',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [newstitle] ********************************************************************
public function get_newstitlee()  
{ 
	$this->db->select('*');
	$this->db->from('newstitle');	
	$this->db->where('flag','1');		
	$this->db->order_by('newstitle_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_newstitlee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('newstitle',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_newstitlee($data)  
{  
	$newstitle_id = $data["newstitle_id"];
	unset($data['newstitle_id']);
	$this->db->where('newstitle_id',$newstitle_id);
	$this->db->update('newstitle',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_newstitlee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$newstitle_id=$data["newstitle_id"];
	$this->db->where('newstitle_id',$newstitle_id)->update('newstitle',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
 // *************************** [newsdescription] ********************************************************************

 public function newstitle()
 {
	 $data['newstitle'] = $this->db->query("select * from newstitle where flag=1")->result_array();
	 return $data;  
 }

 public function get_newsdescriptionn()  
 { 
        $this->db->select('a.*,b.newstitle');
		$this->db->from('newsdescription a');	
		$this->db->join('newstitle b','a.newstitle_id = b.newstitle_id');
		$this->db->where('a.flag','1');	
		$this->db->where('b.flag','1');	
		$query = $this->db->get();
		return $query->result();

	//  $this->db->select('*');
	//  $this->db->from('newsdescription');	
	//  $this->db->where('flag','1');		
	//  $this->db->order_by('newsdescription_id desc');		
	//  $query = $this->db->get();
	//  return $query->result();
 }

 public function insert_newsdescriptionn($data)  
 {  
	// print_r('hai');
	//  echo'<pre>';print_r($data);exit;
	 $this->db->insert('newsdescription',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('save', '', 'inserted successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('save', '', 'Error in core insert');
	 }
	 return $result;
 }	

 public function update_newsdescriptionn($data)  
 {  
	 $newsdescription_id = $data["newsdescription_id"];
	 unset($data['newsdescription_id']);
	 $this->db->where('newsdescription_id',$newsdescription_id);
	 $this->db->update('newsdescription',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('update', '', 'updated successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('update', '', 'Something went wrong..!');
	 }
	 return $result;
 }	

 public function delete_newsdescriptionn($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $newsdescription_id=$data["newsdescription_id"];
	 $this->db->where('newsdescription_id',$newsdescription_id)->update('newsdescription',array('flag'=>0));
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('delete', '', 'deleted successfully');
	 }
	 else
	 {
		 $result = $this->successMessage('delete', '', 'Something went wrong..!');
	 }
	 return $result;

 }

 // *************************** [newsimage] ********************************************************************
public function get_newsimages()  
{ 
	$this->db->select('a.*,b.newstitle');
	$this->db->from('newsimage a');	
	$this->db->join('newstitle b','a.newstitle_id = b.newstitle_id');
	$this->db->where('a.flag','1');	
	$this->db->where('b.flag','1');	
	$query = $this->db->get();
	return $query->result();

}

public function insert_newsimages($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('newsimage',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_newsimages($data)  
{  
	$newsimage_id = $data["newsimage_id"];
	unset($data['newsimage_id']);
	$this->db->where('newsimage_id',$newsimage_id);
	$this->db->update('newsimage',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_newsimages($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$newsimage_id=$data["newsimage_id"];
	$this->db->where('newsimage_id',$newsimage_id)->update('newsimage',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


// *************************** [review] ********************************************************************
public function get_reviews()  
{ 
	$this->db->select('*');
	$this->db->from('review');	
	$this->db->where('flag','1');	
	$query = $this->db->get();
	return $query->result();

}

public function insert_reviews($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('review',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_reviews($data)  
{  
	$review_id = $data["review_id"];
	unset($data['review_id']);
	$this->db->where('review_id',$review_id);
	$this->db->update('review',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_reviews($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$review_id=$data["review_id"];
	$this->db->where('review_id',$review_id)->update('review',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [review video] ********************************************************************
public function get_reviewvideos()  
{ 
	$this->db->select('*');
	$this->db->from('reviewvideo');	
	$this->db->where('flag','1');	
	$query = $this->db->get();
	return $query->result();

}

public function insert_reviewvideos($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('reviewvideo',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_reviewvideos($data)  
{  
	$reviewvideo_id = $data["reviewvideo_id"];
	unset($data['reviewvideo_id']);
	$this->db->where('reviewvideo_id',$reviewvideo_id);
	$this->db->update('reviewvideo',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_reviewvideos($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$reviewvideo_id=$data["reviewvideo_id"];
	$this->db->where('reviewvideo_id',$reviewvideo_id)->update('reviewvideo',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


// *************************** [addreview] ********************************************************************
public function get_getrevieww()  
{ 
	$this->db->select('*');
	$this->db->from('addreview');	
	$this->db->where('flag','1');	
	$query = $this->db->get();
	return $query->result();

}

public function update_getrevieww($data)  
{  
	$addreview_id = $data["addreview_id"];
	unset($data['addreview_id']);
	$this->db->where('addreview_id',$addreview_id);
	$this->db->update('addreview',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_getrevieww($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$addreview_id=$data["addreview_id"];
	$this->db->where('addreview_id',$addreview_id)->update('addreview',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}
// *************************** [aboutprofile] ********************************************************************

public function aboutprofile()
{
	$data['representatives'] = $this->db->query("select * from representatives where flag=1")->result_array();
	return $data;  
}

public function get_aboutprofilee()  
{ 
	   $this->db->select('a.*,b.image_url');
	   $this->db->from('aboutprofile a');	
	   $this->db->join('representatives b','a.representatives_id = b.representatives_id');
	   $this->db->where('a.flag','1');	
	   $this->db->where('b.flag','1');	
	   $query = $this->db->get();
	   return $query->result();

   //  $this->db->select('*');
   //  $this->db->from('aboutprofile');	
   //  $this->db->where('flag','1');		
   //  $this->db->order_by('aboutprofile_id desc');		
   //  $query = $this->db->get();
   //  return $query->result();
}

public function insert_aboutprofilee($data)  
{  
   // print_r('hai');
   //  echo'<pre>';print_r($data);exit;
	$this->db->insert('aboutprofile',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_aboutprofilee($data)  
{  
	$aboutprofile_id = $data["aboutprofile_id"];
	unset($data['aboutprofile_id']);
	$this->db->where('aboutprofile_id',$aboutprofile_id);
	$this->db->update('aboutprofile',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_aboutprofilee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$aboutprofile_id=$data["aboutprofile_id"];
	$this->db->where('aboutprofile_id',$aboutprofile_id)->update('aboutprofile',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


// *************************** [kaanalservices] ********************************************************************

public function kaanalservicestitle()
{
	$data['kaanalservicestitle'] = $this->db->query("select * from kaanalservicestitle where flag=1")->result_array();
	return $data;  
}

public function get_kaanalservicess()  
{ 
	//    $this->db->select('a.*,b.kaanalservicestitle');
	//    $this->db->from('kaanalservices a');	
	//    $this->db->join('kaanalservicestitle b','a.kaanalservicestitle_id = b.kaanalservicestitle_id');
	//    $this->db->where('a.flag','1');	
	//    $this->db->where('b.flag','1');	
	//    $query = $this->db->get();
	//    return $query->result();

    $this->db->select('*');
    $this->db->from('kaanalservices');	
    $this->db->where('flag','1');		
    $this->db->order_by('kaanalservices_id desc');		
    $query = $this->db->get();
    return $query->result();
}

public function insert_kaanalservicess($data)  
{  
   // print_r('hai');
   //  echo'<pre>';print_r($data);exit;
	$this->db->insert('kaanalservices',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_kaanalservicess($data)  
{  
	$kaanalservices_id = $data["kaanalservices_id"];
	unset($data['kaanalservices_id']);
	$this->db->where('kaanalservices_id',$kaanalservices_id);
	$this->db->update('kaanalservices',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_kaanalservicess($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$kaanalservices_id=$data["kaanalservices_id"];
	$this->db->where('kaanalservices_id',$kaanalservices_id)->update('kaanalservices',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}



// *************************** [kaanalservicestitle] ********************************************************************
public function get_kaanalservicestitlee()  
{ 
	$this->db->select('*');
	$this->db->from('kaanalservicestitle');	
	$this->db->where('flag','1');		
	$this->db->order_by('kaanalservicestitle_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_kaanalservicestitlee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('kaanalservicestitle',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_kaanalservicestitlee($data)  
{  
	$kaanalservicestitle_id = $data["kaanalservicestitle_id"];
	unset($data['kaanalservicestitle_id']);
	$this->db->where('kaanalservicestitle_id',$kaanalservicestitle_id);
	$this->db->update('kaanalservicestitle',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_kaanalservicestitlee($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$kaanalservicestitle_id=$data["kaanalservicestitle_id"];
	$this->db->where('kaanalservicestitle_id',$kaanalservicestitle_id)->update('kaanalservicestitle',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

// *************************** [communtityservices] ********************************************************************
public function get_communtityservicess()  
{ 
	$this->db->select('*');
	$this->db->from('communtityservices');	
	$this->db->where('flag','1');		
	$this->db->order_by('communtityservices_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_communtityservicess($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('communtityservices',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_communtityservicess($data)  
{  
	$communtityservices_id = $data["communtityservices_id"];
	unset($data['communtityservices_id']);
	$this->db->where('communtityservices_id',$communtityservices_id);
	$this->db->update('communtityservices',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_communtityservicess($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$communtityservices_id=$data["communtityservices_id"];
	$this->db->where('communtityservices_id',$communtityservices_id)->update('communtityservices',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}



// *************************** [wttcenters] ********************************************************************
public function get_wttcenterss()  
{ 
	$this->db->select('*');
	$this->db->from('wttcenters');	
	$this->db->where('flag','1');		
	$this->db->order_by('wttcenters_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_wttcenterss($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('wttcenters',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_wttcenterss($data)  
{  
	$wttcenters_id = $data["wttcenters_id"];
	unset($data['wttcenters_id']);
	$this->db->where('wttcenters_id',$wttcenters_id);
	$this->db->update('wttcenters',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_wttcenterss($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$wttcenters_id=$data["wttcenters_id"];
	$this->db->where('wttcenters_id',$wttcenters_id)->update('wttcenters',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


// *************************** [wttyr] ********************************************************************
public function get_wttyrs()  
{ 
	$this->db->select('*');
	$this->db->from('wttyr');	
	$this->db->where('flag','1');		
	$this->db->order_by('wttyr_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_wttyrs($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('wttyr',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_wttyrs($data)  
{  
	$wttyr_id = $data["wttyr_id"];
	unset($data['wttyr_id']);
	$this->db->where('wttyr_id',$wttyr_id);
	$this->db->update('wttyr',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_wttyrs($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$wttyr_id=$data["wttyr_id"];
	$this->db->where('wttyr_id',$wttyr_id)->update('wttyr',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}


// *************************** [wttpatient] ********************************************************************
public function wttyr()
{
	$data['wttyr'] = $this->db->query("select * from wttyr where flag=1")->result_array();
	return $data;  
}

public function get_wttpatientt()  
 { 
        $this->db->select('a.*,b.wttyr');
		$this->db->from('wttpatient a');	
		$this->db->join('wttyr b','a.wttyr_id = b.wttyr_id');
		$this->db->where('a.flag','1');	
		$this->db->where('b.flag','1');	
		$query = $this->db->get();
		return $query->result();

	//  $this->db->select('*');
	//  $this->db->from('wttpatient');	
	//  $this->db->where('flag','1');		
	//  $this->db->order_by('wttpatient_id desc');		
	//  $query = $this->db->get();
	//  return $query->result();
 }

 public function insert_wttpatientt($data)  
 {  
	// print_r('hai');
	//  echo'<pre>';print_r($data);exit;
	 $this->db->insert('wttpatient',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('save', '', 'inserted successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('save', '', 'Error in core insert');
	 }
	 return $result;
 }	

 public function update_wttpatientt($data)  
 {  
	 $wttpatient_id = $data["wttpatient_id"];
	 unset($data['wttpatient_id']);
	 $this->db->where('wttpatient_id',$wttpatient_id);
	 $this->db->update('wttpatient',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('update', '', 'updated successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('update', '', 'Something went wrong..!');
	 }
	 return $result;
 }	

 public function delete_wttpatientt($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $wttpatient_id=$data["wttpatient_id"];
	 $this->db->where('wttpatient_id',$wttpatient_id)->update('wttpatient',array('flag'=>0));
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('delete', '', 'deleted successfully');
	 }
	 else
	 {
		 $result = $this->successMessage('delete', '', 'Something went wrong..!');
	 }
	 return $result;

 }

// *************************** [get_wttsurgery] ********************************************************************

 public function get_wttsurgeryt()  
 { 
        $this->db->select('a.*,b.wttyr');
		$this->db->from('wttsurgery a');	
		$this->db->join('wttyr b','a.wttyr_id = b.wttyr_id');
		$this->db->where('a.flag','1');	
		$this->db->where('b.flag','1');	
		$query = $this->db->get();
		return $query->result();

	//  $this->db->select('*');
	//  $this->db->from('wttsurgery');	
	//  $this->db->where('flag','1');		
	//  $this->db->order_by('wttsurgery_id desc');		
	//  $query = $this->db->get();
	//  return $query->result();
 }

 public function insert_wttsurgeryt($data)  
 {  
	// print_r('hai');
	//  echo'<pre>';print_r($data);exit;
	 $this->db->insert('wttsurgery',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('save', '', 'inserted successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('save', '', 'Error in core insert');
	 }
	 return $result;
 }	

 public function update_wttsurgeryt($data)  
 {  
	 $wttsurgery_id = $data["wttsurgery_id"];
	 unset($data['wttsurgery_id']);
	 $this->db->where('wttsurgery_id',$wttsurgery_id);
	 $this->db->update('wttsurgery',$data);
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('update', '', 'updated successfully');
	 }
	 else
	 {
		 $result = $this->failureMessage('update', '', 'Something went wrong..!');
	 }
	 return $result;
 }	

 public function delete_wttsurgeryt($data)  
 {  
	 // echo'<pre>';print_r($data);exit;
	 $wttsurgery_id=$data["wttsurgery_id"];
	 $this->db->where('wttsurgery_id',$wttsurgery_id)->update('wttsurgery',array('flag'=>0));
	 if ($this->db->affected_rows() == '1')
	 {
		 $result = $this->successMessage('delete', '', 'deleted successfully');
	 }
	 else
	 {
		 $result = $this->successMessage('delete', '', 'Something went wrong..!');
	 }
	 return $result;

 }
 // *************************** [team] ********************************************************************
public function get_teams()  
{ 
	$this->db->select('*');
	$this->db->from('team');	
	$this->db->where('flag','1');		
	$this->db->order_by('team_id desc');		
	$query = $this->db->get();
	return $query->result();
}

public function insert_teams($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('team',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_teams($data)  
{  
	$team_id = $data["team_id"];
	unset($data['team_id']);
	$this->db->where('team_id',$team_id);
	$this->db->update('team',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_teams($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$team_id=$data["team_id"];
	$this->db->where('team_id',$team_id)->update('team',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

 // *************************** [teamdetails] ********************************************************************

public function teamdetails()
{
	$data['team'] = $this->db->query("select * from team where flag=1")->result_array();
	return $data;  
}

public function get_teamdetailse()  
{ 
	   $this->db->select('a.*,b.image_url');
	   $this->db->from('teamdetails a');	
	   $this->db->join('team b','a.team_id = b.team_id');
	   $this->db->where('a.flag','1');	
	   $this->db->where('b.flag','1');	
	   $query = $this->db->get();
	   return $query->result();

   //  $this->db->select('*');
   //  $this->db->from('teamdetails');	
   //  $this->db->where('flag','1');		
   //  $this->db->order_by('teamdetails_id desc');		
   //  $query = $this->db->get();
   //  return $query->result();
}

public function insert_teamdetailse($data)  
{  
   // print_r('hai');
   //  echo'<pre>';print_r($data);exit;
	$this->db->insert('teamdetails',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

public function update_teamdetailse($data)  
{  
	$teamdetails_id = $data["teamdetails_id"];
	unset($data['teamdetails_id']);
	$this->db->where('teamdetails_id',$teamdetails_id);
	$this->db->update('teamdetails',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('update', '', 'updated successfully');
	}
	else
	{
		$result = $this->failureMessage('update', '', 'Something went wrong..!');
	}
	return $result;
}	

public function delete_teamdetailse($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$teamdetails_id=$data["teamdetails_id"];
	$this->db->where('teamdetails_id',$teamdetails_id)->update('teamdetails',array('flag'=>0));
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('delete', '', 'deleted successfully');
	}
	else
	{
		$result = $this->successMessage('delete', '', 'Something went wrong..!');
	}
	return $result;

}

public function insert_revieww($data)  
{  
	// echo'<pre>';print_r($data);exit;
	$this->db->insert('addreview',$data);
	if ($this->db->affected_rows() == '1')
	{
		$result = $this->successMessage('save', '', 'inserted successfully');
	}
	else
	{
		$result = $this->failureMessage('save', '', 'Error in core insert');
	}
	return $result;
}	

// *********************************************** [website] ***************************************************************

	
	
	
	public function webdata()
	{
		// $condition != '' ? 'AND '.$condition : '';
		// $data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		// $data[$tableName] = $this->db->query("select * from $tableName where flag=1 $condition")->result_array();
		// return $data;

		// $orangehvc = isset($condition['orangehvc_id']) ? $condition['orangehvc_id'].' = orangehvc_id' : '';

		// $data['newstitle'] = $this->db->query("select * from newstitle where flag=1")->result_array();
		// $data['newsdescription'] = $this->db->query("select a.*,b.newstitle from newsdescription a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
		// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();

		// $data['rehabilitation'] = $this->db->query("select * from rehabilitation where flag=1")->result_array();
		// $data['orangehvcgallery'] = $this->db->query("select * from orangehvcgallery where flag=1")->result_array();
		
		// $data['homebanner'] = $this->db->query("select * from home_banner where flag=1")->result_array();
		// $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		// $data['about'] = $this->db->query("select * from about where flag=1")->result_array();
		// $data['video'] = $this->db->query("select * from video where flag=1")->result_array();
		// $data['profile'] = $this->db->query("select * from profile where flag=1")->result_array();
		// $data['chart'] = $this->db->query("select * from chart where flag=1")->result_array();
		// $data['service'] = $this->db->query("select * from service where flag=1")->result_array();
		// $data['event'] = $this->db->query("select * from event where flag=1")->result_array();
		// $data['inaugration'] = $this->db->query("select * from inaugration where flag=1")->result_array();
		// $data['testimonial'] = $this->db->query("select * from testimonial where flag=1")->result_array();
		// $data['abouttrust'] = $this->db->query("select * from abouttrust where flag=1")->result_array();
		// $data['representatives'] = $this->db->query("select * from representatives where flag=1")->result_array();
		// $data['appeal'] = $this->db->query("select * from appeal where flag=1")->result_array();
		// $data['donation'] = $this->db->query("select * from donation where flag=1")->result_array();
		// $data['partners'] = $this->db->query("select * from partners where flag=1")->result_array();
		// $data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		// $data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		// echo'<pre>';print_r($data);exit;
		// return $data;  
	}  

	
	public function index(){
		$data['homebanner'] = $this->db->query("select * from home_banner where flag=1")->result_array();
		$data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['about'] = $this->db->query("select * from about where flag=1")->result_array();
		$data['video'] = $this->db->query("select * from video where flag=1")->result_array();
		$data['profile'] = $this->db->query("select * from profile where flag=1")->result_array();
		$data['chart'] = $this->db->query("select * from chart where flag=1")->result_array();
		$data['service'] = $this->db->query("select * from service where flag=1")->result_array();
		$data['event'] = $this->db->query("select * from event where flag=1")->result_array();
		$data['inaugration'] = $this->db->query("select * from inaugration where flag=1")->result_array();
		$data['testimonial'] = $this->db->query("select * from testimonial where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		$data['team'] = $this->db->query("select * from team where flag=1")->result_array();
		return $data;
	}
	public function about(){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['abouttrust'] = $this->db->query("select * from abouttrust where flag=1")->result_array();
		$data['representatives'] = $this->db->query("select * from representatives where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}

	public function review(){
		$data['review'] = $this->db->query("select * from review where flag=1")->result_array();
		$data['addreview'] = $this->db->query("select * from addreview where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
	public function addreview(){
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
   public function contact(){
    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		// $data['abouttrust'] = $this->db->query("select * from abouttrust where flag=1")->result_array();
		// $data['representatives'] = $this->db->query("select * from representatives where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
	public function aboutprofilee($representatives_id){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['aboutprofile'] = $this->db->query("select a.*,b.image_url from aboutprofile a join representatives b where a.flag=1 and b.flag=1 and a.representatives_id = $representatives_id and a.representatives_id = b.representatives_id")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
    public function teamdetailsdata($team_id){
		$data['teamdetails'] = $this->db->query("select a.*,b.image_url from teamdetails a join team b where a.flag=1 and b.flag=1 and a.team_id = $team_id and a.team_id = b.team_id")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
	public function rehabilitation(){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['rehabilitation'] = $this->db->query("select * from rehabilitation where flag=1")->result_array();
		$data['rehabilitationimage'] = $this->db->query("select * from rehabilitationimage where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}


	// public function orangehvc(){
	// 	$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
	// 	return $data;
	// }
	public function orangehvc($orangehvc_id){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		// $data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		$data['orangehvcc'] = $this->db->query("select * from orangehvc where flag=1 and orangehvc_id = $orangehvc_id")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}

	public function orangehvcgallerydata($orangehvc_id){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		// $data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		$data['orangehvcgallery'] = $this->db->query("select a.*,b.orangehvc_title from orangehvcgallery a join orangehvc b where a.flag=1 and b.flag=1 and a.orangehvc_id = $orangehvc_id and a.orangehvc_id = b.orangehvc_id")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		// echo'<pre>';print_r($data);exit;
		return $data;
	}

	public function appeal(){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['appeal'] = $this->db->query("select * from appeal where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}

	public function donation(){
	$data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		$data['donation'] = $this->db->query("select * from donation where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		return $data;
	}
	
	public function partners(){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
	$data['partners'] = $this->db->query("select * from partners where flag=1")->result_array();
	$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
	$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
	return $data;
	}

	public function newsevent(){
	    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
	$data['newstitle'] = $this->db->query("select * from newstitle where flag=1 ORDER BY newstitle_id DESC")->result_array();
	$data['newsdescription'] = $this->db->query("select a.*,b.newstitle from newsdescription a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
	$data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
	$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
	$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
	return $data;
	}

	   public function service(){
	       $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
		// $data['kaanalservicestitle'] = $this->db->query("select * from kaanalservicestitle where flag=1")->result_array();
		$data['kaanalservices'] = $this->db->query("select * from kaanalservices where flag=1")->result_array();
		// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
		$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
		$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
		return $data;
		}

		public function communtityservices(){
		    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
			// $data['kaanalservicestitle'] = $this->db->query("select * from kaanalservicestitle where flag=1")->result_array();
			$data['wttyr'] = $this->db->query("select * from wttyr where flag=1")->result_array();
			$data['communtityservices'] = $this->db->query("select * from communtityservices where flag=1")->result_array();
			// $data['wttcenters'] = $this->db->query("select * from wttcenters where flag=1")->result_array();
			// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
			$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
			$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
			return $data;
			}


			public function wttcenters(){
			    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
				// $data['kaanalservicestitle'] = $this->db->query("select * from kaanalservicestitle where flag=1")->result_array();
				$data['wttyr'] = $this->db->query("select * from wttyr where flag=1")->result_array();
				$data['wttcenters'] = $this->db->query("select * from wttcenters where flag=1")->result_array();
				// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
				$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
				$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
				return $data;
				}

				public function wttpatient($wttyrr_id){
				    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();
					$wttyr = $this->db->query("select wttyr_id, wttyr from wttyr where flag=1")->result_array();
						
					for($i=0;$i<sizeof($wttyr);$i++){
						$wttyr_id = $wttyr[$i]['wttyr_id'];
						$data['wttyr'][$i] = $this->db->query("select sum(totalpatients) as totalyearpatients from wttpatient  where flag = 1 and wttyr_id = $wttyrr_id")->result_array()[0];
						$data['wttyr'][$i]['wttyr'] = $wttyr[$i]['wttyr'];
						$data['wttyr'][$i]['wttyr_id'] = $wttyr[$i]['wttyr_id'];
					}
					// $data['wttcenters'] = $this->db->query("select * from wttcenters where flag=1")->result_array();
					// $data['wttyr'] = $this->db->query("select * from wttyr where flag=1")->result_array();
					$data['wttpatient'] = $this->db->query("select a.*,b.wttyr from wttpatient a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id and a.wttyr_id = $wttyrr_id")->result_array();

					// $data['wttsurgery'] = $this->db->query("select a.*,b.wttyr from wttsurgery a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id and a.wttyr_id = $wttyrr_id")->result_array();


					// $data['wttsurgery'] = $this->db->query("select a.*,b.wttyr from wttsurgery a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id")->result_array();
					// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
					$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
					$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
					return $data;
					}

					public function wttsurgery($wttyrr_id){
					    $data['hospitaldetails'] = $this->db->query("select * from hospital_detail where flag=1")->result_array();

						$wttyr = $this->db->query("select wttyr_id, wttyr from wttyr where flag=1")->result_array();
						
						for($i=0;$i<sizeof($wttyr);$i++){
							$wttyr_id = $wttyr[$i]['wttyr_id'];
							$data['wttyr'][$i] = $this->db->query("select sum(totalsurgery) as totalyearsurgery from wttsurgery  where flag = 1 and wttyr_id = $wttyrr_id")->result_array()[0];
							$data['wttyr'][$i]['wttyr'] = $wttyr[$i]['wttyr'];
							$data['wttyr'][$i]['wttyr_id'] = $wttyr[$i]['wttyr_id'];
						}

						// $data['wttyrsurgeryyy'] = $this->db->query("select a.wttyr_id,b.wttyr from wttsurgery a join wttyr b on a.wttyr_id = b.wttyr_id where a.flag = 1 and b.flag=1")->result_array();

						// $data['wttyr'] = $this->db->query("select DISTINCT a.wttyr, sum(b.totalsurgery) as totalyearsurgery from wttyr as a join wttsurgery as b on a.wttyr_id = b.wttyr_id where a.flag=1")->result_array();

						// $data['wttpatient'] = $this->db->query("select a.*,b.wttyr from wttpatient a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id")->result_array();


						// $data['wttpatient'] = $this->db->query("select a.*,b.wttyr from wttpatient a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id and a.wttyr_id = $wttyrr_id")->result_array();

						$data['wttsurgery'] = $this->db->query("select a.*,b.wttyr from wttsurgery a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id and a.wttyr_id = $wttyrr_id")->result_array();

						// $data['sum'] = $this->db->query("select sum(a.totalsurgery) as totalyearsurgery from wttsurgery a join wttyr b where a.flag=1 and b.flag=1 and a.wttyr_id = b.wttyr_id")->result_array();

						// $data['newsimage'] = $this->db->query("select a.*,b.newstitle from newsimage a join newstitle b where a.newstitle_id = b.newstitle_id and a.flag=1 and b.flag=1")->result_array();
						$data['orangehvc'] = $this->db->query("select * from orangehvc where flag=1")->result_array();
						$data['contact'] = $this->db->query("select * from contact where flag=1")->result_array();
						return $data;
						}
// Delete The Uploade folder

// function ContentDelete()
// {
// 	try
// 	{  //Database Coonection
// 		$database = new Database();
//         $conn = $database->getConnection();
        
//         $id = $_POST["id"];
// 		//echo "hi";
// 		$query ="select folderName FROM course_content WHERE course_content_id= '$id'  ";
// 		$statement = $conn->prepare($query);
//         $statement->execute();
//         $result=$statement->fetch();		
// 		recursiveRemove("Materials/".$result["folderName"]."/");
// 		$query ="DELETE FROM course_content WHERE course_content_id= '$id' ";
// 		$statement = $conn->prepare($query);
//         $statement->execute();
//         $conn = null;   
	
// 	}
// 	catch (PDOException $e) {
// 		echo $e->errorMessage();
// 	}	
// }
	
    }