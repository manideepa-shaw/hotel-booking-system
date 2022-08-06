<?php 
  include 'components/head.php';
  include 'components/login.php';
?>
      <!-- check in check out information -->
      <p class="check-desc">Check available hotels by entering check-in and check-out dates.</p>
      <div id="check">
        <form action="#" method="post">
          <div class="check">Check-in date</div>
          <input type="date" class="date_picker" name="check-in"><br>
          <div class="check">Check-out date</div>
          <input type="date" class="date_picker" name="check-out"><br>
          <button type="submit" class="btn niche" name="available">Search</button>
        </form>
      </div>

      <!-- hotels -->
      <?php

            if(isset($_POST['each']))
            {
                echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/individual.php?hotel=".$_POST['each']."';</script>";
                exit();
            } 

            $y=$_GET['search'];
            $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
            if($conn)
            {
              $query="select * from hotels where city = '$y' or hname= '$y' ";
              $result=mysqli_query($conn,$query);
              $c=0;
              while($row = mysqli_fetch_array($result))
              { 
                $hid=$row['hid'];
                $q2="SELECT min(price) as 'm' FROM rooms WHERE hid='$hid'";
                $r2=mysqli_query($conn,$q2);
                $p=0;
                while($row2=mysqli_fetch_array($r2))
                {
                  $p=$row2['m'];
                }
                
                // to limit number of characters for details
                if($row['details']>200)
                {
                  $substr = substr($row['details'], 0, 150)."...";
                }
                else
                {
                  $substr=$row['details'];
                }
                $c=$c+1;
                  echo "<div class='card'>  <img src='".$row['img1']."' class='hotel_img' alt=''><div class='features'><div class='head'><h2>".$row['hname']."</h2><h4>Hotel in".$row['city']."</h4></div><q class='details'>".$substr."</q><div class='price'>Price from ".$p. "/- per night</div><form action='' method='post'><button type='submit' name='each' class='btn avail' value='".$row['hid']."'>Check Availability</button></form></div></div>";
              }
              // similar results
              if($c==0)
              {
                echo "No Results Found.<br>Similar Results.";
                $query="select * from hotels where city like '%$y%' or hname like '%$y%' ";
                $result=mysqli_query($conn,$query);
                $k=0;
                while($row = mysqli_fetch_array($result))
                {
                  $hid=$row['hid'];
                  $q2="SELECT min(price) as 'm' FROM rooms WHERE hid='$hid'";
                  $r2=mysqli_query($conn,$q2);
                  $p=0;
                  while($row2=mysqli_fetch_array($r2))
                  {
                    $p=$row2['m'];
                  }
                  // to limit number of characters for details
                  if($row['details']>200)
                  {
                    $substr = substr($row['details'], 0, 150)."...";
                  }
                  else
                  {
                    $substr=$row['details'];
                  }
                  $k=$k+1;
                  echo "<div class='card'>  <img src='".$row['img1']."' class='hotel_img' alt=''><div class='features'><div class='head'><h2>".$row['hname']."</h2><h4>Hotel in".$row['city']."</h4></div><q class='details'>".$substr."</q><div class='price'>Price from ".$p. "/- per night</div><form action='' method='post'><button type='submit' name='each' class='btn avail' value='".$row['hid']."'>Check Availability</button></form></div></div>";
                }

                if($k==0)
                {
                  echo "No Results Found.<br>Hope You'll enjoy visiting these hotels.";
                  $query='select * from hotels';
                  $result=mysqli_query($conn,$query);
                  while($row = mysqli_fetch_array($result))
                  {
                    $hid=$row['hid'];
                    $q2="SELECT min(price) as 'm' FROM rooms WHERE hid='$hid'";
                    $r2=mysqli_query($conn,$q2);
                    $p=0;
                    while($row2=mysqli_fetch_array($r2))
                    {
                      $p=$row2['m'];
                    }
                    // to limit number of characters for details
                    if($row['details']>200)
                    {
                      $substr = substr($row['details'], 0, 150)."...";
                    }
                    else
                    {
                      $substr=$row['details'];
                    }
                    echo "<div class='card'>  <img src='".$row['img1']."' class='hotel_img' alt=''><div class='features'><div class='head'><h2>".$row['hname']."</h2><h4>Hotel in".$row['city']."</h4></div><q class='details'>".$substr."</q><div class='price'>Price from ".$p. "/- per night</div><form action='' method='post'><button type='submit' name='each' class='btn avail' value='".$row['hid']."'>Check Availability</button></form></div></div>";
                  }
                }
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

</script>
</body>
</html>