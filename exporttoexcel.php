<?php
include('admin/config.php');
$fileName = "Inquiries-data_" . date('Y-m-d') . ".xls"; 
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$fileName");  
header("Pragma: no-cache"); 
header("Expires: 0");


echo '<table border="1">';
//make the column headers what you want in whatever order you want
echo '<tr><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th><th>PHONE</th><th>Looking FOR</th><th>MESSEAGE</th><th>DATE</th></tr>';
//loop the query data to the table in same order as the headers
 	$qry = $conn->query("SELECT * FROM `Inquiries`   order by unix_timestamp(`all_date`) desc");
 while($row = $qry->fetch_assoc()){ 
    echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['lookingfor']."</td><td>".$row['msg']."</td><td>".$row['all_date']."</td>
</tr>";
}
echo '</table>';

?>