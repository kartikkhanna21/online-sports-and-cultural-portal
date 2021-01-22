<?php
include '../connect.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD EVENT PAGE</title>
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
        <div class="col-sm-2 col-md-2 col-lg-3 xyzxyz "></div>
        <div class="col-sm-8 col-11 col-md-8 col-lg-6 xyzxyzxyz" id="colorform">
          <div class="d-flex justify-content-center formtop form-header"><h2>ADD EVENT Details</h2></div>
          <form action="add_event.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="eventname" class="header-input" >Event Name</label>
                <input type="text" class="form-control" name="ename" id="eventname" placeholder="Event Name">
              </div>
              <div class="form-group">
                <label for="eventdesc" class="header-input" >Event Desc</label>
                <textarea name="edesc" class="form-control" rows="7" cols="30" id="eventdesc" placeholder="Event Description"></textarea>
              </div>
              <div class="form-group">
                <label for="eorg" class="header-input" >Event ORGANIZER</label>
                <input type="text" class="form-control" name="eorganizer" id="eorg" placeholder="Event Organizer">
              </div>
              <div class="form-group">
                <label class="header-input" >Group Event</label>
                <input type="radio" id="yes" name="gevent" value="1">
                <label for="yes" class="header-input" >Yes</label>
                <input type="radio" id="no" name="gevent" value="0">
                <label for="no" class="header-input" >No</label><br>
              </div>
              <div class="form-group">
                <label for="emax" class="header-input" >Maximum participants</label>
                <input type="text" class="form-control" name="max_p" id="emax" placeholder="Maximum Participants">
              </div>
              <div class="form-group">
                <label for="edate" class="header-input" >Date of Event</label>
                <input type="date" class="form-control" name="edate" id="edate" placeholder="Date of Event">
              </div>
              <div class="form-group">
                <label for="eldate" class="header-input" >Last day to participate</label>
                <input type="date" class="form-control" name="ldate" id="eldate" placeholder="Date of Event">
              </div>
              <div class="form-group">
                <label for="efee" class="header-input" >Fee</label>
                <input type="text" class="form-control" name="efee" id="efee" placeholder="Event Fee">
              </div>

              <div class="form-group">
                <label for="img" class="header-input" >Banner</label><br>
                <input type="file" id="img" name="photo" accept="image/x-png,image/jpeg" >
                
              </div>
              <!-- float-items elem-size -->
              <div class="form-group ">
                <div class="dropdown">
                  <label for="status" class="header-input" > Event Status</label>
                  <select name="estatus" id="status" class="form-control year-drop-2 " value="ffff">
                  
                  <datalist id="status">
                  <option class="dropdown-item" value='Participation' class="header-input" >Participation</option>
                  <option class="dropdown-item" value='Ongoing' class="header-input" >Ongoing</option>
                  <option class="dropdown-item" value='Completed' class="header-input" >Completed</option>
                  </datalist>    
                  </select> 
                </div>      
              </div>
              
              <div class="form-group">
                <div class="d-flex justify-content-center"><button class="btn btn-outline-danger" type="submit" value="submit" name="addevent">ADD EVENT</button></div>
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
<!-- 
  after share
<div class="addthis_default_style addthis_32x32_style">
<div style="position:absolute;
 margin-left: 56px;top:3px;"> 
 Event name
 Description
 location
 date
 fee
 img

--> 