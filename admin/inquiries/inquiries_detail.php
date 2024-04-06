<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="<?php echo base_url ?>dist/style.css">

<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from `Inquiries` where id = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>

<div class="row">
              
                <div class="col-md-8 studentProfileDetails">
				    <h3 class="mb-0"><i class="fa fa-clone"></i>Inquiries Detail</h3></br>
                     <table class="table table-bordered">
              <tbody><tr>
                <th width="30%">First Name</th>
                <td width="2%">:</td>
                <td><?php echo isset($fname) ? $fname : '' ?></td>
              </tr>
              <tr>
                <th width="30%">Last  Name	</th>
                <td width="2%">:</td>
                <td><?php echo isset($lname) ? 	$lname : '' ?></td>
              </tr>
             
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo isset($email) ? $email : '' ?></td>
              </tr>
               <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo isset($phone) ? $phone : '' ?></td>
              </tr>
              <tr>
                <th width="30%">What are you looking for</th>
                <td width="2%">:</td>
                <td><?php echo isset($lookingfor) ? $lookingfor : '' ?></td>
              </tr>
               <tr>
                <th width="30%">Massage</th>
                <td width="2%">:</td>
                <td><?php echo isset($msg) ? $msg : '' ?></td>
              </tr>
              
            </tbody></table><br>
            
            
            
           
			 </div>
            </div>
            <style>
            .m-0{
                display:none;
            }
            .studentProfile {
    text-align: center;
}
.studentProfileDetails h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom:20px !impotrant;
}
                .studentProfile img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}
.studentProfileDetails .table th, .studentProfileDetails .table td {
    font-size: 14px;
    padding: 8px 10px;
    color: #000;
    font-weight: 600 !important;
}
            </style>