<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

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
<link rel="shortcut icon" type="image/x-icon" href="Logo0.png" />
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
<link rel="stylesheet" type="text/css" href="style2.css">
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
.button {
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 16px;
}

.button1 {
  background-color: orange; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: red; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button2:hover {
  background-color: #4CAF50;
  color: red;
}
</style>
<div class="navbar">
  <a href="home.html"><img src="LOGO4.png" height="70" width="250"></a>
  <?php
  echo "<p align='right'><font color=purple size='4pt'><b>Welcome "; echo $dbname;echo "</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>";
  echo "<br><br><br>";
  
  ?>
 <a href="Payment.php">&nbsp&nbsp&nbsp <button class="button button1" align="left">Buy Now</button></a>
  <div class="topnav-right">
<?php
   echo "<a href='logout.php'> <button class='button button2' align='right'>Logout</button></a> &nbsp&nbsp";
   ?>
  </div>
</div>
<body>
<font face="verdana" color="purple">
<h2 align="center"><b>New Zealand Tour</h2>
<p align="center"> <img src="image4.jpg" height=200 width=400>&nbsp&nbsp&nbsp&nbsp<img src="NZ2.jpg" height=200 width=400></p>
<p align="center"> <img src="NZ3.jpg" height=200 width=400>&nbsp&nbsp&nbsp&nbsp<img src="NZ4.jpg" height=200 width=400></p>
<h2 align="center">Virtual Tour</h><br>
<iframe width="620" height="315"
src="https://www.youtube.com/embed/Ky9xa_s297Y?autoplay=1&mute=1&loop=1">
</iframe>
<br>
<br>
<iframe width="620" height="315"
src="https://www.youtube.com/embed/KvxiXGbyWfI?autoplay=1&mute=1&loop=1">
</iframe>

</body>
</html>