<?php
include '../connect.php';
$event_name=$_GET['event'];
$sqlid="SELECT id,event_image FROM `add_event` where event_name='$event_name'";
$setRec=mysqli_query($connect, $sqlid);
$row = mysqli_fetch_array($setRec);
$id=$row['id'];
$eimg=$row['event_image'];

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
$photo_name=$eimg;
if($_FILES['photo']['name'] != ""){
$target_dir = "../Photos/";
$filename=basename($_FILES["photo"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname=$eorganizer."_".$ename.".".$ext;
$target_file = $target_dir . $newname;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
$photo_name=$newname;
}

$reg="UPDATE add_event 
 SET event_name='$ename' ,event_description='$edesc', event_organiser= '$eorganizer' , event_date='$edate',
                last_date='$ldate' ,event_fee='$efee' ,
                event_image='$photo_name',group_event= '$gevent', max_participants='$max_p' ,event_status='$estatus'
                WHERE 
                id='$id';";
    mysqli_query($connect, $reg);
    if (!mysqli_query($connect, $reg)) {
        echo("Error description: " . mysqli_error($connect));
      }
      
    header("refresh:0 ;url=aindex.php"); 
?>