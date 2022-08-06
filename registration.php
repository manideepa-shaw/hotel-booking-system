<?php

    include 'components/head.php';
    include 'components/login.php';
    $e=$_SESSION["email"];
?>

<form action="#" class="outside" method="post">
    <div id="frm-design">
    <?php
         $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
         $q="select email from customer where email='$e'";
         $result=mysqli_query($conn,$q);
         if (mysqli_num_rows($result)>0)
         {
             echo "<br><div class='red'>Already Registered. You need to login.</div><br>";
             echo "    </div>
             </form>
         </body>
         </html>";
         }
         else{

            if(isset($_POST['verify']))
            {
                $check=$_POST['otp'];
                $name=$_POST['name'];
                $phone=(int)$_POST['phone'];
                $email=$_SESSION['email'];
                $address=$_POST['address'];
                $state=$_POST['state'];
                $country=$_POST['country'];
                $pass=$_POST['pass'];
                $npass=$_POST['npass'];
                if($pass==$npass)
                {
                    if($_SESSION["otp"]==$check)
                    {
                        $query="insert into customer(name,email,password,mobile,address,state,country) values ('$name','$email','$pass','$phone','$address','$state','$country')";
                        if ($conn->query($query) === TRUE)
                        {
                            echo "<br>Successfully Registered.<br>";
                            echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/index.php';</script>";
                            exit();
                        }
                        else
                        {
                            echo "<br> Not Successful<br>".mysqli_errno($conn)."<br>".mysqli_error($conn);
                        }
                    }
                    else
                    {
                        echo "<br><div class='red'>Incorrect OTP.</div><br>";
                    }
                }
                else
                {
                    echo "<br><div class='red'>Passwords are not same.Try something different.</div><br>";
                }
            }

            echo "<input type='text' name='name' placeholder='*Name' class='i' required><br><br>  
            <input type='text' name='address' placeholder='*Address' class='i' required><br><br>  
            <input type='text' name='state' placeholder='*State' class='i' required><br><br>  
            <input type='text' name='country' placeholder='*Country' class='i' required><br><br>  
            <input type='tel' name='phone' placeholder='*Phone No.' class='i' required><br><br> 
            <input type='password' name='pass' placeholder='*Enter Password' class='i' required><br><br> 
            <input type='password' name='npass' placeholder='*Re-enter Password' class='i' required><br><br>  
    
            <input type='number' name='otp' placeholder='Enter 4 digit otp' pattern='[6-9]{1}[0-9]{9}' class='i' required><br><br>
            <button type='submit' class='btn' name='verify'>Verify OTP</button>
        </div>
        </form>
    </body>
    </html>";
        }

    ?>
