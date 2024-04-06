
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="<?php echo base_url ?>dist/style.css">



<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from `emp` where empid = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>

  


<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title"><?php echo isset($empid) ? "Manage": "Create" ?> New Member</h5>
		</div>
		<div class="card-body">
			<form id="allproject" enctype="multipart/form-data">
			    	<input type="hidden" name="id" value="<?php echo isset($empid) ? $empid : '' ?>">
			    <h4>Member  Details</h4><hr>
			    
			    
				
			    
					<div class="row" class="details">
				
					<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label"> Member Name</label>
							<input type="text" name="membername" class="form-control" value="<?php echo isset($membername) ? $membername : '' ?>"/>
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">P.B Number</label>
							<input type="text" name="pbnumber" class="form-control" value="<?php echo isset($pbnumber) ? $pbnumber : '' ?>"/>
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Emp Department</label>
							<input type="text" name="Emp_id" class="form-control" value="<?php echo isset($Emp_id) ? $Emp_id : '' ?>"/>
						</div>
					</div>
					
				
			
					    	<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Email Id</label>
						<input type="text" name="email" class="form-control" value="<?php echo isset($email) ? $email : '' ?>"/>
						</div>
					</div>
				
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Mobile Number</label>
					              	<input type="text" name="Mobile_no" class="form-control" value="<?php echo isset($Mobile_no) ? $Mobile_no : '' ?>" required/>
						</div>
					</div>
			
				
				
				
				
			
					<div class="col-sm-4">
						<div class="form-group">
							<label for="" class="control-label">Phone Number</label>
				             	<input type="text" name="contact_no" class="form-control" value="<?php echo isset($contact_no) ? $contact_no : '' ?>"/>
						</div>
					</div>
					
					
					
					
					
						<div class="col-sm-8">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
								<!--<input type="text" name="address" class="form-control" value="<?php echo isset($address) ? $address : '' ?>"/>-->
								<textarea name="address" class="form-control"><?php echo isset($address) ? $address : '' ?></textarea>
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Pin Code</label>
					<input type="text" name="division" class="form-control" value="<?php echo isset($division) ? $division : '' ?>"/>
						</div>
					</div>
					
					
					
				</div>
			
					
					
				
				
			   	<div class="row">
				 
					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Profile photo</label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($profile_photo) ? $profile_photo :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="customFile" name="profile_photo" onchange="displayImg(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($profile_photo) ? $profile_photo:'') ?>" alt="" id="cimg" class="img-fluid img-thumbnail" >
						</div>
					</div>
					
					
			
					
					
					
				</div>
				
				
				
			
			
				
				
				
				
					
					
					
				</div>
				
				
				
				
			</form>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary btn-sm" form="allproject"><?php echo isset($_GET['id']) ? "Update": "Save" ?></button>
			<a class="btn btn-primary btn-sm" href="./?page=member">Cancel</a>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 30vh;
		width: 100%;
		object-fit:scale-down;
		object-position:center center;
	}
	
	img#cimgm {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgf {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgo {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgf3 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgf4 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgf5 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgf6 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}

	img#cimgm7 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}
	img#cimgf8 {
    height: 30vh;
    width: 100%;
    object-fit: scale-down;
    object-position: center center;
}
</style>


   
   
   <script>
function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	
	function displayImg1(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgm').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	
	function displayImg2(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	
		function displayImg3(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf3').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
			function displayImg4(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf4').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
				function displayImg5(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf5').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
	
	function displayImg6(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf6').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
	
	function displayImg7(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgm7').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
	function displayImg8(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimgf8').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	    
	    
	    
	}
	
	$(document).ready(function(){
	
		$('#allproject').submit(function(e){
		    
		  
		  
			e.preventDefault();
			start_loader();
			$.ajax({
				url:_base_url_+"/admin/classes/Content.php?f=service",
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				dataType: 'json',
				error: err=>{
					alert_toast("An error occured",'error')
					console.log(err);
					end_loader();
				},
				success:function(resp){
					if(resp != undefined){
						if(resp.status == 'success'){
							location.href=_base_url_+"admin/?page=member";
						}else{
							alert_toast("An error occured",'error')
							console.log(resp);
						}
						end_loader();
					}
				}
			})
		})
		$('.summernote').summernote({
		        height: 200,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
		            [ 'view', [ 'link','undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
	
	

</script>

<script type="text/javascript">
     $(document).ready(function () {
      var _mSelect2 = $("#select_example").select2();
      
     });
     $(document).ready(()=>{
    let template = `<div class='item'><input type="text" name="mob[]" class="form-control"  placeholder="Mobile No" /><button class="remove">X</button></div>`; 

    $("#add").on("click", ()=>{
        $("#items").append(template);
    })
    $("body").on("click", ".remove", (e)=>{
        $(e.target).parent("div").remove();
    })
    
     let template1 = `<div class='item'><input type="text" name="con[]" class="form-control"  placeholder="Contact No" /><button class="remove1">X</button></div>`; 

    $("#add1").on("click", ()=>{
        $("#itemscon").append(template1);
    })
    $("body").on("click", ".remove1", (e)=>{
        $(e.target).parent("div").remove();
    })
});
  </script>



