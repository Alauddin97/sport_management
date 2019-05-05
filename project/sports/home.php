<html>
<head><title>Registration</title>
<style>
div
{
    border:1px;
	width:250px;
	height:30px;
	position:fixed;
	top:140px;
	right:80px;
}
.log
{
    border:1px blue solid;
	width:80px;
	height:30px;
	position:fixed;
	top:10px;
	right:80px;
}


.div
{	border:1px;
	width:400px;
	height:300px;
	position:fixed;
	top:140px;
	right:150px;
}
	.ssd
	{
	
	border:2px blue solid;
	width:150px;
	height:40px;
	position:fixed;
	top:170px;
	left:80px;
	}
	.usd
	{
	
	border:2px blue solid;
	width:150px;
	height:40px;
	position:fixed;
	top:240px;
	left:80px;
	}
	.hwd
	{
	
	border:2px blue solid;
	width:150px;
	height:40px;
	position:fixed;
	top:170px;
	left:250px;
	}
	.srd
	{
	
	border:2px blue solid;
	width:150px;
	height:40px;
	position:fixed;
	top:240px;
	left:250px;
	}

</style>
</head>
<body background="sports.jpg" background-size:1000px;>
<a href="show_details.php"><button class="ssd">Player<br/> Details</button></a>
<a href="coach.php"><button class="usd">Coaching Staff<br/> Details</button></a>
<a href="field_details.php"><button class="hwd"> Field<br/> Details</button></a>
<a href="search_player.php"><button class="srd"> Search by<br/> Field</button></a>


<table align="right"><tr><td><a href="index.php"><button class="log">&nbsp;Logout&nbsp;</button></a></td></tr></table>
<form action="home.php" method="POST">
<marquee><h1 style="color:white;"><b><i>WELCOME&nbsp;&nbsp;&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;GHOUSIA&nbsp;&nbsp;&nbsp;&nbsp;SPORTS&nbsp;&nbsp;&nbsp;&nbsp;ACADEMY</h1></marquee>
<div>
<table border="1" width="400" hight="300" align="left" class="div">
<tr><td colspan="5" align="center" bgcolor="gray"> Enter Student's Information</td></tr>
<tr><td align="center" bgcolor="whitesmoke">Name:*</td><td align="center"><input type="text" name="name"></td></tr>
<tr><td align="center" bgcolor="whitesmoke"> Father Name:*</td><td align="center"><input type="text" name="father_name"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Date_of_birth:*</td><td align="center"><input type="text" name="dob"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Gender:*</td><td align="center"><input type="text" name="gender"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Blood_group:</td><td align="center"><input type="text" name="blood_group"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Mobile No:</td><td align="center"><input type="text" name="pno"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Father Mobile No:</td><td align="center"><input type="text" name="father_no"></td>
<tr><td align="center" bgcolor="whitesmoke">Field(Cricket/Football/Hockey/Tennis):</td><td align="center"><input type="text" name="field"></td>
<tr><td align="center" bgcolor="whitesmoke">Email:</td><td align="center"><input type="text" name="email"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Address:*</td><td align="center"><input type="text" name="address"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Fee Paid:*</td><td align="center"><input type="text" name="fee"></td>
<tr><td colspan="5" align="center"><input type="submit" name="submit" value="&nbsp;Register&nbsp;"></td></tr>
</table> 
</div>
</center>
</form>
</body>
</html>

<?php
$link=mysqli_connect("localhost","root","")or die("not connected");
mysqli_select_db($link,"sports")or die("no db found");

if(isset($_POST['submit']))
	
	{
	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $blood_group=$_POST['blood_group'];
    $pno=$_POST['pno'];
	$father_no=$_POST['father_no'];
	$field=$_POST['field'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$fee=$_POST['fee'];
	
    if(empty($name)||empty($father_name)||empty($dob)||empty($gender)||empty($address)||empty($fee)||empty($field))
    {
	    echo "<h3>Enter Details Properly!(* >> Mendatory)</h3>";
		}
		else
		{
	$query="insert into candidate_details(name,father_name,dob,gender,blood_group,pno,father_no,field,email,address,fee) values('$name','$father_name','$dob','$gender','$blood_group',' $pno','$father_no','$field','$email','$address','$fee')";
	
	if(mysqli_query($link,$query))
	{
              echo "<h3>Candidate Details Inserted Successfuly!!!! </h3>";
	}
    }
	}	
?>