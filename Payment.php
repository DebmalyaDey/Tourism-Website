<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body bgcolor="orange">
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
	header('Refresh: 0; URL = log1.php');
}

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
</script>
<p align="right"><font size="4"><a href="logout.php"> Logout </a> </p>
<p align="center"><iframe width="680px" height= "730px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAANAAR882NZUNDc1REkyTk9GTDE2V1pNSEY1VlZEQkdSMi4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe></p>
</body>
</html>