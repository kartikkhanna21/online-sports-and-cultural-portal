<?php
include '../connect.php';

?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Event Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
<section class="smainevent">
  <div id="div55">
<div class="container">
<?php
$sql="SELECT * from `add_event`";
$setRec = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($setRec)){
$eimg="../Photos/".$row['event_image'];

$event=$row['event_name'];
$_SESSION['event_name']=$event;
$id=$row['id'];
$_SESSION['id_name']=$id;
?>

    
      <div id="indivevent">
        <div class="row">
          <div class="col-2 col-md-3"></div>
          <div class="col-8 col-md-6">
            <div class="card cardwidth" ><!-- style="width: 18rem;" -->
              <img src="<?php echo $eimg;?>" class="card-img-top img-fluid rounded" id="eventbanner" alt="Eventposter">
              <div class="card-body">
                <h5 class="card-title crdmarg ch5 fontprofile text-center form-header"><span name="eventname"><b><?php echo $row['event_name'];?></b><span></h5>
                <p class="card-text crdmarg fontprofile"><span name="description"><?php echo $row['event_description'];?></span></p>
                <p class="card-text crdmarg fontprofile"><span name="eventdate"><b>Date of event: </b> <?php echo $row['event_date'];?></span></p>
                <p class="card-text crdmarg fontprofile"><span name="eventdate"><b>Maximum number of participants: </b><?php echo $row['max_participants'];?></span></p>
                <p class="card-text crdmarg fontprofile"><span name="fee"><b>Participation Fees: </b><?php echo $row['event_fee'];?></span></p>
                <div class="row">
                  <div class="col-2 col-sm-3"></div>
                  <div class="col-8 col-sm-6">  
                  <?php
                    $ename=$row['event_name'];
                    $sql1="SELECT * from `add_event` where event_name='$ename'";
                    $setRec1 = mysqli_query($connect, $sql1);
                    $row1 = mysqli_fetch_array($setRec1);
                    $status=$row1['event_status'];

                    if($status==0){
                        // $_SESSION['event_name']= $ename;
                        // $_SESSION['id_name'] = $row1['id'];
                        ?>
                      <a href="confirmid.php?event=<?php echo $ename?>"   class="btn btn-outline-danger fontprofile btnfix">PARTICIPATE</a>';
                    
                    <?php
                    
                     }
                    else if($status==1){
                        echo '<a href="#" class="btn btn-outline-danger fontprofile btnfix">ONGOING</a>';
                    }
                    else{
                      echo '<a href="#" class="btn btn-outline-danger fontprofile btnfix">COMPLETED</a><br><br>
                            
                      ';
                    }
                ?>
                
                  </div>
                  <div class="col-2 col-sm-3"></div>
                </div>
              </div>
            </div>
           
          </div>
          <div class="col-2 col-md-3"></div>
        </div>
      </div>
      <?php
      }
      ?>
</section>
<?php
include 'header.php';
?>


<style type="text/css">

.file{
  font-family: 'Inter', sans-serif;
}
.form-header{
    border-radius: 12px;
    padding: 10px 20px 10px;
    text-align: center;
    background-color: #2d3436;
    background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
    margin-bottom: 1rem;
    color: white;
    font-family: 'Fjalla One', sans-serif;
}

.fontprofile{
  /*font-family: 'Inter', sans-serif;*/
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
}

.header-input{
  font-size: 14px;
  font-family: 'Inter', sans-serif;
}

.btn-outline-danger {
    color: black;
    border-color: black;
    font-family: 'Inter', sans-serif;
    width: 12rem;
}

.btn-outline-danger:hover{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
  color:white;
  border-color: black;

}

  
</style>
</body>
</html>
