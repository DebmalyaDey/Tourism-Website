<?php
ob_start();
session_start();
?>
<html lang="en">
<head>
</head>
<body>
<h2>Enter Username and Password</h2>
<?php
$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("db1",$connection);
$msg='';
if(isset($_POST['login'])&&!empty($_POST['ph'])&&!empty($_POST['Pass'])){
if($_POST['username']==pn&&$_POST['password']==pass) {
$_SESSION['valid']=true;
$_SESSION['timeout']=time();
$_SESSION['username']='login';
echo 'You have entered valid username and password';
} else {
$msg='wrong username or password';
}}?>
</div> <!--/container -->
<div class="container">
<form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
?>"method="post">
<h4 class="form-signin-heading"><?php echo $msg; ?></h4>
<input type="text" class="form-control"
name="username" placeholder="Phone Number"
required autofocus></br>
<input type="password" class="form-control"
name="password" placeholder="Password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit"
name="login">Login</button>
</form>
<p>If you don't have account click Sign Up</p>
<p><a href="sign.html">Sign Up</a></p>
click here to <a href="logout.php" tite="Logout">Logout
</div>
</body>
</html>