<!DOCTYPE>
<html>
<head><title>Player Details</title></head>
<body  background="second.jpg">
<table align="right"><tr><td>
<a href="home.php"><button align="right">Home</button></td></tr></table></a>
<table width="1000" border="5" align="center" bgcolor="whitesmoke">
		             <caption><h3> Player Details</h3>
					 </caption>
					    <tr>
						
						  <th>Name</th>
						  <th>Father Name</th>
                          <th>Date_of_birth</th>
						  <th>Gender</th>
						  <th>Blood_Group</th>
						  <th>Mobile No:</th>
						  <th>Father Mobile No:</th>
                          <th>Field</th>
                          <th>Email:</th>
						  <th>Address:</th>
						  <th>Fee Paid:</th>
					    </tr>
<?php
$link=mysqli_connect("localhost","root","")or die("not connected");
mysqli_select_db($link,"sports")or die("no db found");
$field=$_GET['field'];
if(empty($field))
{
    echo "<h3>Please Enter Valid Field</h3>";
}
else
{
$viewquery="SELECT * FROM candidate_details where field='$field'";
$Execute=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($Execute))
{
	$name=$Datarows['name'];
	$father_name=$Datarows['father_name'];
    $dob=$Datarows['dob'];
    $gender=$Datarows['gender'];
    $blood_group=$Datarows['blood_group'];
	$pno=$Datarows['pno'];
    $father_no=$Datarows['father_no'];
    $field=$Datarows['field'];
	$email=$Datarows['email'];
	$address=$Datarows['address'];
	$fee=$Datarows['fee'];
	
?>	
				          <tr>
						  <td><?php echo $name; ?></td>
						  <td><?php echo $father_name; ?></td>
						  <td><?php echo  $dob; ?></td>
						  <td><?php echo $gender; ?></td>
                          <td><?php echo $blood_group; ?></td>
						  <td><?php echo $pno; ?></td>
						  <td><?php echo $father_no; ?></td>
                          <td><?php echo $field; ?></td>
						  <td><?php echo $email; ?></td>
						  <td><?php echo $address; ?></td>
						  <td><?php echo $fee; ?></td>						  
						  
				          </tr>
                           
                           <?php  }
} ?>						   

		        </table>
		
</body>
</html>