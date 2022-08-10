<?php 

include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>><?= $_GET['name']; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/test.css">

</head>

<body id="page-top">
    <?php
    include "head.php";
     include "server.php";
    $strSQL = "SELECT * FROM type_room WHERE type_room.name = '$_GET[name]' ";
    $objQuery = mysqli_query($conn, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
    ?>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xxl del">
                <img style="width: 100%; height:75%;"
                    src="https://www.anywhere.com/img-a/indonesia/destinations/tabanan/hotels/soori-bali/82499507.jpg">
            </div>
        </div>
        <div class="row stande p-5">
            <div class="col text-center border-right">
                <p class="roomstandard">Double Bed</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">18m</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">Free Wifi</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">2 People</p>
            </div>
            <div class="col text-center">
                <p class="roomstandard">From 2700฿</p>
            </div>
        </div>
    </div>
    <div class="container imgstan">
        <div class="row ">
            <div class="col p-4">
                <img style="width: 90%; height:105%;"
                    src="https://d321ocj5nbe62c.cloudfront.net/imageRepo/7/0/113/99/127/IMG_0009_P.jpg">
            </div>
            <div class="col ">
                <p class="standard">Suite Room</p><br>
                <p class="textstan">Grand Superior rooms offer the perfect place to unwind and enjoy a pleasant night’s
                    sleep.</p>
                <!-- <a href="#" class="btn btn-primary btn-stan rounded-0 me-md-2" role="button" data-bs-toggle="button">View More<i class="fas fa-arrow-right p-2 icon"></i></a> -->
                <!-- <a href=""button type="button" class="btn btn-primary btn-sm btn-stan rounded-0">View More<i class="fas fa-arrow-right p-2 icon"></i></button> -->
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container p-3 suite">
        <div class="row">
            <p class="facili">Room Facilities</p>
        </div>
        <div class="row p-2 img1-2">
            <div class="col  img1">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_02_1.png">
            </div>
            <div class="col   img2">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_03_1.png">
            </div>
        </div>
        <div class="row p-2">
            <div class="col img3">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_04_3.png">
            </div>
            <div class="col img4">
                <img style="width:90%;" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_05_2.png">
            </div>
        </div>
        <a href="room?name=<?= $objResult['name']; ?>">
            <a class="btn btn-primary btn-stan rounded-0 btn-lg btn-book" href="bookroom?name=<?= $_GET['name']; ?>"
                role="button">Book Now</a>
        </a>
    </div>


</body>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</html>