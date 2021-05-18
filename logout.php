<html>
<body bgcolor="purple">
<?php
   session_start();
   unset($_SESSION["pno"]);
   unset($_SESSION["ph"]);
   
   header('Refresh: 2; URL = home.html');
?>
<p><br><br></p>
<font color="white">
<h2 align="center">You have successfully logged out</h2><br>
<h2 align="center">See you again....</h2>
<p align="center"><img src="imo.png" height="100" width="100"></p>
</body>
</html>