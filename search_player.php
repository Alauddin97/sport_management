<?php
$link=mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($link,"sports") or die ("db not found");
if(isset($_POST['submit']))
{
	$field=$_POST['field'];
	if(empty($field))
	{
		echo"<h3> Enter Field</h3>";
	}
	else
	{
		$myquery=mysqli_query($link,"select field from candidate_details where field='$field' ") or die ("Failed to query".mysqli_error($link));
		$row=mysqli_fetch_array($myquery);
		if($row['field']==$field)
		{
			echo"Successful";
			header("Location:show_details_by_field.php");
		}
		else
		echo"<h3> Enter valid field</h3>";
	}
}
?>
<!doctype>
<html>
<head>
<title> Search Field</title>
<style>
.div
{
	border:1px solid blue;
	width:250px;
	height:150px;
	position:fixed;
	top:250px;
	left:520px;
}
.log
{
	border:1px solid blue;
	width:150px;
	height:40px;
	position:fixed;
}
</style>
</head>
<body background="index.jpg">
<form action="show_details_by_field.php" method="GET">
<table border="1"  class="div">
<tr>
<td colspan="5" align="center" bgcolor="gray"> Enter Field </td></tr>
<tr>
<td align="center">Field</td>
<td align="center">
    <select option name="field">
        <option  value="cricket">Cricket&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        <option  value="football">Football</option>
        <option  value="tennis">Tennis</option>
		<option  value="Hockey">Hockey</option>
	</select>
</td></tr>
<tr>
<td colspan="5" bgcolor="gray" align="center"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>