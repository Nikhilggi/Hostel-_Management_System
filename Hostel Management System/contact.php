<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="home.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

	<div style="width:5% ;float: left;margin-left: 5%;">
		<a href="IMG/ ">
			<img src="IMG/" alt="" height="70px;" width="70px">
		</a>
	</div>
	<div style="width:85% ;margin:0 auto;">
		<a href="home.html" style="text-align:center ;text-decoration: none;">
			<h1><b>Hostel Management System</b></h1>
		</a>
	</div>
	<br>
	<br>
  <nav>
    <div class="topnav" id="myTopnav">
        <a href="index.html" style="text-decoration: none;">Home</a>
        <a href="room.php" style="text-decoration: none;">Room</a>
        <a href="mess.php" style="text-decoration: none;">Mess</a>
        <a href="sports.php" style="text-decoration: none;">Sports Equipment</a>
        <a href="contact.php" style="text-decoration: none;">Contact Us</a>
        <a href="About.html" style="text-decoration: none;">About</a>
        <a href="log_in.php" style="text-decoration: none;"> Log In</a>
        <a href="register_user.php" style="text-decoration: none;"> Sing Up</a>
    </div>
</nav> 
<br><br>
<?php
if(isset($_POST["submit"]))
 {
  $fullname=$_POST["fullname"];
  $number=$_POST["number"]; 
  $email=$_POST["email"];
  $message=$_POST["message"];
  $con=mysqli_connect('localhost','root','','hostel_management_suraj'); 
    $qry="INSERT INTO contact (`fullname`,`number`,`email`,`message`)
     VALUES ('$fullname','$number','$email','$message');";
 $result=mysqli_query($con,$qry);
   if($result==true)
   {
      echo '<div class="alert alert-success">
<strong>Success!</strong>Data Fill Successfully.
</div>';
   }
   else
   {
      echo '<div class="alert alert-danger">
<strong>Success!</strong>Data Not Fill
</div>';
   }
   mysqli_close($con);
}
 ?>
 

    <h3>Contact Us</h3>
<div class="container" style="background-color: chartreuse;">
    <div class="row">
        

    <form method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname"  placeholder="Your name.."  required name="fullname">
  
       
        <label for="lname">Phone Number</label>
        <input type="text" id="lname"  required name="number">
        <label for="lname">Email</label>
        <input type="text" id="lname"  placeholder="abcd@gmail.com"required name="email">
    
        <label for="subject">Subject</label>
        <textarea id="subject"  placeholder="Write something.." required name="message"style="height:200px"></textarea>
    
        <input type="submit" value="Submit" name="submit">
      </form>


    
  
    
</div>
<br><br>
<hr>
    <center><p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Nikhil !8(-8)</p></center><br><br><br>
</body>
</html>
