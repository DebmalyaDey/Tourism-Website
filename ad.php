<?php
ob_start();
session_start();
?>
<html lang="en">
<link rel="shortcut icon" type="image/x-icon" href="Logo0.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
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
</head>
<body background="image12.jpg">
<h2>Enter Username and Password</h2>
<?php
$msg='';
if(isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
if($_POST['username']=='login'&&$_POST['password']=='1234') {
$_SESSION['valid']=true;
$_SESSION['timeout']=time();
#session_start();
#session_destroy();
$_SESSION = array(); 
   $_SESSION['username'] = $_POST['username'];
  header("location: fetch1.php");
     exit();
	 #session_unset();
#session_destroy();
} else {
$msg='wrong username or password';
}}?>
</div> <!--/container -->
<div class="container">
<form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
?>"method="post">
<h4 class="form-signin-heading"><?php echo $msg; ?></h4>
<input type="password" class="form-control"
name="username" placeholder="username"
required autofocus></br>
<input type="password" class="form-control"
name="password" placeholder="password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit"
name="login">Login</button>
</form>
This Page is designed for Administrator of this Website</br>
<font color="lime" size="5">
If you are an User then Go to Home page and then click on Login or Sign Up at the upper right corner of the page </br>
click here to go back to <a href="home.html" tite="Logout"><b><font color="yellow">Home.
</div>
</body>
</html>