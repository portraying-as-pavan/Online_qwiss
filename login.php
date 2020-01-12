<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$id=$_POST['username'];
$code=$_POST['pwd'];
$_SESSION['ame']=$id;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
    header("Location: error.html");

    $sresult = $conn->query("SELECT * FROM schlcodes where code='$code' ");
    $scheck=mysqli_num_rows($sresult); 

    if($scheck>0)
    {
    $result = $conn->query("SELECT * FROM register where id='$id' ");
    $dup=mysqli_num_rows($result);   
 if($dup>0)
{
 	
 	$log = $conn->query("SELECT * FROM login where id='$id' ");
 		$du=mysqli_num_rows($log);
 		$cl=substr($id,4,2);
 		if($du==0)
 		{

			$sql = "INSERT INTO login(id,std,code) VALUES ('$id','$cl','$code')";
			$l=$conn->query($sql) ;
					
 		}

 		
 		if($cl=="06") header("Location: online6/onlineexam6.html");
 		else if($cl=="07") header("Location: online7/onlineexam7.html");
        else if($cl=="08") header("Location: online8/onlineexam8.html");
        else if($cl=="09") header("Location: online9/onlineexam9.html");
        else if($cl=="10") header("Location: online10/onlineexam10.html");
        else if($cl=="11") header("Location: online11/onlineexam11.html");
        else if($cl=="12") header("Location: online12/onlineexam12.html");
        else header("Location: error.html");	
 }
 else
 	{
 			 echo "<script>alert('Incorrect UserId if you havn't registered ,Please Register first!');</script>";
    header("Refresh:0 , url=login.html");
 		

 	}
}
else
 echo "<script>alert('Incorrect School Code');</script>";
    header("Refresh:0 , url=login.html");

?>