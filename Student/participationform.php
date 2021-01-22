<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PARTICIPATION FORM</title>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<?php
session_start();
$event_name=$_SESSION['event_name'];
$roll=$_SESSION['roll'];

$id_name=$_SESSION['id_name'];


$qry="SELECT * from `user_register` where rollno ='$roll'; ";
$res=mysqli_query($connect,$qry);
if (!mysqli_query($connect,$qry)) {
  echo("Error description: " . mysqli_error($connect));
}



$detail=mysqli_fetch_array($res);

$_SESSION['email']=$detail['email'];

?>



<section class="addeventform">
  <div id="div55">
    <div class="container">
      <!-- <div class="row">
        <div class="col-2 col-md-3">
        </div>
        <div class="col-8 col-md-6 formtop">ADD EVENT Details</div>
        <div class="col-2 col-md-3">
        </div>
      </div> -->
      <div class="row">
        <div class="col-2 col-md-3"></div>
        <div class="col-8 col-md-6" id="colorform">
          <div class="d-flex justify-content-center formtop form-header">Participation Form </div>
          <form action="add_participation_details.php" method="post">
              <div class="form-group">
                <label for="eventname" class="header-input" >Event Name</label>
                <input type="text" class="form-control" id="eventname" placeholder="Event Name" value="<?php echo $event_name;?>"  name="ename" disabled>
              </div>
              <div class="form-group">
                <label for="parname" class="header-input" >Participant Name</label>
                <input type="text" class="form-control" id="parname" placeholder="Participant Name " value="<?php echo $detail['name'];?>"  name="participantname" disabled>
              </div>
              <div class="form-group">
                <label for="prollno" class="header-input" >Roll No</label>
                <input type="text" class="form-control" id="prollno" name="rollno" placeholder="Roll No" value="<?php echo $roll;?>"  disabled >
              </div>

              <div class="form-group">
                <label for="eventido" class="header-input" >Event Id</label>
                <input type="text" class="form-control" id="eventido" name="participant_id" placeholder="event id" value="<?php echo $id_name;?>" disabled>
              </div>

              <div class="form-group">
                <label for="pemailido" class="header-input" >Email ID</label>
                <input type="text" class="form-control" name="pemailido" placeholder="email" value="<?php echo $detail['email'];?>" disabled>
              </div>

              <div class="form-group">
                <label  class="header-input" >Mode of payment</label><br>
                
                <input type="radio" id="online" name="gevent" value="1">
                <label for="yes" class="header-input" >online payment</label>
                <input type="radio" id="onday" name="gevent" value="0">
                <label for="no" class="header-input" >on day payment</label><br>
              </div>
            
              <div class="form-group">
                <div class="d-flex justify-content-center"><button class="btn btn-outline-danger" type="submit" value="submit" name="participate_submit">Participate</button></div>
              </div>
          </form>
        </div>
        <div class="col-2 col-md-3"></div>
      </div>
    </div>
  </div>
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
    padding: 20px 20px 10px;
    text-align: center;
    background-color: #2d3436;
    background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
    margin-bottom: 1rem;
    color: white;
    font-family: 'Fjalla One', sans-serif;
}


.header-input{
  font-size: 14px;
  font-family: 'Inter', sans-serif;
}

.btn-outline-danger {
    color: black;
    border-color: black;
    font-family: 'Inter', sans-serif;
    width: 8rem;
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
