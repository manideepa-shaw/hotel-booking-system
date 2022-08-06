<?php 
  include 'components/head.php';
  include 'components/login.php';

  if(isset($_POST['hotelsearch']))
  {
    // <!-- searching hotels and going to next- hotel page -->
    echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/hotels.php?search=".$_POST['hname']."';</script>";
    exit();
  }
?>


    <!-- search bar -->
    <form action="" method="post">
    <div id="search">
      <input type="text" name="hname" autofocus class="search" required placeholder="Enter City or Hotel">
      <!-- search icon -->
      <button type="submit" class="search-icon" name="hotelsearch"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </div>
  </form>
    <!-- carousel kind of thing to display images of places -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Ooty-1581430518.jpg" class="d-block w-100 c-img" alt="">
          <div class="carousel-caption d-md-block">
            <h5>Ooty</h5>
            <p>Weekend Gateways</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Manali-1581428152.jpg" class="d-block c-img w-100" alt="">
          <div class="carousel-caption d-md-block">
            <h5>Manali</h5>
            <p>Mountain Callings</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Amsterdam-1581457941.jpg" class="d-block c-img w-100" alt="">
          <div class="carousel-caption d-md-block">
            <h5>Amsterdam</h5>
            <p>Party Destinations</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Fading images agter carousel -->


    <div class="place-images">
      <h2 class="head-sh">Few most visited places</h2>
      <div class="place">
      <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Maldives-1581454743.jpg" alt="" id="i1">
      <h2 id="i1-h">Maldives</h2>
    </div>
      <div class="place">
      <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Langkawi-1581455255.jpg" alt="" id="i2">
      <h2 id="i2-h">Langkawi</h2>
    </div>
    <div class="place">
      <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Goa-1580994111.jpg" alt="" id="i3">
      <h2 id="i3-h">Goa</h2>
    </div>
    <div class="place">
      <img src="https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Shimla-1581427547.jpg" alt="" id="i4">
      <h2 id="i4-h">Shimla</h2>
    </div>
  </div>


    <footer>
      <div class="about">
        <h1>About Us</h1>
        <p>Book Yours is an online platform used for pre-booking of your hotels. We want ours customers to have a peaceful journey without worrying about their bookings. </p>
        <table>
          <tr>
            <td>
              Address : 
            </td>
            <td>Dinath Bldg L.j. Rd, Mumbai, Maharashtra - 400016</td>
          </tr>
          <tr>
            <td>Customer Care : </td>
            <td> +91 9874563219</td>
          </tr>
          <tr>
            <td>Email : </td>
            <td>xyz@gmail.com</td>
          </tr>
        </table>
      </div>
      <hr>
      <div class="social">
        <h1>Social</h1>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <hr>
        <button class="btn"><a href="tel:+91 9874563219"> Call Us</a></button>
        <button class="btn"><a href="mailto:jiyamanipriya@gmail.com">
          Mail Us
        </a> </button>
      </div><hr>
      <div class="last">
        <h2>Book Yours</h2>
        <h5>2022 bookyours All rights reserved</h5>
      </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>