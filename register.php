<!DOCTYPE html>
<html>
<body>
<?php
$name=$_GET['username'];
echo $name."<br>";
$lname=$_GET['lastname'];
echo $lname."<br>";
$number=$_GET['number'];
echo $number."<br>";
$triptype=$_GET['trip'];
echo $triptype."<br>";
$package=$_GET['package'];
echo $package."<br>";
foreach($_GET['food'] as $value)
{
	echo $value."<br>";
}
$place=$_GET['place'];
echo $place."<br>";
$date=$_GET['date'];
echo $date."<br>";
$adhar=$_GET['adhar'];
echo $adhar."<br>";
$message=$_GET['comment'];
echo $message."<br>";



$document="info.txt";
$file=fopen($document,'a+');
fwrite($file,$name);
fwrite($file,$lname);
fwrite($file,$number);
fwrite($file,$package);
foreach($_GET['food'] as $value)
{
	fwrite($file,$value);
}
fwrite($file,$place);
fwrite($file,$date);
fwrite($file,$adhar);
fwrite($file,$message);
?>
<a href="mailto:gabusoujanya2003@gmail.com">send mail</a>
</body>
</html>
