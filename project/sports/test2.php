<?php
$link=mysqli_connect("localhost","root","")or die("not connected");
mysqli_select_db($link,"sports") or die ("db not found");
if(isset($_POST['submit']))
{
    $field=$_POST['field'];
    if(empty($field))
    {
        echo"<h3> ENTER FIELD</h3>";
    }
    else
    {
    $myquery=mysqli_query($link,"select * from candidate_details where field='$field'") or die ("failed to query".mysqli_erro($link));
    $row=mysqli_fetch_array($myquery);
    if($row['field']==$field)
     {
         echo" Successful";
         header("Location:show_details_by_field.php");
     }
     else
         echo"enter valid  field ";
    }
}
?>
<!doctype>
<html>
<head><title>test</title></head>
<body>
<form action="test2.php" method="POST">
Enter Field<input type="text" name="field">
<input type="submit" name="submit" value="submit">
</body>
</html>
