

 <html>
<head><title>batchphp</title>
<style>
	table,th{
	width:800px;
	border:2px solid black;
	border-collapse:collapse;
	padding:10px;
	align:center;
	}
th,td{
		text-align:center;
	}
</style>
</head>
<body>
	<center>
<?php
$b=$_POST['fname'];
$db=mysql_connect("localhost","root","");
mysql_select_db("slambook",$db);
$sql="SELECT * from slam WHERE fname='$b'";
$result = mysql_query($sql);
echo "<table border='2'><tr><th>Full Name</th>
       <th>Nick Name</th><th>Email id</th><th>Phone No.</th><th>Date of Birth</th><th>Strength</th><th>Weakness</th><th>Hobbies</th><th>Fav Dish</th><th>Fav Hero</th><th>Fav Colour</th><th>My Role</th><th>I Like your</th><th>Fav Place</th><th>Address</th><th>Opinion</th><th>My Words</th></tr>";
while($display=mysql_fetch_assoc($result))
{
	echo "<tr><td>".$display['fname']."</td>"."<td>".$display['niname']."</td>"."<td>".$display['eid']."</td>"."<td>".$display['pno']."</td>"."<td>".$display['dob']."</td>"."<td>".$display['strength']."</td>"."<td>".$display['weakness']."</td>"."<td>".$display['hob']."</td>"."<td>".$display['fdish']."</td>"."<td>".$display['fhero']."</td>"."<td>".$display['fcolour']."</td>"."<td>".$display['you']."</td>"."<td>".$display['like']."</td>"."<td>".$display['fplace']."</td>"."<td>".$display['address']."</td>"."<td>".$display['opinion']."</td>"."<td>".$display['say']."</td>";
}
echo "</table>";
mysql_close($db);
?>
</body>
</center>
</html>

