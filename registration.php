<?php
    $hostname="localhost"; //hostname
	$username="root"; //username for database
	$password=""; //database password
	$dbname="wdl"; //database name
	//$dbnamerev="transcriptrev";
    $connect=mysqli_connect($hostname,$username,$password,$dbname);

    $roll=$_POST['roll'];
    $fname=$_POST['full_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="INSERT into user_register values('','$fname','$roll','$pass','$email')";
    $qury=mysqli_query($connect,$sql);
    if(!$qury)
    {	 
             
        echo "<script> alert(' Something went wrong');</script>";
   		header("refresh:0 ;url=index.php"); 
            
             
    }
    else{
        echo "<script language='javascript'>alert('New Student Registered Successfully');</script>";
        header("refresh:0 ;url=login.php");
    }

?>