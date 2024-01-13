<?php
print "hello";
$connect=mysqli_connect("localhost","root"," ","test");
if($connect)
{
 echo "Connection established"."<br>";
}
else
{
 echo "Error:".mysqli_error($connect)."<br>";
}
$empid=$_POST['eid'];
$ename=$_POST['name'];
$mid=$_POST['mid'];
$doj=$_POST['doj'];
$city=$_POST['city'];
$project=$_POST['prjt'];
$salary=$_POST['salary'];

$query="create table Employee(EmpId varchar(5),Name varchar(30),ManagerId varchar(5),Date Of Joining date,City varchar(15),Project varchar(3),Salary varchar(8));";
if(mysqli_query($connect,$query))
{
	echo "Table Created" ."<br>";
}
else
{
	echo "Error:".$mysqli_error($connect) ."<br>";
}

$query1="INSERT INTO Employee VALUES('$empid','$ename','$mpid','$doj','$city','$project','$salary');";
if(mysqli_query($connect,$query1))
{
	echo "record inserted" ."<br>";
}
else
{
	echo "Error:".$mysqli_error($connect)."<br>";
}

$query2="SELECT * FROM Employee;";
$check=mysqli_query($connect,$query2)
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
	echo $row['EmpId']."<br>".$row['Name']."<br>".$row['ManagerId']."<br>".$row['Date Of Joining']."<br>".$row['City']."<br>".$row['Project']."<br>".$row['Salary']."<br>";
}
else 
{
	echo "no records";
}
?>
