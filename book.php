<?php 
  include 'components/head.php';
  include 'components/login.php';

  $ci=$_SESSION['checkin'];
  $co=$_SESSION['checkout'];
  $hid=(int)$_GET['hotel'];
  $uid=(int)$_SESSION['uid'];
  $rid=(int)$_SESSION['roomid'];
  $price=(float)$_SESSION['final_price'];

  // checking of available rooms before booking
  $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
  $query1="SELECT * FROM reservation where roomid='$rid' and checkout>='$co'";
  $query2="select * from reservation where roomid='$rid' and checkin>='$co'";
  $r1=mysqli_query($conn,$query1);
  $r2=mysqli_query($conn,$query2);
  // when booking is done ; inserting booking in the reservation table
  if(isset($_POST['book']))
  {
    $query="insert into reservation(checkin,checkout,uid,hid,roomid,price) values ('$ci','$co','$uid','$hid','$rid','$price')";
  }

  if(mysqli_num_rows($r1)==0 && mysqli_num_rows($r2)==0) //if rooms are available
  {
    echo "<form action='#' method='post' class='flex'><div id='check2'>";
    if(isset($_POST['book']) && mysqli_query($conn,$query))
    {
      echo "<div class='bor'>Your can check your reservation id in the profile page. </div>"; 
    }
    echo "<br>Check-in Date : ". $_SESSION['checkin'] ."<br>Check-out Date : ". $_SESSION['checkout']."<br>Room Type : ". $_SESSION['rtype']."<br>No. of adults : ". $_SESSION['adults'] . "<br>No. of children : ". $_SESSION['children']."<br>Price : Rs. ".$_SESSION['final_price']."/-<br>";
    if(isset($_POST['book']))
    {
      echo "<div class='bor'>Booking Done</div>";
      echo "<a href='index.php'>Go To Main Page</a>";
    }
    else
    {
      echo "<button type='submit' class='btn' name='book'>Book</button> </div></form>";
    }
  }
  else
  {
    echo "<form action='#' method='post' class='flex'><div id='check2'>Rooms are not available since already booked. Check some other dates or roomtypes.</div></form>";
  }
?>
</div>
</body>
</html>