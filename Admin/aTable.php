<?php
session_start();
include '../connect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin TABLES</title>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
  <!-- font for table text -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- font for table text end -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">

    .ourtables{
        padding-top: 3rem;
    }
    .row{
      margin-left: 0;
      margin-right: 0;
    }

  </style>

</head>
<body>
<?php
  $event_name=$_GET['event'];
  
?>

  
<section class="ourtables text-center">
  <div>
    <form action="edit_event.php?event=<?php echo $event_name;?>" method="post">
      <button class="btn btn-outline-danger">Edit Event Details</button>
    </form>
  </div>  
  <br>
  <div id="div55 "  style="margin-left: 55px;">
    <div class="row ">
      <div class="col-1 xyzcol1"></div>
      <div class="col-10">
          <table class="table table-bordered table-hover table-light ">
            <thead>
              <tr>
                <th class="table-primary fontprofile" scope="col">Participant ID</th>
                <th class="table-primary fontprofile" scope="col">Roll No</th>
                <th class="table-primary fontprofile" scope="col">Name</th>

              </tr>
            </thead>
            <tbody>
              
                <?php
                $sql="SELECT * FROM `participation_list` WHERE event_name='$event_name'";
                $setRec = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($setRec)){
                ?>
                <tr>
                <td class="fontprofile"><?php echo $row['participant_id'];?></td>
                <td class="fontprofile"><?php echo $row['rollno'];?></td>
                <td class="fontprofile"><?php echo $row['name'];?></td>
                </tr>
                <?php
                }
                ?>  
              
            </tbody>
          </table>
      </div>
      <div class="col-1 xyzcol1"></div>
    </div>
  </div>
</section>
<?php

include 'header.php';

?>
</body>
<style type="text/css">


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

.fontprofile{
  /*font-family: 'Inter', sans-serif;*/
  font-family: 'Montserrat', sans-serif;
}

@media only screen and (max-width: 330px) {

  .xyzcol1{
    display: none;
    max-width: 4.44%;
  }
  
}

    
</style>
</html>
</html>