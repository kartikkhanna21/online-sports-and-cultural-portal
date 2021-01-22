<?php
include '../connect.php';
session_start();
$gid=$_POST['group_id'];
$event=$_SESSION['event'];
$max=$_SESSION['max'];
$sql="SELECT * from `participation_list` where 	participant_id='$gid' and event_name='$event' ";
$res=mysqli_query($connect,$sql);
$rows=mysqli_num_rows($res);
if($rows==0){
    echo "<script language='javascript'>alert('No such group id found');</script>";
    header("refresh:0 ;url=StudentEventPage.php");    
}
else{
    if($rows==$max){
        echo "<script language='javascript'>alert('all positions filled for this id');</script>";
        header("refresh:0 ;url=StudentEventPage.php");     
    }
    else{
        $_SESSION['id_name']=$gid;
        $_SESSION['event_name']=$event;
        echo "<script language='javascript'>alert('your id has been verified');</script>";
        header("refresh:0 ;url=participationform.php");        
    }
}
?>
