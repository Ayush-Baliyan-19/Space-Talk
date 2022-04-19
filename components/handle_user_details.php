<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "conn.php";
    $username = $_POST["username"];
    $desc = $_POST['desc'];

    $check_username_query = "SELECT * FROM `profile` WHERE uname = '$username'";
    $result = mysqli_query($conn , $check_username_query);
    $numrows = mysqli_num_rows($result);
    if(numrows == 0){
        $data_insertion = "INSERT INTO `profile` (`uname`,`desc`) VALUES ('$username','$desc')";
        $data_result = mysqli_query($conn, $data_insertion);
        if($data_result){
            header("Location: ../main.php?Signed_up_successfully...");
            exit();
        }
        else{
            header("Location: ?Error_is_signing_up!!!");
            exit();
        }
    }
    else{
        header("Location: ?Username_is_not_available");
        exit();
    }
}

?>