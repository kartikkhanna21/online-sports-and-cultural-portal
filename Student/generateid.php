<?php
include '../connect.php';
    session_start();
    $id=array();
    $event=$_GET['event'];
    $id=str_split($event);
    $id_ini=$id[0].$id[1];

    $code_qry="SELECT id FROM `add_event` where event_name='$event' ";
    $run=mysqli_query($connect,$code_qry);
    $event_id=mysqli_fetch_array($run);






    $qry="SELECT DiSTINCT participant_id FROM `participation_list` where event_name='$event' ";
    $res=mysqli_query($connect,$qry);
    $rows=mysqli_num_rows($res);
    if($rows==0){
        $str1=strval($event_id['id']);
        $id_name=$str1.$id_ini.'1';
    }
    if($rows==1){
        $str1=strval($event_id['id']);
        $id_name=$str1.$id_ini.'2';
    }
    else{
        $str1=strval($event_id['id']);
        $rows=$rows+1;
        $str2=strval($rows);
        $id_name=$str1.$id_ini.$str2;
    }

    $_SESSION['event_name']=$event;

    $_SESSION['id_name']=$id_name;
    header("refresh:0 ;url=participationform.php");

    ?>