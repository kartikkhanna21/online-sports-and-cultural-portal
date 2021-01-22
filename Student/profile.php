<?php
include '../connect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>STUDENT EVENT PAGE</title>
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
  <link rel="stylesheet" type="text/css" href="sprofile.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

    <?php
    session_start();
    $roll=$_SESSION['roll'];
        $sql="SELECT * from `user_register` where rollno='$roll'";
        $setRec = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($setRec);

    ?>
    <br><br>
<section>
  <div id="div55">
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-md-2 col-lg-3 xyzxyz "></div>
          <div class="col-sm-8 col-11 col-md-8 col-lg-6 xyzxyzxyz" id="colorform">
            <div class="d-flex justify-content-center pformtop form-header">Profile</div>
            <form action="add_event.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="row form-group">
                  <div class="col-4 nre"><span class="nre">Name:</span></div>
                  <div class="col-8 nreinput"><input type="text" class="form-control" name="studentname" id="studentname" placeholder="Student Name" value="<?php echo $row['name'];?>" disabled=""></div>
                </div>
                <div class="row form-group">
                  <div class="col-4 nre"><span class="nre">Roll No:</span></div>
                  <div class="col-8 nreinput"><input type="text" class="form-control" name="studentrollno" id="studentrollno" placeholder="Student Roll No" value="<?php echo $row['rollno'];?>" disabled=""></div>
                </div>
                <div class="row form-group">
                  <div class="col-4 nre"><span class="nre">Email id:</span></div>
                  <div class="col-8 nreinput"><input type="text" class="form-control" name="studentemailid" id="studentemailid" placeholder="Student Email ID" value="<?php echo $row['email'];?>" disabled=""></div>
                </div>


                

              </div>
            </form>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-3 xyzxyz "></div>
        </div>  

                



</section>      
      
        



<section class="ourtables text-center">
  <div id="div55 mt-5">
    <div class="row " id="profiletablerow">
      <div class="col-1"></div>
      <div class="col-10">
          <table class="table table-bordered table-hover table-light ">
            <thead>
              <tr>
                <th class="table-primary fontprofile" scope="col">Participant ID</th>
                <th class="table-primary fontprofile" scope="col">Event Name</th>
                <th class="table-primary fontprofile" scope="col">STATUS</th>
                <th class="table-primary fontprofile" scope="col">Certificate Download</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    
                   $sql="SELECT * from `participation_list` where rollno='$roll' ";
                   $setRec = mysqli_query($connect, $sql);
                   while($row = mysqli_fetch_array($setRec)){
                ?>
              <tr>
                <td class="fontprofile" ><?php echo $row['participant_id'];?></td>
                <td class="fontprofile" ><?php echo $row['event_name'];?></td>

                <?php
                    $ename=$row['event_name'];
                    $sql1="SELECT * from `add_event` where event_name='$ename'";
                    $setRec1 = mysqli_query($connect, $sql1);
                    $row1 = mysqli_fetch_array($setRec1);
                    $status=$row1['event_status'];
                    if($status==0){
                        $estat='Participated';
                    }
                    else if($status==1){
                        $estat='Ongoing';
                    }
                    else{
                        $estat='Completed';
                    }
                ?>

                <td class="fontprofile" ><?php echo $estat;?></td>

                <?php
                    $ename=$row['event_name'];
                    $sql1="SELECT * from `certificate` where event_name='$ename' AND rollno='$roll';";
                    $setRec1 = mysqli_query($connect, $sql1);            
                    if (!mysqli_query($connect, $sql1)) {
                        echo("Error description: " . mysqli_error($connect));
                      }
                    $rowcount=mysqli_num_rows($setRec1);
                    if($rowcount!=0){
                    $row1 = mysqli_fetch_array($setRec1);
                    $doc=$row1['certificate'];
                    ?>
                        <td class="fontprofile" ><a href="download.php?file=<?php echo $doc?>"><i class="fa fa-download fa-2x"></i></a></td>
                    <?php                    
                    }
                    
                    else {?>

                    <td class="fontprofile" >-</td>
                        
                    <?php
                    }
                ?>              

              </tr>
                <?php
                
                    }
                    
                ?>
              
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
<?php 
include 'header.php';
?>


    </div>

<style type="text/css">
  
.form-control:disabled{
  color: black;
}

.pformtop{
  font-size: 2rem;
  /*margin: 1rem 0rem;*/
  font-weight: 700;

}

span.nre {
  font-size: 1.5rem;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;

}

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


.fontprofile{
  /*font-family: 'Inter', sans-serif;*/
  font-family: 'Montserrat', sans-serif;
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

#profiletablerow{

  margin-left: 1.5rem!important;

}

@media only screen and (max-width: 576px) {
  body{
    font-size: 0.75rem;
  }
  span.nre {
    font-size: 1rem;
    font-weight: 700;
    font-family: 'Fjalla One', sans-serif;
  }

  #profiletablerow{

    margin-left: 1.5rem!important;

  }
  
}

@media only screen and (max-width: 399px) {
  body{
    font-size: 0.625rem;
  }
  span.nre {
    font-size: 0.75rem;
    font-weight: 700;
    font-family: 'Fjalla One', sans-serif;
  }

  #profiletablerow{

    margin-left: 1.5rem!important;

  }
  
}

@media only screen and (max-width: 330px) {
  body{
    font-size: 0.5rem;
  }
  span.nre {
    font-size: 0.75rem;
    font-weight: 700;
    font-family: 'Fjalla One', sans-serif;
  }

  #profiletablerow{

    margin-left: 0 !important;
  }
  
}




</style>

</body>
</html>