<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="home.css">
    <title>Mess</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        .container1 {
            max-width: 900px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container1 .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container1 .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }

            .log_in {
                text-align: center;
                margin top: 500px;
            }
        }
    </style>
</head>

<body>

    </head>

    <body>
        <div style="width:5% ;float: left;margin-left: 5%;">
            <a href="IMG/global logo.jpg ">
                <img src="IMG/global logo.jpg" alt="" height="70px;" width="70px">
            </a>
        </div>
        <div style="width:85% ;margin:0 auto;">
            <a href="home.html" style="text-align:center ;text-decoration: none;">
                <h1><b>Hostel Management System</b></h1>
            </a>
        </div>
        <br>
        <br>
        <!--navigation Start-->
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.html">Home</a>
                <a href="room.php">Room</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                <a href="mess.php" style="text-decoration: none;">Mess</a>
                <a href="sports.php" style="text-decoration: none;">Sports Equipment</a>
                <a href="contact.php" style="text-decoration: none;">Contact Us</a>
                <a href="About.html" style="text-decoration: none;">About Us</a>
                <a href="log_in.php" style="text-decoration: none;"> Log In</a>
                <a href="register_user.php" style="text-decoration: none;"> Sing Up</a>

            </div>
        </nav>
        <br>
        <!--navigation End-->
        <!--card view start-->



        <div class="card-group">
            <div class="card" style="background-color: #b3f0ff;;">
                <center>
                    <img src="IMG/s1.webp" class="card-img-top" alt="..."
                        style="height:300px ; width: 300px;border-radius: 30px; margin-top: 20PX;">
                    <div class="card-body">
                        <p></p>

                    </div>
                </center>
            </div>
            &nbsp;&nbsp;
            <div class="card" style="background-color: #b3f0ff;">
                <center>
                    <img src="IMG/s2.webp" class="card-img-top" alt="..."
                        style="height:300px ; width: 300px;border-radius: 30px; margin-top: 20PX;">
                    <div class="card-body">
                        <p></p>


                    </div>
                </center>

            </div>
            &nbsp;&nbsp;
            <div class="card" style="background-color: #b3f0ff;">
                <center>
                    <img src="IMG/s3.jpg" class="card-img-top" alt="..."
                        style="height:300px ; width: 300px;border-radius: 30px; margin-top: 20PX;">
                    <div class="card-body">
                        <p></p>

                    </div>
                </center>
            </div>
        </div>
        <br><br>


        <!--card View End-->
        <!--from satrt-->
        <center>
            <div class="container">
                <div class="title">Apply For New Sports Equipment</div>
                <div class="content">
                    <form method="post">
                        <div class="user-details">


                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required name="full_name">
                            </div>
                            <div class="input-box">
                                <span class="details">Roll No</span>
                                <input type="text" placeholder="Enter your Roll No" required name="roll">
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" placeholder="Enter your email" required name="email">
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" placeholder="Enter your Phone number" required name="number">
                            </div>
                
                            <div class="input-box">
                                <span class="details">New Sports Equipment Issue</span>
                               <textarea placeholder="Write a name of Sports Equipment Separate with(,)comma sign " required name="message"style="height:100px;width: 500px" ></textarea>
    
                            </div>
                    
                            
                        </div>

                        <div class="button">
                            <input type="submit" value="Apply For Room" name="submit">
                        </div>

                    </form>
                </div>
            </div>
            </div>
            <?php
if(isset($_POST["submit"]))
 {
   $full_name=$_POST["full_name"];
   $roll=$_POST["roll"];
  $number=$_POST["number"]; 
  $email=$_POST["email"];
  $message=$_POST["message"];
  $con=mysqli_connect('localhost','root','','hostel_management_suraj'); 
    $qry="INSERT INTO sports (`full_name`,`roll`,`number`,`email`,`message`)
     VALUES ('$full_name','$roll','$number','$email','$message');";
 $result=mysqli_query($con,$qry);
   if($result==true)
   {
      echo '<div class="alert alert-success">
<strong>Success!</strong>Data Filled Successfully.
</div>';
   }
   else
   {
      echo '<div class="alert alert-danger">
<strong>Success!</strong>Data Already 
</div>';
   }
   mysqli_close($con);
}
?>
        </center>
        <br><br>
        <hr>






        <!--form End-->

        <!--footer start-->

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h6>About</h6>
                        <p> Hostel Management Software offers a comprehensive set of features, ranging from
                            multi-property
                            management with a centralized guest profile to centralized accounting to help effectively
                            automates your daily operations.</p>
                    </div>
                    <div class="col-sm-2">

                    </div>

                    <div class="col-sm-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="index.html" style="text-decoration:none;">Home</a></li>
                            <li><a href="room.php" style="text-decoration:none;">Room</a></li>
                            <li><a href="mess.php" style="text-decoration:none;">Mess</a></li>
                            <li><a href="sports.php" style="text-decoration:none;">Sports Equipment</a></li>
                            <li><a href="contact.html" style="text-decoration:none;">Contact Us</a></li>
                            <li><a href="About.html" style="text-decoration:none;">About</a></li>
                            <li><a href="log_in.php" style="text-decoration:none;">Log In</a></li>
                            <li><a href="register_user.php" style="text-decoration:none;">Sign Up</a></li>
                            <li><a href="review.html" style="text-decoration: none;">Review</a></li>
                        </ul>
                        <a href="#">
                            <button style="margin-left: 85%;">^Top</button>
                        </a>
                    </div>
                </div>
                <div style="margin-left:50% ;">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="https://www.google.co.in/" class="fa fa-google"></a>
                    <a href="https://www.youtube.com/channel/UCt4GgXBmGx1Hh27XNgz_dkg" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                </div>
                <hr>
            </div>

            <center>
                <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by Nikhil !8(-8)</p>
            </center>




            <br><br>

        </footer>
        <!--footer end-->

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>

    </body>

</html>