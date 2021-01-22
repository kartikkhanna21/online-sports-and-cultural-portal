<?php
include '../connect.php';
?>
<html>
<head>
    
    <!-- <title>Main Page</title>
    <link rel="stylesheet" href="aindex.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
</head>
<body>
<section class="side_nav">
  <nav class="main-menu ">  
    <div class="scrollbar" id="style-1">     
    <ul>
      <div class="adj_top_side-nav logo"><!-- logo --></div>
      <li>                                   
        <a href="aindex.php">
        <i class="fa fa-2x fa-home"></i>
        <span class="nav-text">Home</span>
        </a>
      </li>         
     
      <!-- <li>                                 
        <a href="aprofile.php">
        <i class="fa fa-2x fa-user"></i>
        <span class="nav-text">Profile</span>
        </a>
      </li>    -->
     
      <li>                                 
        <a href="addeventpage.php">
        <i class="fa fa-plus-square-o fa-2x"></i>
        <span class="nav-text">Add Event</span>
        </a>
      </li>
      <li>                                 
        <a href="../login.php">
        <i class="fa fa-2x fa-sign-out"></i>
        <span class="nav-text">Logout</span>
        </a>
      </li>    
    </ul>         
  </nav>
</section>     
<style>
.main-menu li>a {
    position: relative;
    width: 255px;
    display: table;
    border-collapse: collapse;
    border-spacing: 0;
    color: #8a8a8a;
    font-size: 15px;
    text-decoration: none;
    font-weight:bold;
    -webkit-transform: translateZ(0) scale(1,1);
    -webkit-transition: all .14s linear;
    transition: all .14s linear;
    font-family: 'Strait', sans-serif;
    /* border-top: 1px solid #f2f2f2; */
    text-shadow: 0px 0px 0px black;
    margin-bottom: 1.3rem;
}

.fa-2x {
    font-size: 33px;
}


</style>
</body>
</html>