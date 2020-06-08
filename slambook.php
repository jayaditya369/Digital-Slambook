<html>
<head><title>slambookphp</title>
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
$c=$_POST['niname'];
$d=$_POST['eid'];
$e=$_POST['pno'];
$f=$_POST['dob'];
$g=$_POST['strength'];
$h=$_POST['weakness'];
$i=$_POST['hob'];
$j=$_POST['fdish'];
$k=$_POST['fhero'];
$l=$_POST['fcolour'];
$m=$_POST['you'];
$n=$_POST['like'];
$o=$_POST['fplace'];
$p=$_POST['address'];
$q=$_POST['opinion'];
$r=$_POST['say'];
$db=mysql_connect("localhost","root","");
mysql_select_db("slambook",$db);
$sql="insert into slam values('$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
$result = mysql_query($sql);
echo "THANKYOU DUDE";
mysql_close($db);
?>
</body>
</center>
</html>

