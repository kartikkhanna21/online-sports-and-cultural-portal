<?php
include '../connect.php';
session_start();
$event=$_GET['event'];
$_SESSION['event']=$event;
?>
<!DOCTYPE html>

<html>
<head>
  <title>Result Declaration</title>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../main.css">
  <link rel="stylesheet" type="text/css" href="resultdec.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>



<section class="resultdec">
  <div id="div55">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-3 xyzxyz "></div>
        <div class="col-sm-8 col-11 col-md-8 col-lg-6 xyzxyzxyz" id="colorform">
        <div class="form-header">
                <h2>RESULT DECLARATION</h2>
        </div>
          <form action="result_store.php" method="post" enctype="multipart/form-data">
          
              <div class="form-group">
                <label for="ename" class="header-input">Event Name</label>
                <input type="text" class="form-control" id="ename" name="Ename" placeholder="Event Name" value="<?php echo $event ?>" disabled>
              </div>
              <div>
                <div class="form-group">
                  <label for="firstrank" class="header-input">First Rank</label>
                  <input type="text" class="form-control" id="first" name="first" placeholder="First Rank">
                </div>
                <div class="form-group">
                  <label for="frcerti" class="header-input">First Rank Certificate</label><br>
                  <input type="file" id="file1" name="file1" class="file" >
                </div>
              </div>
              <div>
                <div class="form-group">
                  <label for="secondrank" class="header-input">Second Rank</label>
                  <input type="text" class="form-control" id="second" name="second" placeholder="Second Rank">
                </div>
                <div class="form-group" class="header-input">
                  <label for="srcerti" class="header-input">Second Rank Certificate</label><br>
                  <input type="file" id="file2" name="file2" class="file" >
                </div>
              </div>
              <div>
                <div class="form-group" class="header-input">
                  <label for="thirdrank" class="header-input">Third Rank</label>
                  <input type="text" class="form-control" id="third" name="third" placeholder="Third Rank">
                </div>
                <div class="form-group">
                  <label for="trcerti" class="header-input">Third Rank Certificate</label><br>
                  <input type="file" id="file3" name="file3" class="file" >
                </div>
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-center"><button class="btn btn-outline-danger" type="submit" value="submit" name="Declare">Declare</button></div>
              </div>
          </form>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-3 xyzxyz"></div>
      </div>
    </div>
  </div>
</section>
<?php

include 'header.php';

?>
<style>

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