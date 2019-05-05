<?php
$link=mysqli_connect("localhost","root","") or die ("Not Connected");
mysqli_select_db($link,"sports") or die ("no db found");
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    if(empty($username)||empty($password))
    {
        echo"<h3> Enter Username and Password</h3>";
    }
    else
    {
        $result=mysqli_query($link,"select * from login where username='$username' and password='$password'") or die ("Failed to query".mysqli_error($link));
        $row=mysqli_fetch_array($result);
        if($row['username']==$username && $row['password']==$password)
        {
            echo"Login Successfull !!! Welcome";
            header("Location:home.php");
        }
        else
        echo"<h3> Enter valid Username and Password </h3>";

    }
}
?>
<!DOCTYPE>
<head><title> Login Page </title>
<style type="text/css">
.div {
    border:5px  whitesmoke;
    width:180px;
    height:30px;
    position:fixed;
    top:360px;
    left:680px;
}
</style>
</head>
<body background="key.jpg">
<a href="summary.php"><button class="div">Summary of Sports</button></a>
<form action="index.php" method="POST">
<div><table border="1" align="center" width="400" height="300">
<tr><td colspan="5" align="center" bgcolor="gray">Enter Login Details</td></tr>
<tr><td align="center" bgcolor="whitesmoke">User ID:*</td><td align="center"><input type="text" name="user"></td></tr>
<tr><td align="center" bgcolor="whitesmoke">Password:*</td><td align="center"><input type="password" name="pass"></td></tr>
<tr><td colspan="5" align="center" bgcolor="gray"><input type="submit" name="submit" value="&nbsp;Login&nbsp;"></td></tr>
</table></div>
</form>
</body>
</html>