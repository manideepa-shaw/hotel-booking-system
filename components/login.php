<?php

  session_start();
  $otp_verify='sendotp';
  $otp_verify_S='Send OTP'; //this will be shown while registering if otp is not sent else Verify

  // registeration purpose
  if(isset($_POST['sendotp']))
  {
    $_SESSION['email']=$_POST['email'];
    $_SESSION["otp"]=mt_rand(1000,9999);
    $body="OTP : ".$_SESSION["otp"];
    if(mail( $_SESSION["email"],"Book Yours otp",$body))
    {
        header('location: http://localhost/project_1/registration.php');
        exit();
    }
  }


  // login purpose
  if(isset($_POST['login']))
  {
    $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
    if($conn)
    {
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $query="select name from customer where email='$email'";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)==0)
      {
        echo "Not registered";
      }
      else{
        $query="select name,uid from customer where email='$email' and password='$pass'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==0)
        {
          echo "Wrong Password";
        }
        else{
          while($row = mysqli_fetch_array($result))
          {
            $x=$row['name'];
            $y=$row['uid'];
          }
          $_SESSION['name']=$x;
          $_SESSION['uid']=$y;
        }
      }
    }
  }
  if(isset($_POST['logout']))
  {
    session_unset();
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'http://localhost/project_1/index.php';</script>";
  }

?>
<body>
    <nav class="navbar">
        <div class="company">
          <ul class="logo-l">
            <li class="logo-li"><img src="logo.jpg" alt="" class="logo"></li>
            <li class="logo-li"><h3>Book Yours</h3></li>
          </ul>
        </div>
        <div class="list">
          <?php
            if(isset($_SESSION['uid']))
            { 
              echo '<ul class="login_profile"><li><form action="index.php" method="post"><button class="btn" name="home">Home</button></form></li><li><form action="userprofile.php" method="post"><button class="btn" name="profile">Profile</button></form></li><li><form action="#" method="post"><button class="btn" name="logout">Log Out</button></form></li></ul>';
            }
            else{
              echo ' <!-- first modal for login page -->
              <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- form for login -->
                          <form action="#" method="post" class="frm">
                              Email : 
                              <input type="text" name="email" class="modal-input" required><br>
                              Password : 
                              <input type="password" name="pass" class="modal-input" required><br>
                              <button type="submit" class="btn form-sub" name="login">Login</button>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <p class="question">Not a Customer?</p>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Sign Up</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Second modal for sign up -->
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Sign Up</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="#" method="post" class="frm">
                            Email : 
                            <input type="text" name="email" class="modal-input"><br>';
                         
                            echo '<button type="submit" class="btn form-sub" name="sendotp">Send OTP</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                          <p class="question">Existing User?</p>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Login</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn b" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Login</a>';

            }
          ?>
         
        </div>
    </nav>
