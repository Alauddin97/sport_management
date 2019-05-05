<!DOCTYPE>
<html>
<head><title>coach</title></head>
<body background="second.jpg">
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
		             <caption><h3> Coaching Staff Details for Cricket</h3>
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
$viewquery="SELECT * FROM coach_details where field='Cricket'";
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
                           
                           <?php  } ?>						   

		        </table>
<table width="1000" border="5" align="center" bgcolor="white">
		             <caption><h3> Coaching Staff Details for Football</h3>
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
$viewquery="SELECT * FROM coach_details where field='Football'";
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
                           
                           <?php  } ?>						   

		        </table>
<table width="1000" border="5" align="center" bgcolor="white">
		             <caption><h3> Coaching Staff Details for Hockey</h3>
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
$viewquery="SELECT * FROM coach_details where field='Hockey'";
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
                           
                           <?php  } ?>						   

		        </table>
<table width="1000" border="5" align="center" bgcolor="white">
		             <caption><h3> Coaching Staff Details for Tennis</h3>
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
$viewquery="SELECT * FROM coach_details where field='tennis'";
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
                           
                           <?php  } ?>						   

		        </table>
</body>
</html>