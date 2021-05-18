<html>
<head>
	<style>
		table,th,td
		{
			border: 1px solid black;
		}
	</style>
</head>
<body>
<?php
session_start();
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="db1";
	if (empty($_SESSION['username']))
	{
		header("location: ad.php");
	}

	$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	
	$sql="SELECT * FROM table1";
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		echo "<table>	
				<tr>
					<th>Phone Number</th>
                                                                                <th>Name</th>
					<th>Password</th>
					
				</tr>";
			
				while($row=$result->fetch_assoc())
				{
					echo"<tr><td>".$row["pn"]."</td><td>".$row["name"]."</td><td>".$row["pass"]."</td></tr>";
				}
				echo "</table>";
	}
	else
	{
		echo "0 results";
	}
	$conn->close();
	session_unset();
session_destroy();
	?>
click here to clean <a href="logout.php" tite="Logout">session.
</body>
</html>