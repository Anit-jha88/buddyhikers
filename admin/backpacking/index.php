<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
		    

			<div class="card-tools">

			    
			    
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_project" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New Backpacking</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="10%">
					<col width="20%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Treks Image</th>
						<th>Treks Name</th>
						
						<th>Pickup & Drop</th>
						<th>Difficulty</th>
						<th>Altitude</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					
				
					$qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Backpacking' order by `id` asc");
					
				   
					
					
					
					while($row= $qry->fetch_assoc()):
					
							
						
						
				
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td class='text-center'>
							<img src="<?php echo validate_image($row['image1']) ?>" alt="<?php echo ucwords($row['image1']) ?> Image" width="100px" height="80px" style="object-fit:scale-down;object-position:center center" class="img-thumbnail">
						</td>
						<td><b><?php echo ucwords($row['treksname']) ?></b></td>
						
					
						<td><b><?php echo ucwords($row['pickup_drop']) ?></b></td>
						<td><b><?php echo ucwords($row['difficulty']) ?></b></td>
						<td><b><?php echo ucwords($row['altitude']) ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat btn-sm manage_allproject">
		                          <i class="fas fa-edit"></i>
		                        </a>&nbsp;
		                        
		                        
		                       <button type="button" class="btn btn-danger btn-sm btn-flat delete_message" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.new_project').click(function(){
			location.href = _base_url_+"admin/?page=backpacking/manage";
		})
		
		$('.ongoing_project').click(function(){
			location.href = _base_url_+"admin/?page=backpacking&datafilter=ongoing";
		})
		
		$('.view_message').click(function(){
			location.href = _base_url_+"admin/?page=backpacking/&id="+$(this).attr('data-id')
		})
		
		$('.manage_allproject').click(function(){
			location.href = _base_url_+"admin/?page=backpacking/manage&id="+$(this).attr('data-id')
		})
		$('.delete_allproject').click(function(){
		_conf("Are you sure to delete this Backpacking?","delete_allproject",[$(this).attr('data-id')])
		})
		
			$('.delete_message').click(function(){
		_conf("Are you sure to delete this Backpacking?","delete_message",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_message($id){
		start_loader()
		$.ajax({
			url:_base_url_+'admin/classes/Content.php?f=service_delete',
			method:'POST',
			data:{id:$id},
			dataType:'json',
			success:function(resp){
				if(resp.status == 'success'){
					location.reload()
				}else{
					alert_toast(resp.err_msg,'error')
				}
				end_loader();
			}
		})
	}
</script>