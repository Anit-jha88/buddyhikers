
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
	$qry = $conn->query("SELECT * from `treks` where id = '{$_GET['id']}' ");
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
			<h5 class="card-title"><?php echo isset($id) ? "Manage": "Create" ?> New Watersports</h5>
		</div>
		<div class="card-body">
			<form id="allproject" enctype="multipart/form-data">
			    	<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
			    	<input type="hidden" name="postcategory" value="Watersports">
			    	
			    <h4>Details</h4><hr>
			    
			    	<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="" class="control-label">Watersports Name</label>
				             	<input type="text" name="treksname" class="form-control" value="<?php echo isset($treksname) ? $treksname : '' ?>" required />
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Pickup & Drop</label>
					<input type="text" name="pickup_drop" class="form-control" value="<?php echo isset($pickup_drop) ? $pickup_drop : '' ?>" required />
						</div>
					</div>
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Duration</label>
					<input type="text" name="duration" class="form-control" value="<?php echo isset($duration) ? $duration : '' ?>"  />
						</div>
					</div>
				</div>
				
			    
					<div class="row" class="details">
				
					<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Altitude</label>
							<input type="text" name="altitude" class="form-control" value="<?php echo isset($altitude) ? $altitude : '' ?>"/>
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Trek Length</label>
							<input type="text" name="trek_length" class="form-control" value="<?php echo isset($trek_length) ? $trek_length : '' ?>"/>
						</div>
					</div>
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Difficulty</label>
							<input type="text" name="difficulty" class="form-control" value="<?php echo isset($difficulty) ? $difficulty : '' ?>"/>
						</div>
					</div>
					
				
				</div>
				
						<div class="row" class="details">
				
					<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Starting Price</label>
							<input type="text" name="starting_price" class="form-control" value="<?php echo isset($starting_price) ? $starting_price : '' ?>"/>
						</div>
					</div>
					
						<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Cross Price</label>
							<input type="text" name="cross_price" class="form-control" value="<?php echo isset($cross_price) ? $cross_price : '' ?>"/>
						</div>
					</div>
					
					
					
				
				</div>
			   
			
				  
				<h4>Upload Images</h4><hr>
				
				
					<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label"> Image1 </label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($image1) ? $image1 :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="student_pic" name="image1" onchange="displayImg1(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($image1) ? $image1:'') ?>" alt="" id="cimgm" class="img-fluid img-thumbnail">
						</div>
					</div>
					
						<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Image2 </label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($image2) ? $image2 :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="studen_with_parent" name="image2" onchange="displayImg2(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($image2) ? $image2:'') ?>" alt="" id="cimgf" class="img-fluid img-thumbnail">
						</div>
					</div>
					
						<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Image3</label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($image3) ? $image3 :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="bc_pic" name="image3" onchange="displayImg3(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($image3) ? $image3:'') ?>" alt="" id="cimgf3" class="img-fluid img-thumbnail">
						</div>
					</div>
					
					
				</div>
				
				
					<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Image4</label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($image4) ? $image4 :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="image4" name="image4" onchange="displayImg4(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($image4) ? $image4:'') ?>" alt="" id="cimgf4" class="img-fluid img-thumbnail">
						</div>
					</div>
					
						<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Image5</label>
							<div class="custom-file">
								<input type="hidden" name="old_file" value="<?php echo isset($image5) ? $image5 :'' ?>">
							<input type="file" class="custom-file-input rounded-circle" id="vc_pic" name="image5" onchange="displayImg5(this,$(this))">
							<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo validate_image(isset($image5) ? $image5:'') ?>" alt="" id="cimgf5" class="img-fluid img-thumbnail">
						</div>
					</div>
					
					
					
					
				</div>
				
				
				
				 <h4>Overview</h4><hr>
					<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="" class="control-label">Overview Conent</label>
				             <textarea  class="form-control" rows="4" cols="50" name="overviewcontent"><?php echo isset($overviewcontent) ? $overviewcontent : '' ?></textarea>
						</div>
					</div>
					
					
				</div>
				
				
				
				 <h4>Itinerary</h4><hr>
				  <?php
					 
					 $n=1;
					 $qry = $conn->query("SELECT * FROM `Itinerary`  where commonid = '{$_GET['id']}' AND `Itineraryfor`='Watersports' " );
					 $num=$qry->num_rows;
					 if($num>0){
					 while($row= $qry->fetch_assoc()):
					 
					 
					 ?>
					<div class="row">
				
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Activity</label>
					<input type="text" name="activity[]" class="form-control" value="<?php echo $row['activity']; ?>"/>
						</div>
					</div>
						<div class="col-sm-8">
						<div class="form-group">
							<label for="title" class="control-label">Description</label>
			 	               <textarea class="form-control" name="description[]" rows="4" cols="50"><?php echo $row['description'];?></textarea>
						</div>
							<?php if($n==$num){ ?>
						 <a href="javascript:void(0);" class="add_button1 btn btn-primary btn-sm" title="Add field">Add More</a>
						 <?php } ?>
					</div>
					
					
				</div>
				<?php $n++; endwhile; }else{ ?>
					<div class="row">
				
					
						<div class="col-sm-4">
						<div class="form-group">
							<label for="title" class="control-label">Activity</label>
					<input type="text" name="activity[]" class="form-control" value="<?php echo isset($parea) ? $parea : '' ?>"/>
						</div>
					</div>
						<div class="col-sm-8">
						<div class="form-group">
							<label for="title" class="control-label">Description</label>
			 	               <textarea class="form-control" name="description[]" rows="4" cols="50"></textarea>
						</div>
						 <a href="javascript:void(0);" class="add_button1 btn btn-primary btn-sm" title="Add field">Add More</a>
					</div>
					
					
				</div>
				<?php } ?>
				
			   <div class="field_wrapper1">
					    
			   </div>   
				
			
				
						<h4>Inclusions & Exclusions</h4></hr>
					 <?php
					 
					 $n=1;
					 $qry = $conn->query("SELECT * FROM `includeandexclude`  where commonid = '{$_GET['id']}' AND `includeandexcludefor`='Watersports' " );
					 $num=$qry->num_rows;
					 if($num>0){
					 while($row= $qry->fetch_assoc()):
					 
					 
					 ?>
					
					<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Inclusions</label>
				             	<input type="text" name="included[]" class="form-control" value="<?php echo $row['included'] ?>"/>
						</div>
					</div>
					
					
						<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Exclusions</label>
				               	<input type="text" name="excluded[]" class="form-control" value="<?php echo $row['excluded'] ?>"/>
						</div>
					</div>
					<?php if($n==$num){ ?>
					 <a href="javascript:void(0);" class="add_button btn btn-primary btn-sm" title="Add field">Add More</a>
					 <?php } ?>
				</div>
				
				<?php $n++; endwhile; }else{ ?>
					<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Inclusions</label>
				             	<input type="text" name="included[]" class="form-control" />
						</div>
					</div>
					
					
						<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Exclusions</label>
				               	<input type="text" name="excluded[]" class="form-control" />
						</div>
					</div>
					 <a href="javascript:void(0);" class="add_button2 btn btn-primary btn-sm" title="Add field">Add More</a>
				</div>
				<?php } ?>
				
			    
			     
			     
			     	<div class=" field_wrapper2">
					    
			       </div>  
				
				
				
				
					 <h4>Batches</h4></hr>
					 <?php
					 
					 $n=1;
					 $qry = $conn->query("SELECT * FROM `batches`  where commonid = '{$_GET['id']}' AND `batchesfor`='Watersports' " );
					 $num=$qry->num_rows;
					 if($num>0){
					 while($row= $qry->fetch_assoc()):
					 
					 
					 ?>
					
					<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Date Range</label>
				             	<input type="text" name="daterange[]" class="form-control" value="<?php echo $row['date_range'] ?>"/>
						</div>
					</div>
					
					
						<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Availity</label>
				                 <select class="form-control" name="availity[]">
				                  <?php
				                  $c= array('Available','Full');
				                  
				                  foreach($c as $v){
				                  
				                  ?>     
				                 <option <?php if($v==$row['availity']){ echo 'selected="selected"'; } ?>><?php echo $v;?></option>
				               <?php } ?>
				                </select>
						</div>
					</div>
					<?php if($n==$num){ ?>
					 <a href="javascript:void(0);" class="add_button btn btn-primary btn-sm" title="Add field">Add More</a>
					 <?php } ?>
				</div>
				
				<?php $n++; endwhile; }else{ ?>
					<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Date Range</label>
				             	<input type="text" name="daterange[]" class="form-control" value="<?php echo $row['date_range'] ?>"/>
						</div>
					</div>
					
					
						<div class="col-sm-6">
						<div class="form-group">
							<label for="title" class="control-label">Availity</label>
				                 <select class="form-control" name="availity[]">
				                 <option>Available</option>
				                 <option>Full</option>
				                </select>
						</div>
					</div>
					 <a href="javascript:void(0);" class="add_button btn btn-primary btn-sm" title="Add field">Add More</a>
				</div>
				<?php } ?>
				
				<div class="field_wrapper">
					    
			   </div>   
					
					
					
				</div>
				
				
				
				
			</form>
		</div>
		<div class="card-footer">
			<button class="btn btn-primary btn-sm" form="allproject"><?php echo isset($_GET['id']) ? "Update": "Save" ?></button>
			<a class="btn btn-primary btn-sm" href="./?page=traks">Cancel</a>
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
				url:_base_url_+"admin/classes/Content.php?f=service",
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
							location.href=_base_url_+"admin/?page=watersports";
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
  </script>


<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row demo"><div class="col-sm-6"><div class="form-group"><label for="" class="control-label">Date Range</label><input type="text" name="daterange[]" class="form-control" value="<?php echo isset($rpn) ? $rpn : '' ?>"/></div></div><div class="col-sm-6"><div class="form-group"><label for="title" class="control-label">Availity</label><select class="form-control" name="availity[]"><option>Available</option><option>Full</option></select></div></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="remove_button btn btn-primary btn-sm">Delete</a>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>

<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button1'); //Add button selector
    var wrapper = $('.field_wrapper1'); //Input field wrapper
    var fieldHTML = '<div class="row demo"><div class="col-sm-4"><div class="form-group"><label for="title" class="control-label">Activity</label>	<input type="text" name="activity[]" class="form-control" value="<?php echo isset($parea) ? $parea : '' ?>"/></div></div><div class="col-sm-8"><div class="form-group"><label for="title" class="control-label">Description</label><textarea class="form-control" name="description[]" rows="4" cols="50"></textarea></div></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="remove_button btn btn-primary btn-sm">Delete</a>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>

<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button2'); //Add button selector
    var wrapper = $('.field_wrapper2'); //Input field wrapper
    var fieldHTML = '<div class="row demo"><div class="col-sm-6"><div class="form-group"><label for="" class="control-label">Inclusions</label><input type="text" name="included[]" class="form-control" value="<?php echo isset($rpn) ? $rpn : '' ?>"/></div></div><div class="col-sm-6"><div class="form-group"><label for="title" class="control-label">Exclusions</label><input type="text" name="excluded[]" class="form-control" value=""/></div></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="remove_button btn btn-primary btn-sm">Delete</a>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>

