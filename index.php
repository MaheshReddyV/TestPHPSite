<?php
$servername = "10.10.80.30";
$username = "root";
$password = "Ro$ot!2k16";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'test');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
if(isset($_POST)){
    //print_r($_POST);
    $str = "insert into testuser(name)values('".$_POST['UserName']."')";
    $res = mysqli_query($conn,$str);
    $l_id = last_insert_id($conn);
    if($l_id)
        echo "sucess".$l_id;
    else 
        echo $str;
   

}
?>
<html>
<body>
    <form method="post">
<input type="text" name="Username" placeholder="Username"/><br/>
<input type="text" name="Email" placeholder="Email"/><br/>
<input type="text" name="MobileNumber" placeholder="MobileNumber"/><br/>
<input type="submit" name="Sumbit" value="Submit"/><br/>
        </form>
<?php
echo "provide your information and submit";
?>

</body>
</html>
