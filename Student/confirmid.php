<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>confirm id</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <link rel="stylesheet" type="text/css" href="studenteventpage.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    session_start();
    $event=$_GET['event'];
    
    $_SESSION['event']=$event;
    /*$_SESSION['max']=$max;*/

    $roll=$_SESSION['roll'];
  
    $sql="SELECT * from `add_event` where event_name='$event' ";
    $setRec = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($setRec);
    $max=$row['max_participants'];
    $_SESSION['max']=$max;
    if($row['group_event']==0){
      $sql1="SELECT * from `participation_list` where rollno='$roll' and event_name='$event' ";

      $qry1=mysqli_query($connect,$sql1);

      $rows1=mysqli_num_rows($qry1);

       if($rows1>0){
        echo "<script language='javascript'>alert('you have already participated');</script>";
        header("refresh:0 ;url=StudentEventpage.php");

       }
       else{
        header("refresh:0 ;url=generateid.php?event=$event");
       }



    }


    /*$sql2="SELECT * from `participation_list` where event_name='$event' ";

    $setrec2=mysqli_query($connect,$sql2);
    
    $row2=mysqli_num_rows($setrec2);
    if($row2==''){
      $row2=0;
    }
    else{
      $row2=$row2;
    }*/
  else{

    
   $sql="SELECT * from `participation_list` where rollno='$roll' and event_name='$event' ";

   $qry=mysqli_query($connect,$sql);

   $rows=mysqli_num_rows($qry);

   if($rows>0){
    echo "<script language='javascript'>alert('you have already participated');</script>";
    header("refresh:0 ;url=StudentEventpage.php");

   }

   else{

    /*if($max==$participated){
      echo "<script language='javascript'>alert('all positions filled');</script>";
      header("refresh:0 ;url=StudentEventpage.php");
    }*/
    

 
    ?>

   
  

    <div class="container" >
    <form action="verifygid.php" method=post>
        <p>if you have a group id enter here</p>
        <input type="text" name="group_id">
        <button type="submit">Verify id</button>
    </form>
        
        <p>if not click here</p>
        <a href="generateid.php?event=<?php echo $event;?>"><button>click here</button></a>


    </div>
    <?php 
    }
  }
    ?>

</body>
</html>