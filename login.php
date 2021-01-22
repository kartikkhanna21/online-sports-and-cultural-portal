<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
  
    <!-- link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="D:\new\wdl\SACP\main.css">
    <meta charset="utf-8"> --> 
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Login</title>

<link rel="stylesheet" href="login.css">
</head>
<body>

    <div >
      <div class="form-box" id="particles-js" style="height: 80%;margin-top: 3rem;">
         <div class="button-box">
            <div id="btn"></div>
             <button  class="toggle-btn" onclick="login()"  id="log-in">Log In</button>
             <button  class="toggle-btn" onclick="register()"  >Register</button>
        </div>
        <!--<div class="social-icons">
            <img src="fb.png">
            <img src="tw.png">
            <img src="gp.png">
        </div>!-->
          <form  action="validation.php" method="POST" id="login" class="input-group" style="top: 150px;">
          <input type="text" class="input-field" placeholder="Roll no" name="roll" required>
              <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>

              <button type="submit" class="submit-btn" style="margin-top: 3rem;">Log In</button>
          </form>
          <form action="registration.php" id="register" method="POST" class="input-group" style="top: 150px;">
              <input type="text" class="input-field" placeholder="Enter Full Name" name="full_name" required>
              <input type="text" class="input-field" placeholder="Enter Roll-No" name="roll" required>
              <input type="email" class="input-field" placeholder="Email Id" name="email" required>
              <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
              <input type="password" class="input-field" placeholder="Confirm Enter Password" required>
              
              <button type="submit" class="submit-btn"  style="margin-top: 2rem;">Register</button>
          </form>
        </div>
    </div>
    <script>
       
        var x = document.getElementById("login");
        var y = document.getElementById("register"); 
        var z = document.getElementById("btn");
        
        function register(){
           
            x.style.left =  "-400px";
           
            y.style.left =  "50px";
            z.style.left =  "110px";
        }
        function login(){
            x.style.left =  "50px";
            
            y.style.left =  "450px";
            z.style.left =  "0";
        }
        
    </script>
</body>
</html>