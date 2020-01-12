 <title>sucess</title>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$name=$_POST['username'];
$class=$_POST['class'];
$school=$_POST['school'];
$email=$_POST['email'];
$num=$_POST['num'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
    echo "Sorry a problem occured while connecting to server";

    //check for duplicates

   if($email!="" || $num!="")
   {
    $result = $conn->query("SELECT * FROM register where email='$email' or mobile='$num'");
    $dup=mysqli_num_rows($result);   
 if($dup>0)
{
 
   
    echo "sry a account already exists";


}

//register if no duplicates
else{
    //id generation
    $qw = $conn->query("SELECT * FROM register where class='$class'");
    $last_num=mysqli_num_rows($qw) + 1;
    if($last_num<10)
        $roll="00".$last_num;
    else if($last_num<100)
        $roll="0".$last_num;
    else
        $roll=$last_num;
    $id="qw20".$class.$roll;

$sql = "INSERT INTO register(id,name,class,school,email,mobile)
VALUES ('$id','$name',$class,'$school','$email',$num)";
if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Sucessfully registered your id is .$id . Please remember this');</script>";
    header("Refresh:0 , url=login.html");

    
} else {
 echo "Sry Unable to register".$id;
}

}
 }

 else{
    header("Location: register.html");   
   }

$conn->close();
?>