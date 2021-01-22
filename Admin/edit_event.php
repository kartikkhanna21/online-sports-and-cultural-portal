<?php
include '../connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD EVENT PAGE</title>
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
                        $event_name=$_GET['event'];
                        $sql="SELECT * from `add_event` where event_name='$event_name'";
                        $setRec = mysqli_query($connect, $sql);
                        $row = mysqli_fetch_array($setRec);
                        $eimg="../Photos/".$row['event_image'];
                        $estatus=$row['event_status'];
                        $_SESSION['event_img']=$eimg;
                        if($estatus==0){
                            $estatus='Participation';
                        }
                        else if($estatus==1){
                            $estatus='Ongoing';
                        }
                        else{
                            $estatus='Completed';
                        }
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
          <div class="d-flex justify-content-center formtop">EDIT EVENT DETAILS</div>
          <form action="update_event.php?event=<?php echo $event_name;?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="ename" placeholder="Event Name" value="<?php echo $row['event_name'];?>">
              </div>
              <div class="form-group">
                <textarea name="edesc" class="form-control" rows="10" cols="30" placeholder="Event Description"><?php echo $row['event_description'];?>
                </textarea>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="eorganizer" placeholder="Event Organizer" value="<?php echo $row['event_organiser'];?>">
              </div>
              <div class="form-group">
                <label class="header-input" >Group Event</label>
                <br>    
               <?php 
               echo "
                <input type='radio'method='post' id='Yes'  value=1 name='gevent'".(($row['group_event']==1)?'checked':"").">
                <label for='Yes'>Yes</label>
                <input type='radio' method='post' id='No'  value=0 name='gevent'".(($row['group_event']==0)?'checked':"").">
                <label for='No'>No</label>
                ";
                ?>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="max_p" placeholder="Maximum Participants"value="<?php echo $row['max_participants'];?>">
            </div>
              <div class="form-group">
              <label>Date of Event</label>
                <input type="date" class="form-control" name="edate" placeholder="DD-MM-YY" value="<?php echo $row['event_date'];?>">
              </div>
              <label>Last day to participate</label>
              <div class="form-group">
                <input type="date" class="form-control" name="ldate" placeholder="DD-MM-YY" value="<?php echo $row['last_date'];?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="efee" placeholder="Event Fee" value="<?php echo $row['event_fee'];?>">
              </div>
              <div class="form-group">
                <label for="img">Banner</label><br>
                <input type="file" id="img" name="photo" accept="image/x-png,image/jpeg" >
              </div>
              <div class="form-group float-items elem-size">

            <label >Event Status</label>

            <select name="estatus"  class="form-control" >
            <option value="<?php echo $estatus;?>" selected  hidden><?php echo $estatus;?></option>
            
            <option value='Participation'>Participation</option>
            <option value='Ongoing'>Ongoing</option>
            <option value='Completed'>Completed</option>
            
            </select>          
            </div>

              <div class="form-group">
                <div class="d-flex justify-content-center"><button class="btn btn-primary" type="submit" value="submit" name="addevent">UPDATE</button></div>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</section>
 
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