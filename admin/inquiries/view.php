<?php 
require_once('../config.php');
if(isset($_GET['id'])){

	$qry = $conn->query("SELECT * from `Inquiries` where id = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}	
	

}
?>
<div class="container-fluid">

	
	
    
		<div align="center">
        <table class="table table-sm">
            <tbody>
                
                <tr>
                    <th width="20%">Full Name</th>
                    <td width="2%">:</td>
                    <td><?php echo $fname; ?> <?php echo $lname; ?>  </td>
                    
                    <th width="20%">Email</th>
                    <td width="2%">:</td>
                    <td><?php echo $email; ?>  </td>
                </tr>
                
                
                 <tr>
                    <th width="20%">Phone no</th>
                    <td width="2%">:</td>
                    <td><?php echo 	$phone; ?>  </td>
                    
                    <th width="20%">Looking For </th>
                    <td width="2%">:</td>
                    <td><?php echo $lookingfor; ?>  </td>
                </tr>
                
                
                
                 <tr>
                    <th width="20%">Message </th>
                    <td width="2%">:</td>
                    <td><?php echo $msg; ?> </td>
                    
                   
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
<style>
	#uni_modal>.modal-dialog>.modal-content>.modal-footer{
		display:none !important;
	}
	#uni_modal>.modal-dialog>.modal-content>.modal-body{
		padding:0;
	}
</style>