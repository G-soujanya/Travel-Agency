<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['pass'];
$password1=$_POST['pass1'];
$connection=mysqli_connect("localhost","root","","account");
if($connection)
{
	echo "connection established"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}
$query="CREATE TABLE details(name VARCHAR(15) NOT NULL,mailid VARCHAR(35),password VARCHAR(10),password1 VARCHAR(10));";
/*if(mysqli_query($connection,$query))
{
	echo "table created";
}
else
{
	echo "error:".mysqli_error($connection);
}*/
$query1="INSERT INTO details VALUES('$name','$mail','$password','$password1');";
if(mysqli_query($connection,$query1))
{
	echo "values inserted";
}
else
{
	echo "error:".mysqli_error($connection);
}
$query3="SELECT * FROM details;";
$check=mysqli_query($connection,$query3);
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
	{
		echo ($row['name']."<br>".$row['mailid']."<br>".$row['password']."<br>".$row['password1']."<br>");
	}
}
else
{
	echo "no records";
}
?>

