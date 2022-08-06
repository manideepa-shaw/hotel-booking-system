<?php
    include 'components/head.php';
    include 'components/login.php';

    $conn=mysqli_connect('localhost','Mani','12341234','project_sem6');
    $rsvid=$_GET['rsvid'];
    echo "<div class='written'>Are you sure, you want to cancel this booking?<br>
        <form method='post'><button class='btn' name='yes'>Yes</button></form>
        <form method='post'><button class='btn' name='no'>No</button></form>
    </div>";
    if(isset($_POST['yes']))
    {
        $q="DELETE FROM reservation WHERE rsvid='$rsvid'";
        mysqli_query($conn,$q);
        echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/userprofile.php';</script>";
        exit();
    }
    if(isset($_POST['no']))
    {
        echo " <script type='text/javascript'>window.location.href = 'http://localhost/project_1/userprofile.php';</script>";
        exit();
    }
?>