<?php
session_start();
include '../connect.php';

?>
<html>
<head>
    
    <title>Main Page</title>
    <link rel="stylesheet" href="aindex.css">
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
     
<section class="details-card">
    <div id="div55">
        <div class="row justify-content-center">
            <!-- <div class="col-1 col-sm-2 nopadding"></div> -->
            <div class="col-11 col-sm-10 " id="col11">
                <div class="row">
                <?php
                        $sql="SELECT * from `add_event`";
                        $setRec = mysqli_query($connect, $sql);
                        while($row = mysqli_fetch_array($setRec)){
                        $eimg="../Photos/".$row['event_image'];


                        ?>
                    <div class="col-md-6 col-lg-4 mt-2 mb-2">
                        <div class="card">
                            <div class="card-img-top">
                                <img id="eventbanner" src="<?php echo $eimg;?>" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title form-header"><?php echo $row['event_name'];?></h3>
                                <p class="card-text fontprofile">Participants of <span><?php  echo $row['event_name']; ?></span> event</p>
                                    <a href="aTable.php?event=<?php echo $row['event_name'];?>" class="btn btn-outline-danger1 fontprofile">Show</a>   
                                    <a href="ResultDeclaration.php?event=<?php echo $row['event_name'];?>" class="btn btn-outline-danger fontprofile">Declare Result </a>   
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
                    
                               
                
            </div>
            <!-- <div class="col-1 col-sm-2 nopadding"></div> -->
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
    width: 10rem;
    margin-bottom: 5px;
}

.btn-outline-danger1 {
    color: black;
    border-color: black;
    font-family: 'Inter', sans-serif;
    width: 6rem;
    margin-bottom: 5px;
}
.btn-outline-danger:hover{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
  color:white;
  border-color: black;

}
.btn-outline-danger1:hover{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
  color:white;
  border-color: black;

}


</style>
</body>
</html>


