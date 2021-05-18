<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="Logo0.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();    
if (isset($_SESSION['ph'])) {
$pno=$_SESSION['ph'];
$con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('db1') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM table1 WHERE pn='".$pno."'");  
    $numrows=mysql_num_rows($query); 
}
else
{
	header("location: log1.php");
}
if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbpn=$row['pn'];  
    $dbpassword=$row['pass']; 
	$dbname=$row['name'];	
    }  }
	

?>

<script type="text/javascript"> 
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
</script></head>
<link rel="stylesheet" type="text/css" href="style1.css">

<style>
body { padding-top: 100px; 
}
.navbar {
  overflow: hidden;
  background-color:rgba(0,0,0,0.0);
  position: fixed;
  top: -10;
  margin: 0;
    margin-left: -20;
  width: 102%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.topnav-right {
  float: right;
}
</style>

<div class="navbar">
  <a href="home.html"><img src="LOGO4.png" height="70" width="250"></a>
  <?php
  echo "<p align='right'><font color=orange size='4pt'><b>Welcome "; echo $dbname;echo "</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>";
  
  
  ?>
  <div class="topnav-right">
<?php
   echo "<a href='logout.php'><font color=red size='4pt'><b>Logout</a></b> &nbsp&nbsp&nbsp&nbsp";
   ?>
  </div>
</div>
<body>

<font face="verdana" color="cyan">
<h2 align="center"><b>New Zealand Tour</h2>
<p align="center"><a href="NZ.php"><img src="image4.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-78000</p>
<h2 align="center">France Tour</h2>
<p align="center"><a href="Fr.php"><img src="image2.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-98000</p>
<h2 align="center">Switzerland Tour</h2>
<p align="center"><a href="Swiss.php"><img src="image3.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-108000</p>
<h2 align="center">UAE Tour</h2>
<p align="center"><a href="UAE.php"><img src="image5.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-75000</p>
<h2 align="center">Scotland Tour</h2>
<p align="center"><a href="Scot.php"> <img src="image8.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-95000</p>
<h2 align="center">Germany Tour</h2>
<p align="center"><a href="De.php"> <img src="image9.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-96000</p>
<h2 align="center">Mexico Tour</h2>
<p align="center"><a href="Mex.php"> <img src="image10.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-95000</p>
<h2 align="center">Japan Tour</h2>
<p align="center"><a href="JP.php"> <img src="japan.jpg" height=250 width=500</p></a>
<p align="center">Price: *RS-85000</p></b>
<p align="right"><font color="red">*Package price excluding flight fare</p>
<p align="right"><font color="red">**Flight fare will be disclosed after selection of Travel date</p>
<?php
//session_unset();
//session_destroy();
?>
</body>
</html>