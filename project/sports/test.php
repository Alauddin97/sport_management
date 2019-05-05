<?php
$link=mysqli_connect("localhost","root","") or die ("Not Connected");
mysqli_select_db($link,"sports") or die ("no db found");

if(isset($_POST['submit']))
{
	$field=$_POST['field'];
	if(empty($field))
		echo "<h3>Enter  Field</h3>";
else
	{
	$result=mysqli_query($link,"select * from candidate_details where field='$field'") or die("Failed to query".mysqli_error($link));
$row=mysqli_fetch_array($result);
if($row['field']==$field)
{
	header("Location:show_details_by_field.php");
}
else echo "<h3>Enter Valid Field </h3>";

}
}

?>
<!DOCTYPE>
<html>
<head><title>Search page</title></head>

<style type="text/css">
div
{
    border:1px;
	width:100px;
	hight:100px;
	position:fixed;
	top:60px;
	left:480px;
}
		</style>
	</head>
	<body>
		</div>

<form  action="test.php" method="GET">

<div><table border="1" width="200" hight="300">
<tr>
<td colspan="5" align="center" bgcolor="gray"> Enter Field</td>
</tr>
<tr>
<td align="center">Field:</td><td><input type="text" name="Field"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table></div>
</form>
</body>
</html>
