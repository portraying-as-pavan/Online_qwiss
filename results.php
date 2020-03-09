<!DOCTYPE html>
<html>
<head>
<style>
   
    
table, th, td {
    border-collapse:collapse;
    border: 1px solid black;
    width:50%;
    height:50%;
    padding: 15px;
  text-align: right;
}
tr:hover {background-color: #f0bd30;}
#main{

}

</style>
<title>Results</title>
</head>
<body>
    <div>
<div id="upper">
    <a href="results.html">Check another result</a>
</div>
<div id="main">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$id=$_POST['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){ echo "Server problem";}
else{
$result=$conn->query("Select * from results where id='$id'");

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Class</th><th>School</th><th>Rank</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" .$row["name"]."</td><td>" .$row["class"]."</td><td>" .$row["school"]. "</td><td>" . $row["Rank"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No Results found, Try again!";
}
}
$conn->close();

?>
</div>
</body>
</html>