<?php

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

session_start();
$a1=$_POST['1'];
$a2=$_POST['2'];
$a3=$_POST['3'];
$a4=$_POST['4'];
$a5=$_POST['5'];
$a6=$_POST['6'];
$a7=$_POST['7'];
$a8=$_POST['8'];
$a9=$_POST['9'];
$a10=$_POST['10'];
$a11=$_POST['11'];
$a12=$_POST['12'];
$a13=$_POST['13'];
$a14=$_POST['14'];
$a15=$_POST['15'];
$a16=$_POST['16'];
$a17=$_POST['17'];
$a18=$_POST['18'];
$a19=$_POST['19'];
$a20=$_POST['20'];
$a21=$_POST['21'];
$a22=$_POST['22'];
$a23=$_POST['23'];
$a24=$_POST['24'];
$a25=$_POST['25'];
$a26=$_POST['26'];
$a27=$_POST['27'];
$a28=$_POST['28'];
$a29=$_POST['29'];
$a30=$_POST['30'];
$a31=$_POST['31'];
$a32=$_POST['32'];
$a33=$_POST['33'];
$a34=$_POST['34'];
$a35=$_POST['35'];
$a36=$_POST['36'];
$a37=$_POST['37'];
$a38=$_POST['38'];
$a39=$_POST['39'];
$a40=$_POST['40'];








$id=$_SESSION['ame'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
    header("Location: error.html");

 
 $al = "INSERT INTO ninth(id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,q26,q27,q28,q29,q30,q31,q32,q33,q34,q35,q36,q37,q38,q39,q40) VALUES ('$id','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40')";
if ($conn->query($al) == TRUE) {
    header("Location: thanks.html");
    }
    else
    	{header("Location: error.html");}



?>