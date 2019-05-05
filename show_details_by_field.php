<!DOCTYPE>
<html>
<head><title>Player Details</title></head>
<body  background="second.jpg">
<style>
.div
{
	border:5px  whitesmoke;
    width:180px;
    height:30px;
    position:fixed;
    top:20px;
    right:20px;
}
</style>

<a href="home.php"><button align="right" class="div">Home</button></a>
<table width="1000" border="5" align="center" bgcolor="white">
		             <caption><h3> Coaching Staff Details</h3>
					 </caption>
					    <tr>
						
						  <th>Name</th>
                          <th>Date_of_Birth</th>
                          <th>Gender</th>
						  <th>Role</th>
                          <th>Salary</th>
						  <th>Date_of_Join</th>
						  <th>Mobile No</th>
						  <th>SSN</th>
                          <th>Field</th>
                          <th>Email</th>
						  <th>Address</th>
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
$viewquery="SELECT * FROM coach_details where field='$field'";
$Execute=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($Execute))
{
    $name=$Datarows['name'];
    $dob=$Datarows['dob'];
    $gender=$Datarows['gender'];
    $role=$Datarows['role'];
    $sal=$Datarows['sal'];
    $doj=$Datarows['doj'];
    $pno=$Datarows['pno'];
    $ssn=$Datarows['ssn'];
    $field=$Datarows['field'];
	$email=$Datarows['email'];
	$address=$Datarows['address'];	
?>	
				          <tr>
						  <td><?php echo $name; ?></td>
						  <td><?php echo  $dob; ?></td>
						  <td><?php echo $gender; ?></td>
                          <td><?php echo $role; ?></td>
						  <td><?php echo $sal; ?></td>
                          <td><?php echo $doj; ?></td>
						  <td><?php echo $pno; ?></td>
                          <td><?php echo $ssn; ?></td>
                          <td><?php echo $field; ?></td>
						  <td><?php echo $email; ?></td>
						  <td><?php echo $address; ?></td>
						  
				          </tr>
                           
						   <?php  }
} ?>						   

</table>
<table width="1000" border="5" align="center" bgcolor="whitesmoke">
		             <caption><h3> Player Details</h3>
					 </caption>
					    <tr>
						
						  <th>Name</th>
						  <th>Father Name</th>
                          <th>Date_of_birth</th>
					<th>Player_SSN</th>
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
$sno=$Datarows['sno'];
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
							<td><?php echo  $sno; ?></td>
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