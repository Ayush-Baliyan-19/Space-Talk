<?php

if(isset($_POST['submit'])){
    $file  = $_FILES['file'];
echo $file;
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 100000){
                $fileNameNew = $userno.".".$fileActualExt;
                $fileDestination = 'pp/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: Imageuploadedsuccessfully");
            }else{
                echo "Your file size is too big!";
            }
        }else{
            echo "There was an error uploading your file!. Please try again.";
        }
    }else{
        echo "You cannot upload file of this type!";
    }
}else{
    echo "Request is not post";
}

?>