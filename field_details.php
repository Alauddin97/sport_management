<!DOCTYPE>
<html>
<head><title>Field_Details</title>
<style>
.div
{
    border:1px blue solid;
	width:800px;
	height:30px;
	position:fixed;
	top:140px;
	left:360px;
}
.log
{
    border:1px blue solid;
	width:80px;
	height:30px;
	position:fixed;
	top:80px;
	right:60px;
}
</style>
</head>
<table align="right"><tr><td>
<body background="index.jpg">
<a href="home.php"><button class="log">Home</button></td></tr></table></a>
<table width="1000" border="5" align="center" class="div">
		             <caption><h3><i> Field Details
					 </h3></i></caption>
					    <tr>
                        <th> S_No</th>
                        <th>Field</th>
                        <th>Total Number Seats</th>
                        <th>Total Number of Player's Registered</th>
                        <th>Vacancy</th>
					    </tr>
                        <?php
$link=mysqli_connect("localhost","root","")or die("not connected");
mysqli_select_db($link,"sports")or die("no db found");
$viewquery="SELECT * FROM field_details ";
$Execute=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($Execute))
{
    $s_no=$Datarows['s_no'];
    $field=$Datarows['field'];
	$no_of_seats=$Datarows['no_of_seats'];
    $no_of_player=$Datarows['no_of_player'];
    $vacancy=$Datarows['vacancy'];	
	
?>	
				          <tr>
						  <td><?php echo $s_no; ?></td>
                          <td><?php echo $field; ?></td>
						  <td><?php echo $no_of_seats; ?></td>
						  <td><?php echo $no_of_player; ?></td>
                          <td><?php echo $vacancy; ?></td>
				          </tr>
                           
                           <?php  } ?>		
</body>
</html>