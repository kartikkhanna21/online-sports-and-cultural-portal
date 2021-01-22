<?php
session_start();
include ('connect.php');

$roll = $_POST['roll'];
$pass=$_POST['pass'];

$sql_check = "SELECT * FROM user_register WHERE rollno = '$roll' && password ='$pass'";
$res = mysqli_query($connect,$sql_check);

if(!$res){
    echo "<script> alert(' Something went wrong');</script>";
}


else{
    $row = mysqli_num_rows($res);
    if($row==1){
        if($roll=='admin'){
            $_SESSION['roll']=$roll;
            header("refresh:0 ;url=admin/aindex.php");
        }
        else{
        $_SESSION['roll']=$roll;
        header("refresh:0 ;url=Student/StudentEventPage.php");
        }
    }
    else{
        echo "<script language='javascript'>alert('user not found');</script>";
        header("refresh:0 ;url=login.php");
    }
}

?>