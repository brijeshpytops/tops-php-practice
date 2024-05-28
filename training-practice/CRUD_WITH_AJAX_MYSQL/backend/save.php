<?php
require 'dbConnection.php';

if (count($_POST) > 0){
    if($_POST['type'] == 1){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];

        $sql = "INSERT INTO users (first_name, last_name, email, mobile) VALUES ('$fname', '$lname', '$email', '$mobile')";

        if(mysqli_query($conn, $sql)){
            echo json_encode(array("statusCode"=>200));
        }else{
            echo json_encode(array("statusCode"=>500, "error"=>mysqli_error($conn))); 
        }
        mysqli_close($conn);
    }
}
?>
