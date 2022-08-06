<?php 
  include 'components/head.php';
  include 'components/login.php';

  if(isset($_POST['price']))
  {
    if(isset($_SESSION['uid']))
    {
      $_SESSION['checkin']=$_POST['check-in'];
      $_SESSION['checkout']=$_POST['check-out'];
      $_SESSION['rooms']=$_POST['roomnum']; //number of rooms
      $_SESSION['rtype']=$_POST['roomtype']; //room type
      $_SESSION['adults']=$_POST['adultnum'];
      $_SESSION['children']=$_POST['child'];
      $rtype=$_POST['roomtype'];
      
      // Calculating the difference in timestamps
      $diff = strtotime($_SESSION['checkout']) - strtotime($_SESSION['checkin']);
    
      // 1 day = 24 hours
      // 24 * 60 * 60 = 86400 seconds
      $_SESSION['daynum'] = abs(round($diff / 86400));
      $h=$_GET['hotel'];

      $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
      $query="SELECT * FROM rooms WHERE hid='$h' and rtype='$rtype'";
      $result=mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($result))
      {
        $price=$row['price'];
        $y=$row['roomid'];
        $co=$_SESSION['checkout'];
        $ci=$_SESSION['checkin'];
        // checking of available rooms before booking
        $query1="SELECT * FROM reservation where roomid='$y' and checkout>='$co'";
        $query2="select * from reservation where roomid='$y' and checkin>='$co'";
        $r1=mysqli_query($conn,$query1);
        $r2=mysqli_query($conn,$query2);
        if(mysqli_num_rows($r1)==0 && mysqli_num_rows($r2)==0) //if rooms are available
        {
          break;
        }
      }
      $_SESSION['final_price']=$price*$_SESSION['daynum'];
      $_SESSION['roomid']=$y;
      echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/book.php?hotel=".$h."';</script>";
      exit();
    }
    else
    {
      echo '<div id="liveAlertPlaceholder"></div>';
    }
  }
?>
     <!-- check in check out information -->
     <p class="check-desc">Check availability of the rooms by entering check-in and check-out dates</p>
       <form action="" method="post" class="flex">
        <div id="check2">
            <table>
                <tr>
                    <td><div class="check2">Check-in date</div></td>
                    <td><input type="date" name="check-in" class="item date_picker" required></td>
                </tr>
                <tr>
                    <td><div class="check2 date_picker">Check-out date</div></td>
                    <td><input type="date" name="check-out" class="item date_picker" required></td>
                </tr>
                <tr>
                    <td><div class="check2">No. of Adults</div></td>
                    <td><input type="number" min="1" name="adultnum" placeholder="2" class="item" required></td>
                </tr>
                <tr>
                    <td><div class="check2">No. of Children</div></td>
                    <td><input type="number" name="child" min="0" class="item"></td>
                </tr>
                <!-- <tr>
                    <td><div class="check2">No. of Rooms</div></td>
                    <td><input type="number" name="roomnum" class="item" required></td>
                </tr> -->
                <tr>
                    <td><div class="check2">Room Type</div></td>
                    <td>         <select name="roomtype" class="item" required>
                      <?php

                        $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
                        $h=$_GET['hotel'];
                        $query="select rtype from rooms where hid='$h' group by rtype";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($result))
                        {
                          $option=$row['rtype'];
                          echo "<option value='".$option."'>".$option."</option>";
                         
                        }

                      ?>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn price-chk" id="liveAlertBtn" name="price">Check Price</button></td>
                </tr>
        </table>
        </div>
        </form>

        <?php

          $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
          if($conn)
          {
            $h=$_GET['hotel'];
            $h=(int)$h;
            $query="select * from hotels where hid='$h' ";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result))
            {
              echo "<h1 class='hname'>".$row['hname']."</h1>
              <div class='hotel-imgs'>
                  <img src='".$row['img1']."'id='img1' alt=''>
                  <img src='".$row['img2']."'alt='' id='img2'>
                  <img src='".$row['img3']."'alt='' id='img4'>
                  </div>
                  <div class='description'>
                      <p>".$row['details']."</p>
                      </div>";

              // javascript for changing images

              echo "<script>
              i=['".$row['img4']."','".$row['img5']."','".$row['img3']."'];
              let c=0;
              setInterval(() => {
                  if(c==3)
                  {
                      c=0;
                  }
                  document.getElementById('img2').src=i[c];
                  c=c+1;
              
              }, 2000);</script>";

              // house-rules
              echo " <div id='house-rules'>
              <h1 class='head'>House Rules</h1>
              <div class='house-rules'>
                <table>
                  <tr>
                    <td>Check-in</td>
                    <td>13:00 - 23:30</td>
                  </tr>
                  <tr>
                    <td class='more'>Check-out</td>
                    <td>00:00 - 11:00</td>
                  </tr>
                  <tr>
                    <td>Children</td>
                    <td>".$row['children']."</td>
                    </tr>
                    <tr><td>Pets</td>
                     <td>".$row['pets']."</td>
                     </tr>
           
                    </table>
                  </div>
                </div>";
            }
          }
        ?>
     

<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  
<script>
  // for disabling dates
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  $('.date_picker').attr('min',today);

  // script for alert
    var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    var alertTrigger = document.getElementById('liveAlertBtn')

    function alert(message, type) {
      var wrapper = document.createElement('div');
      wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

      alertPlaceholder.append(wrapper);
      setTimeout(() => {
        wrapper.parentNode.removeChild(wrapper);
      }, 3000);
    }

    if (alertTrigger) {
      alertTrigger.addEventListener('click', function () {
        alert('You need to login first!', 'success')
      })
    }

</script>

</body>
</html>