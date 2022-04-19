<?php

include "conn.php";

$uname = $_GET['username'];

// checking availability of username
$sql = "SELECT * FROM `profile` WHERE uname = '$uname'";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

if($numrows>0){
    // header("Location: ?Hard_Luck...Username_is_already_occupied...");
    echo "<script type='text/JavaScript'>";
    echo "alert('Username already taken')";
    echo "</script>";
    exit(); 
}
else{
    // alert_msg('Congratulations...username is available..');
    header("Location: ?Yay!!Username_is_available....");
    exit();    
}

?>