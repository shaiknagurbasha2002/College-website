<?php
$usr=$_POST['USER'];
$em=$_POST['EMAIL'];
$pwd=$_POST['PASSWORD'];
// echo $usr.$em.$pwd;

//mysql procedural
$con=mysqli_connect("localhost","root","","test");
if(!$con)
{die("connection not established"+mysqli_connect_error());}
else{

$qr="INSERT INTO students (sno, user, email, password) VALUES (NULL, '".$usr."', '".$em."', '".$pwd."'); ";
// echo $qr;
$row=mysqli_query($con,$qr);
// echo $row;
if($row==1)
echo "<script>alert('Course registration done');window.location='login.html';</script>";
}

?>
