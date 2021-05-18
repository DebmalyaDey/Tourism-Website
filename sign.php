<!doctype html>  
<html>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: orange;
background-size:     cover;                      
    background-repeat:   no-repeat;
    background-position: center center;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            </style>  
</head>  
<body>  
<?php
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db1",$connection);
if(isset($_POST['submit']))
{
$pno=$_POST['ph'];
$uname=$_POST['Name'];
$Pas=$_POST['Pass'];
$Pas1=$_POST['Pass1'];
$query=mysql_query("select * from table1 where pn='$pno'");
$numrows=mysql_num_rows($query);  
if($numrows!= 0)
{
echo "<font color='red' font size=5><br/><br/><span>Phone Number is already exists</span>";
echo '<p><a href="log1.php"><font color="blue">Click Here to login</a></p>';
echo '<p><a href="sign.html"><font color="blue">Click Here to Register</a></p>';
exit;
}
if($pno ==0||$uname ==' '||$Pas==' ')
{
echo '<p><font color="blue">**All fields are required**</p>';
echo '<p><font color="blue"><a href="sign.html">Go back to Sign Up page</a></p>';
exit;
}
if($pno !=' '&&$uname !=' '&&$Pas!=' '&&$numrows== 0&&$Pas1 == $Pas)
{
$query=mysql_query("insert into table1(pn,name,pass)values('$pno','$uname','$Pas')");
echo "<font color='blue'><br/><br/><span>Account created Sucessfully....!! Now login and start your tour</span>";
echo "<p><img src='imo2.png' height='100' width='100'></p>";
echo '<p><font color="blue"><a href="log1.php">Click Here to login</a></p>';
exit;
}
if($Pas1 != $Pas)
{
echo "<p><font color='blue'>!!Password and Confirm Password are not same!!</p>";
echo '<p><font color="blue"><a href="sign.html">Go back to Register</a></p>';
exit;
}

else
{
	echo "<p>Error!!</p>";
}
}
mysql_close($connection);
?>

</body>  
</html>