<?php 
include '../connect.php';

session_start();

$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$event=$_SESSION['event'];
$n=$_FILES["file1"]["name"];

if (isset($_POST['Declare'])) { 
 
$target_dir = "../Docs/";
$filename=basename($_FILES["file1"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname1="_".$event."_".$first.".".$ext;
$target_file = $target_dir . $newname1 ;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);
$docname1=$newname1;

$target_dir = "../Docs/";
$filename=basename($_FILES["file2"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname2="_".$event."_".$first.".".$ext;
$target_file = $target_dir . $newname2 ;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
$docname2=$newname2;

$target_dir = "../Docs/";
$filename=basename($_FILES["file3"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname3="_".$event."_".$first.".".$ext;
$target_file = $target_dir . $newname3 ;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file);
$docname3=$newname3;

$sql="INSERT into result values(' ','$event','$first','$second','$third','$docname1','$docname2','$docname3')";
$qry=mysqli_query($connect,$sql);

if(!$qry){
    echo "<script> alert(' Something went wrong');</script>";
    if (!mysqli_query($connect,$sql)) {
        echo("Error description: " . mysqli_error($connect));
      }
}
else{
    echo "<script> alert(' result declared successfully');</script>";

    $sql="SELECT rollno from participation_list where participant_id = '$first';";
    $qry=mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($qry);
    $roll=$row['rollno'];
    $sql="INSERT into certificate values(' ','$roll','$event','$docname1')";
    $qry=mysqli_query($connect,$sql);

    $sql="SELECT rollno from participation_list where participant_id = '$second';";
    $qry=mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($qry);
    $roll=$row['rollno'];
    $sql="INSERT into certificate values(' ','$roll','$event','$docname2')";
    $qry=mysqli_query($connect,$sql);

    $sql="SELECT rollno from participation_list where participant_id = '$third';";
    $qry=mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($qry);
    $roll=$row['rollno'];
    $sql="INSERT into certificate values(' ','$roll','$event','$docname3')";
    $qry=mysqli_query($connect,$sql);
    
    $sql="UPDATE add_event set event_status='2' where event_name='$event' ;";
    $qry=mysqli_query($connect,$sql);
}


header("url:aindex.php");
}


?>