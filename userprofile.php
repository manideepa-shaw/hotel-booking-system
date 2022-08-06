<?php
    include 'components/head.php';
    include 'components/login.php';

    $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
    // for cancelling the booking
    if(isset($_POST['each']))
    {
        echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/cancel_booking.php?rsvid=".$_POST['each']."';</script>";
        exit();
    }

    // displayong details of the user 
    if($conn)
    {
        $uid=$_SESSION['uid'];
      $query="select * from customer where uid='$uid' ";
      $result=mysqli_query($conn,$query);
      $name=$_SESSION['name'];
      while($row = mysqli_fetch_array($result))
      {
          $email=$row['email'];
          $phone=$row['mobile'];
          $address=$row['address'];
          $state=$row['state'];
          $country=$row['country'];
      }
      echo '<div class="navtab">
      <div class="written">
      <ul>
          <li class="anyone active2" onclick="show()">User Details</li>
          <li class="anyone2" onclick="show1()">Bookings</li>
      </ul>
  <div class="details">
      Name : '.$name.'<br>
      Email : '.$email.'<br>
      Phone No. : '.$phone.'<br>
      State : '.$state.'<br>
      Country : '.$country.'<br>
  </div>';
    }

    // bookings
    $query2="select * from reservation where uid='$uid' order by rsvid desc";
    $result2=mysqli_query($conn,$query2);
    echo '<div class="details2 hide">';
    if(mysqli_num_rows($result2)==0)
    {
        echo '<div class="hotel-book">No boookings yet</div>';
    }
    else
    {
        // another loop for getting hotel name from another table
        while($row = mysqli_fetch_array($result2))
        {
            $hid=$row['hid'];
            $q3="select hname from hotels where hid='$hid'";
            $r3=mysqli_query($conn,$q3);
            while($r=mysqli_fetch_array($r3))
            {
                $hname=$r['hname'];
            }
            // displaying all the details
            echo '<form method="post"> <div class="hotel-book" name="rsvid">Reservation ID : '.$row['rsvid'].'<br>Hotel : '.$hname.'<br>
            Check-in Date : '.$row['checkin'].'<br>
            Check-out Date : '.$row['checkout'].'<br>
            Price : Rs. '.$row['price'].' /-';

            $today_date=date("Y-m-d");
            if($row['checkin']>$today_date)
            {
                echo "<br><form action='' method='post'><button type='submit' name='each' class='btn avail' value='".$row['rsvid']."'>Cancel Booking</button></form><br>";
            }
            echo '</div>';

        }
    }
?>

    <script>
        function show()
        {   
            document.getElementsByClassName('details')[0].classList.remove('hide');
            document.getElementsByClassName('details2')[0].classList.add('hide');
            document.getElementsByClassName('anyone')[0].classList.add('active2');
            document.getElementsByClassName('anyone2')[0].classList.remove('active2');
        }
        function show1()
        {
            document.getElementsByClassName('details2')[0].classList.remove('hide');
            document.getElementsByClassName('details')[0].classList.add('hide');
            document.getElementsByClassName('anyone2')[0].classList.add('active2');
            document.getElementsByClassName('anyone')[0].classList.remove('active2');
        }
    </script>
</body>
</html>