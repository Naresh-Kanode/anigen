<!DOCTYPE html>
<?php
include 'connect.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Popular</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/home_header.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="fetch.js"></script>

</head>

<body class="bg-dark">
    <div id="home_header"></div>
    <div class="container-fluid">
        <div class="row" height="600px" width="400px">
            <h4 class="text-light">Most Popular Anime</h4>

            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark">
                    <a href="./mostpopular/one_piece.php">
                        <img src="../assets/images/one_piece.jpg" class="card-img-top w-100" height="400px" alt="...">
                        <button class="btn btn-dark" id="33082">One Punch</button>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark">
                    <a href="./mostpopular/naruto.php">
                        <img src="../assets/images/naruto.jpg" class="card-img-top w-100" height="400px" alt="...">
                        <button class="btn btn-dark" id="33082">Naruto</button>
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/bleach.php"> <img src="../assets/images/bleach.jpg" class="card-img-top w-100 " height="400px"
                            alt="...">
                        <button class="btn btn-dark" id="4810">Bleach</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark  ">
                    <a href="./mostpopular/black_cover.php"> <img src="../assets/images/black_cover.jpg" id="mashle_magic"
                            class="card-img-top  w-100 " height="400px" alt="..."> <button class="btn btn-dark"
                            id="5136">Black Cover</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/spy.php"> <img src="../assets/images/spyXfamily.jpg" class="card-img-top  w-100 " height="400px"
                            alt="..."> <button class="btn btn-dark" id="34573">Spy X Family</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/mashle.php"> <img src="../assets/images/mashle_magic.jpg" class="card-img-top  w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="4854">Mashle: Magic and Muscles</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/titan.php"> <img src="../assets/images/attack_on_titan.png" height="400px"
                            class="card-img-top  w-100" alt="..."> <button class="btn btn-dark" id="29255">Attack on
                            Titan: The Final Season Part 3</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/stone.php"> <img src="../assets/images/dr_stone_poster.jpg" class="card-img-top  w-100 "
                            height="400px" alt="..."> <button class="btn btn-dark" id="5583">Dr. Stone: New
                            World</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/delusion.php"> <img src="../assets/images/heavenly_delusion.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="30573">Heavenly
                            Delusion</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/legendary.php"> <img src="../assets/images/legendary_hero_poster.jpg" class="card-img-top w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="23605">The Legendary Hero Is
                            Dead!</button></a>
                </div>
            </div>



            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/super_dragon.php"> <img src="../assets/images/super_dragon_ball.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="4545">Super Dragon Ball Heroes:
                            Big Bang</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/skip.php"> <img src="../assets/images/skip_loafer_poster.jpg" class="card-img-top  w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="4546">Skip and Loafer</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/ayakashi.php"> <img src="../assets/images/ayakashi.jpg" class="card-img-top  w-100" height="400px"
                            alt="...">
                        <button class="btn btn-dark" id="7176">Ayakashi Triangle</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/shinchan.php"> <img src="../assets/images/shinchan_new.jpg" class="card-img-top  w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="504">Shin Chan</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/home_hero.php"> <img src="../assets/images/home_hero.jpg" class="card-img-top w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="1093">My Home Hero</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostpopular/battle.php"> <img src="../assets/images/battle_heaven.png" class="card-img-top  fw-bold w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="1094">Battle Through The Heavens
                            5th Season</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>

</html>