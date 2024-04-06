<?php
require_once('../config.php');
Class Content extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function update(){
		extract($_POST);
		$content_file="../".$file.".html";
		$update = file_put_contents($content_file, $content);
		if($update){
			return json_encode(array("status"=>"success"));
			$this->settings->set_flashdata("success",ucfirst($file)." content is successuly updated");
			exit;
		}
	}
	public function banner(){
	    
	   
	    
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','old_file'))){
				if(!empty($data)) $data .= ", ";
				$data .= "`$k` = '$v'";
			}
		}
				if(!empty($data)) $data .= " ";
			
		if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image']['name'];
			$move = move_uploaded_file($_FILES['image']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image` = '{$fname}' ";
			}
		}
		if(empty($id)){
		 $sql ="INSERT INTO  banner set $data";
		
		}else{
			$sql ="UPDATE  banner set $data where id = {$id}";
		}
		$save = $this->conn->query($sql);
		$action = empty($id) ? "added":"updated";
		if($save){
			if(isset($move) && $move && !empty($old_file)){
				if(is_file(base_app.$old_file))
					unlink(base_app.$old_file);
			}
			$resp['status']='success';
			$resp['message']= " Banner successfully ".$action;
			$this->settings->set_flashdata('success',$resp['message']);
			
		}else{
			$resp['status']='failed';
			$resp['error']= $this->conn->error;
			$resp['message']= " error:".$sql;
		}
		return json_encode($resp);
		exit;
	}
	
	public function service1(){
	    
	 
		extract($_POST);
	
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','old_file','nearbyplaces'))){
				if(!empty($data)) $data .= ", ";
				$data .= "`$k` = '$v'";
			}
		}
		
		if(!empty($data)) $data .= " ";
				
		if(isset($_FILES['image1']) && !empty($_FILES['image1']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image1']['name'];
			$move = move_uploaded_file($_FILES['image1']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image1` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image2']) && !empty($_FILES['image2']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image2']['name'];
			$move = move_uploaded_file($_FILES['image2']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image2` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image3']) && !empty($_FILES['image3']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image3']['name'];
			$move = move_uploaded_file($_FILES['image3']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image3` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image4']) && !empty($_FILES['image4']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image4']['name'];
			$move = move_uploaded_file($_FILES['image4']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image4` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image5']) && !empty($_FILES['image5']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image5']['name'];
			$move = move_uploaded_file($_FILES['image5']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image5` = '{$fname}' ";
			}
		}
		
		if(empty($id)){
			$sql ="INSERT INTO  stay set $data";
			
		}else{
			$sql ="UPDATE  stay set $data where id = {$id}";
		}
		$save = $this->conn->query($sql);
		
		$action = empty($id) ? "added":"updated";
		if($action=='added'){
		    
		$last_id = $this->conn->insert_id;
		 
		 foreach($nearbyplaces as $val){
		      
		     $sql1 ="INSERT INTO   nearbyplaces set `stayid`=$last_id, `nearbyplaces`='$val'";  
		     $this->conn->query($sql1);
		  }
		  
		  
		 
		}
		
		if($action=='updated'){
		    
	      
	      
	       $sql1 ="DELETE  FROM   `nearbyplaces` WHERE stayid='$id'";  
		   $this->conn->query($sql1);
		   
		  
		 
		 foreach($nearbyplaces as $val){
		      
		     $sql1 ="INSERT INTO   `nearbyplaces` set `stayid`=$id, `nearbyplaces`='$val'";  
		     $this->conn->query($sql1);
		  }
		  
		  
		 
		}
		
			if($save){
			if(isset($move) && $move && !empty($old_file)){
				if(is_file(base_app.$old_file))
					unlink(base_app.$old_file);
			}
			$resp['status']='success';
			$resp['message']= "Stay Details successfully ".$action;
			$this->settings->set_flashdata('success',$resp['message']);
			
		}else{
			$resp['status']='failed';
			$resp['error']= $this->conn->error;
			$resp['message']= " error:".$sql;
		}
		return json_encode($resp);
	
	
		exit;
	}
	
	
	public function service(){
	    
	     
	   
		extract($_POST);
		$a= array_combine($activity,$description);
		$b= array_combine($daterange,$availity);
		$c= array_combine($included,$excluded);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','old_file','activity','description','included','excluded','daterange','availity'))){
				if(!empty($data)) $data .= ", ";
				$data .= "`$k` = '$v'";
			}
		}
				if(!empty($data)) $data .= " ";
				
		if(isset($_FILES['image1']) && !empty($_FILES['image1']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image1']['name'];
			$move = move_uploaded_file($_FILES['image1']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image1` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image2']) && !empty($_FILES['image2']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image2']['name'];
			$move = move_uploaded_file($_FILES['image2']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image2` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image3']) && !empty($_FILES['image3']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image3']['name'];
			$move = move_uploaded_file($_FILES['image3']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image3` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image4']) && !empty($_FILES['image4']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image4']['name'];
			$move = move_uploaded_file($_FILES['image4']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image4` = '{$fname}' ";
			}
		}
		
		if(isset($_FILES['image5']) && !empty($_FILES['image5']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['image5']['name'];
			$move = move_uploaded_file($_FILES['image5']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `image5` = '{$fname}' ";
			}
		}
		
		if(empty($id)){
			$sql ="INSERT INTO  treks set $data";
			
		}else{
			$sql ="UPDATE  treks set $data where id = {$id}";
		}
		$save = $this->conn->query($sql);
		
		$action = empty($id) ? "added":"updated";
		if($action=='added'){
		    
		$last_id = $this->conn->insert_id;
		 
		 foreach($a as $key=>$val){
		      
		     $sql1 ="INSERT INTO  Itinerary set `commonid`=$last_id, `activity`='$key',`description`='$val',`Itineraryfor`='$postcategory'";  
		     $this->conn->query($sql1);
		  }
		  
		  foreach($b as $key=>$val){
		      
		     $sql2 ="INSERT INTO   batches set `commonid`=$last_id, `date_range`='$key',`availity`='$val',`batchesfor`='$postcategory'";  
		     $this->conn->query($sql2);
		  }
		  
		   foreach($c as $key=>$val){
		      
		     $sql3 ="INSERT INTO   `includeandexclude` set `commonid`=$last_id, `included`='$key',`excluded`='$val',`includeandexcludefor`='$postcategory'";  
		     $this->conn->query($sql3);
		  }
		 
		}
		
			if($action=='updated'){
		    
	      
	      
	       $sql1 ="DELETE  FROM  Itinerary WHERE commonid='$id' AND `Itineraryfor`='$postcategory'";  
		   $this->conn->query($sql1);
		   
		   $sql1 ="DELETE  FROM  batches WHERE commonid='$id' AND `batchesfor`='$postcategory'";  
		   $this->conn->query($sql1);
		   
		   $sql1 ="DELETE  FROM  includeandexclude WHERE commonid='$id' AND `includeandexcludefor`='$postcategory'";  
		   $this->conn->query($sql1);
		 
		 foreach($a as $key=>$val){
		      
		     $sql1 ="INSERT INTO  Itinerary set `commonid`=$id, `activity`='$key',`description`='$val',`Itineraryfor`='$postcategory'";  
		     $this->conn->query($sql1);
		  }
		  
		  	foreach($b as $key=>$val){
		      
		     $sql2 ="INSERT INTO   batches set `commonid`=$id, `date_range`='$key',`availity`='$val',`batchesfor`='$postcategory'";  
		     $this->conn->query($sql2);
		  }
		  
		   foreach($c as $key=>$val){
		      
		     $sql3 ="INSERT INTO   includeandexclude set `commonid`=$id, `included`='$key',`excluded`='$val',`includeandexcludefor`='$postcategory'";  
		     $this->conn->query($sql3);
		  }
		 
		}
		
			if($save){
			if(isset($move) && $move && !empty($old_file)){
				if(is_file(base_app.$old_file))
					unlink(base_app.$old_file);
			}
			$resp['status']='success';
			$resp['message']= $postcategory." Details successfully ".$action;
			$this->settings->set_flashdata('success',$resp['message']);
			
		}else{
			$resp['status']='failed';
			$resp['error']= $this->conn->error;
			$resp['message']= " error:".$sql;
		}
		return json_encode($resp);
	
	
		exit;
	}
	
	
		public function service_delete1(){
		extract($_POST);
		$fpath = $this->conn->query("SELECT image1 FROM stay where id = $id")->fetch_array()['image1'];
		$qry = $this->conn->query("DELETE FROM stay where id = $id");
		if($qry){
			if(is_file(base_app.$fpath))
					unlink(base_app.$fpath);
			$resp['status']='success';
			$resp['message']= "Stay Details successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='Failed';
			$resp['error']= $this->conn->error;
			$resp['err_msg'] = " Deleting Data failed";
		}
		return json_encode($resp);
	}
	
	
	
	public function service_delete(){
		extract($_POST);
		$fpath = $this->conn->query("SELECT image1 FROM treks where id = $id")->fetch_array()['image1'];
		$qry = $this->conn->query("DELETE FROM treks where id = $id");
		if($qry){
			if(is_file(base_app.$fpath))
					unlink(base_app.$fpath);
			$resp['status']='success';
			$resp['message']= "Details successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='Failed';
			$resp['error']= $this->conn->error;
			$resp['err_msg'] = " Deleting Data failed";
		}
		return json_encode($resp);
	}

	public function testimonial(){
	    $_POST['slug'] = preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($_POST['message_from'])));

		extract($_POST);
	
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','message','old_file'))){
				if(!empty($data)) $data .= ", ";
				$data .= "`$k` = '$v'";
			}
		}
				if(!empty($data)) $data .= ", ";
				$data .= "`message` = '".addslashes(htmlentities($message))."'";
		if(isset($_FILES['img']) && !empty($_FILES['img']['tmp_name'])){
			$fname = 'uploads/'.time().'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],base_app.$fname);
			if($move){
				$data .=" , `file_path` = '{$fname}' ";
			}
		}
		if(empty($id)){
			$sql ="INSERT INTO blogs set $data";
			
		}else{
			$sql ="UPDATE blogs set $data where id = {$id}";
		}
		$save = $this->conn->query($sql);
		
      
      	
      	
      	
      	
		$action = empty($id) ? "added":"updated";
		if($save){
			if(isset($move) && $move && !empty($old_file)){
				if(is_file(base_app.$old_file))
					unlink(base_app.$old_file);
			}
			$resp['status']='success';
			$resp['message']= " Blog successfully ".$action;
			$this->settings->set_flashdata('success',$resp['message']);
			
		}else{
			$resp['status']='failed';
			$resp['message']= " error:".$sql;
		}
		return json_encode($resp);
		exit;
	}

	public function testimonial_delete(){
		extract($_POST);
		$fpath = $this->conn->query("SELECT file_path FROM blogs where id = $id")->fetch_array()['file_path'];
		$qry = $this->conn->query("DELETE FROM blogs where id = $id");
		if($qry){
			if(is_file(base_app.$fpath))
					unlink(base_app.$fpath);
			$resp['status']='success';
			$resp['message']= " Blog successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='success';
			$resp['error']= $this->conn->error;
			$resp['err_msg']= " Blog has failed to delete";
		}
		return json_encode($resp);
	}

	public function client(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','description','old_file'))){
				if(!empty($data)) $data .= ", ";
				$data .= "`$k` = '$v'";
			}
		}
				if(!empty($data)) $data .= ", ";
				$data .= "`description` = '".addslashes(htmlentities($description))."'";

		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
				$fname = 'uploads/'.strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
				$move = move_uploaded_file($_FILES['img']['tmp_name'],base_app. $fname);
				if($move){
					$data .=" , file_path = '{$fname}' ";
				}
		}	

		if(empty($id)){
			$sql ="INSERT INTO clients set $data";
		}else{
			$sql ="UPDATE clients set $data where id = {$id}";
		}
		$save = $this->conn->query($sql);
		$action = empty($id) ? "added":"updated";
		if($save){
			if(isset($move) && $move && !empty($old_file)){
				if(is_file(base_app.$old_file))
					unlink(base_app.$old_file);
			}
			$resp['status']='success';
			$resp['message']= " Client Details successfully ".$action;
			$this->settings->set_flashdata('success',$resp['message']);
			
		}else{
			$resp['status']='failed';
			$resp['error']= $this->conn->error;
			$resp['message']= " error:".$sql;
		}
		return json_encode($resp);
		exit;
	}

	public function banner_delete(){
		extract($_POST);
		$fpath = $this->conn->query("SELECT image FROM banner where id = $id")->fetch_array()['image'];
		$qry = $this->conn->query("DELETE FROM banner where id = $id");
		if($qry){
			if(is_file(base_app.$fpath))
					unlink(base_app.$fpath);
			$resp['status']='success';
			$resp['message']= " Banner Details successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='success';
			$resp['error']= $this->conn->error;
			$resp['err_msg']= " Banner Details has failed to delete";
		}
		return json_encode($resp);

	}
	public function contact(){
		extract($_POST);
		$data = "";
		foreach ($_POST as $key => $value) {
			if(!empty($data)) $data .= ", ";
				$data .= "('{$key}','{$value}')";
		}
		$this->conn->query("TRUNCATE `contacts`");
		$sql = "INSERT INTO `contacts` (meta_field, meta_value) Values $data";
		$qry = $this->conn->query($sql);
		if($qry){
			$resp['status']='success';
			$resp['message']= " Contact Details successfully updated";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='error';
			$resp['message']= $sql;
		}
		return json_encode($resp);
		exit;
	}
	public function message_delete(){
		extract($_POST);
		$qry = $this->conn->query("DELETE FROM  Inquiries where id = $id");
		if($qry){
			$resp['status']='success';
			$resp['message']= " Inquiry successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='success';
			$resp['error']= $this->conn->error;
			$resp['err_msg']= " Inquiry has failed to delete";
		}
		return json_encode($resp);

	}
	
	public function delete_pcategory(){
		extract($_POST);
		$qry = $this->conn->query("DELETE FROM blog_category where id = $id");
		if($qry){
			$resp['status']='success';
			$resp['message']= " Blog category successfully deleted";
			$this->settings->set_flashdata('success',$resp['message']);
		}else{
			$resp['status']='success';
			$resp['error']= $this->conn->error;
			$resp['err_msg']= " Blog category has failed to delete";
		}
		return json_encode($resp);

	}
}

$Content = new Content();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$sysset = new SystemSettings();
switch ($action) {
	case 'update':
		echo $Content->update();
	break;
	case 'projectcategory':
		echo $Content->projectcategory();
	break;
	
	case 'service':
		echo $Content->service();
	break;
	
	case 'service1':
		echo $Content->service1();
	break;
	
	case 'service_delete':
		echo $Content->service_delete();
	break;
	
	case 'service_delete1':
		echo $Content->service_delete1();
	break;
	
	
	case 'delete_pcategory':
		echo $Content->delete_pcategory();
	break;
	case 'testimonial':
		echo $Content->testimonial();
	break;
	case 'testimonial_delete':
		echo $Content->testimonial_delete();
	break;
	case 'client':
		echo $Content->client();
	break;
	case 'client_delete':
		echo $Content->client_delete();
	break;
	case 'message_delete':
		echo $Content->message_delete();
	break;
	case 'contact':
		echo $Content->contact();
	break;
	case 'banner':
		echo $Content->banner();
	break;
	case 'banner_delete':
		echo $Content->banner_delete();
	break;
	default:
		// echo $sysset->index();
		break;
}