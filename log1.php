<html>
<head> 
<meta charset="UTF-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</script>
<meta charset="utf-8">
<title>Login</title> 
<link rel="stylesheet" type="text/css" href="style3.css">
     <script type="text/javascript" src="scrip1.js">
	</script>
<script>
  window.console = window.console || function(t) {};
</script> 
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>  
<body translate="no">

  <div class="page" style="animation-name: example;
  
  background-color: orange;
  animation: example 10s infinite;" >
  <p align="center"><a href="home.html"><img src="LOGO4.png" height="70" width="250"></p></a>
  <b> <p><font color="purple">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Don't have an account!!,what are you waiting for..... <a href="sign.html">Click Here to Sign Up</a></p><font color="purple">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">Login to see exciting tour packages</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
	  
	  <form action="log1.php" method="POST">  
        <label for="text">Phone Number</label>
        <input type="text" id="ph" name="ph">
        <label for="password">Password</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" id="submit" value="Login" name="submit">
		
		</form>
      </div>
    </div>
  </div>
  <p style="color:#151B54">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Go back to <a href="home.html">Home page</p>
</div>     
<?php  
session_start();  
if(isset($_POST['submit'])){  
  //echo "<div class='loader'></div>";
if(!empty($_POST['ph']) && !empty($_POST['pass'])) {   	
	$ph=$_POST['ph'];  
    $pass=$_POST['pass'];
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('db1') or die("cannot select DB");  
    $query=mysql_query("SELECT * FROM table1 WHERE pn='".$ph."' AND pass='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbpn=$row['pn'];  
    $dbpassword=$row['pass']; 
    }  
    if($ph == $dbpn && $pass == $dbpassword)  
    {  
	echo "<form action='pkg.php' method='post'>";
	echo "<form>";
	$_SESSION['ph'] = $_POST['ph'];
  header("location: pkg.php");
  exit;
    }  
    } else {  
    echo '<script>alert("Invalid Username or Password")</script>';
    }  
} else {  
    echo '<script>alert("All fields are required!")</script>';  
}  
}  
session_unset();
session_destroy();
?> 


  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
<script id="rendered-js" type="text/javascript">
var current = null;
document.querySelector('#ph').addEventListener('focus', function (e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart' },

    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart' } });


});
document.querySelector('#pass').addEventListener('focus', function (e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart' },

    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart' } });


});
document.querySelector('#submit').addEventListener('focus', function (e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart' },

    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart' } });


});
 sourceURL=pen.js
    </script>

<p>Go back to <a href="home.html">Home page</p>
<style>
@keyframes example {
  0%   {background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);}
  25%  {background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%);}
  50%  {background: linear-gradient(90deg, #fcff9e 0%, #c67700 100%);}
  75%  {background: linear-gradient(90deg, #f8ff00 0%, #3ad59f 100%);}
  100% {background: linear-gradient(90deg, #d53369 0%, #daae51 100%);}
}
</style>
</body>  
</html>