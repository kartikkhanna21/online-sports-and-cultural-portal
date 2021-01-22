<?php
include '../connect.php';

$ename=$_POST['ename'];
$edesc=$_POST['edesc'];
$eorganizer=$_POST['eorganizer'];
$gevent=$_POST['gevent'];
if($gevent=='1'){
    $gevent=1;
}
else{
    $gevent=0;
}
$edate=$_POST['edate'];
$ldate=$_POST['ldate'];
$efee=$_POST['efee'];
$max_p=$_POST['max_p'];
$estatus=$_POST['estatus'];
if($estatus=='Participation'){
    $estatus=0;
}
else if($estatus=='Ongoing'){
    $estatus=1;
}
else{
    $estatus=2;
}

$target_dir = "../Photos/";
$filename=basename($_FILES["photo"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname=$eorganizer."_".$ename.".".$ext;
$target_file = $target_dir . $newname;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
$photo_name=$newname;

$reg="INSERT into `add_event`(event_name, event_description, event_organiser, event_date, last_date,
                                event_fee, event_image, group_event, max_participants, event_status) 
values ('$ename' ,'$edesc',  '$eorganizer' , '$edate','$ldate' ,'$efee'  , 
                 '$photo_name', '$gevent', '$max_p' ,'$estatus')";
    mysqli_query($connect, $reg);
    
    header("refresh:0 ;url=addeventpage.php"); 
?>