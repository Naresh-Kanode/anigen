<!DOCTYPE html>
<?php
include 'connect.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Airing</title>
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
            <h4 class="text-light">Top Airing Anime</h4>

            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark">
                    <a href="./topairing/one_piece.php">
                        <img src="../assets/images/one_piece.jpg" class="card-img-top w-100" height="400px" alt="...">
                        <button class="btn btn-dark" id="21">One Piece</button>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/demon.php"><img src="../assets/images/demons_slyer.jpg" class="card-img-top w-100"
                            height="400px" alt=" ...">
                        <button class="btn btn-dark" id="3871">Demon Slayer:Kimetsu no yaiba..</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/paradise.php"> <img src="../assets/images/hell's_paradise_poster.png" class="card-img-top w-100 "
                            height="400px" alt="...">
                        <button class="btn btn-dark" id="4810">Hell's Paradise</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark  ">
                    <a href="./topairing/cheat.php"> <img src="../assets/images/cheat_skill.jpg" id="mashle_magic"
                            class="card-img-top  w-100 " height="400px" alt="..."> <button class="btn btn-dark"
                            id="5136">I Got a Cheat Skill in Another World and..</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/my_star.php"ing> <img src="../assets/images/my_star.jpg"
                            class="card-img-top  w-100 " height="400px" alt="..."> <button class="btn btn-dark"
                            id="4856">My Star</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/mashle.php"> <img src="../assets/images/mashle_magic.jpg"
                            class="card-img-top  w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="4854">Mashle: Magic and Muscles</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/titan.php"> <img src="../assets/images/attack_on_titan.png"
                            height="400px" class="card-img-top  w-100" alt="..."> <button class="btn btn-dark"
                            id="29255">Attack on Titan: The Final Season Part 3</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/stone.php"> <img src="../assets/images/dr_stone_poster.jpg"
                            class="card-img-top  w-100 " height="400px" alt="..."> <button class="btn btn-dark"
                            id="5583">Dr. Stone: New World</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/delusion.php"> <img src="../assets/images/heavenly_delusion.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="30573">Heavenly Delusion</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/legendary.php"> <img src="../assets/images/legendary_hero_poster.jpg"
                            class="card-img-top w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="23605">The Legendary Hero Is Dead!</button></a>
                </div>
            </div>



            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/super_dragon.php"> <img src="../assets/images/super_dragon_ball.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="3989">Super Dragon Ball Heroes: Big Bang</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/skip.php"> <img src="../assets/images/skip_loafer_poster.jpg"
                            class="card-img-top  w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="32548">Skip and Loafer</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/ayakashi.php"> <img src="../assets/images/ayakashi.jpg" class="card-img-top  w-100"
                            height="400px" alt="...">
                        <button class="btn btn-dark" id="11471">Ayakashi Triangle</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/shinchan.php"> <img src="../assets/images/shinchan_new.jpg"
                            class="card-img-top  w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="30916">Shin Chan</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/home_hero.php"> <img src="../assets/images/home_hero.jpg"
                            class="card-img-top w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="17141">My Home Hero</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./topairing/battle.php"> <img src="../assets/images/battle_heaven.png"
                            class="card-img-top  fw-bold w-100" height="400px" alt="..."> <button class="btn btn-dark"
                            id="6721">Battle Through The Heavens 5th Season</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>

</html>