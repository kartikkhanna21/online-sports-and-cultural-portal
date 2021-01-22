<?php
include '../connect.php';
session_start();
$event_name=$_SESSION['event_name'];
$roll=$_SESSION['roll'];
$participant_id=$_SESSION['id_name'];
$email=$_SESSION['email'];
$qry="SELECT * from `user_register` where rollno ='$roll'; ";
$res=mysqli_query($connect,$qry);
$detail=mysqli_fetch_array($res);

$name=$detail['name'];

$email=$detail['email'];

$payment=$_POST['gevent'];
$email_student=$email; //ye check kar firse

if($payment=='1'){
    $payment='online';
}
else{
    $payment='offline';
}

$sql="INSERT into participation_list values(' ','$event_name','$participant_id','$roll','$name','$payment')";
$qry=mysqli_query($connect,$sql);
if(!$qry){
    echo "<script language='javascript'>alert('something went wrong');</script>";
    header("refresh:0 ;url=StudentEventpage.php");
}
/*
else{
    $Content = "your id is".$participant_id;
    $to = $email_student." ";
    //$to = "smita.patil@rait.ac.in";
    $subject = "SPORTS AND CULTURAL -  ".date("d-m-Y");
    $headers = "From: SPORTS AND CULTURAL PORTAL" .'transcript.rait@gmail.com'. "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    //$headers .="Content-Disposition: attachment; filename=\'".$attachment."'\"\r\n\r\n";

    if($to == NULL || $to=="")
        echo "<script type='text/javascript'>alert('PLEASE FILL IN CORRECT EMAIL ID.. REDIRECTING TO HOMEPAGE');</script>";
    else if(mail($to,$subject,$Content,$headers))
        echo "<script type='text/javascript'>alert('TRANSCRIPT EMAIL SENT.. REDIRECTING TO HOMEPAGE');</script>";
    else
        echo "<script type='text/javascript'>alert('TRANSCRIPT EMAIL NOT SENT.. PLEASE TRY AGAIN');</script>";

    header("refresh:0; url = index.php");
    }*/



    echo "<script language='javascript'>alert('participated in the event successfully');</script>";
    header("refresh:0 ;url=StudentEventpage.php");


?>