<!DOCTYPE html>
<?php
include 'connect.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Favourite</title>
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
            <h4 class="text-light">Most Favourite</h4>

            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark">
                    <a href="./mostfavourite/fullmetal.php">
                        <img src="../assets/images/fullmetal_alchemist.jpeg" class="card-img-top w-100" height="400px" alt="...">
                        <button class="btn btn-dark"id="12100" >Fullmetal Alchemist: Brotherhood</button>
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-4  ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/hunter.php"><img src="../assets/images/hunter_x_hunter.jpg" class="card-img-top w-100"
                            height="400px" alt=" ...">
                        <button class="btn btn-dark"id="11061">Hunter x Hunter</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/one_piece.php"> <img src="../assets/images/one_piece.jpg" class="card-img-top w-100 "
                            height="400px" alt="...">
                        <button class="btn btn-dark" id="2100">One Piece</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark  ">
                    <a href="./mostfavourite/stains_gate.php"> <img src="../assets/images/stains_gate.jpg" id="mashle_magic"
                            class="card-img-top  w-100 " height="400px" alt="...">
                        <button class="btn btn-dark" id="9253">Stains Gate</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/titan.php"> <img src="../assets/images/attack_on_titan.png" class="card-img-top  w-100 "
                            height="400px" alt="..."> <button class="btn btn-dark" id="16498">Attack on Titan</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/naruto.php"> <img src="../assets/images/naruto.jpg"
                            class="card-img-top  w-100" height="400px" alt="..."> 
                            <button class="btn btn-dark"id="1735">Naruto: Shippuden</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/code.php"> <img src="../assets/images/rebellion.jpg" height="400px"
                            class="card-img-top  w-100" alt="..."> <button class="btn btn-dark" id="1575">Code Geass: Lelouch of the Rebellion
                            Shell
                            Arise
                        </button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/genisis.php"> <img src="../assets/images/neon_genesis.jpg" class="card-img-top  w-100 "
                            height="400px" alt="..."> <button class="btn btn-dark" id="3000">Neon Genesis Evangelion</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/demon.php"> <img src="../assets/images/demons_slyer.jpg" class="card-img-top  w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="38000">Demon Slayer: Kimetsu no Yaiba</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/your_name.php"> <img src="../assets/images/your_name.jpg" class="card-img-top w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="32281">Your Name</button></a>
                </div>
            </div>



            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/lie_in_april.php"> <img src="../assets/images/your_lie.jpg" class="card-img-top  w-100" height="400px"
                            alt="..."> <button class="btn btn-dark" id="23273">Your Lie in April</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/silent.php"> <img src="../assets/images/silent_voice.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="28851">silent Voice</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/jujustu.php"> <img src="../assets/images/Jujutsu_Kaisen.jpg" class="card-img-top  w-100" height="400px"
                            alt="...">
                        <button class="btn btn-dark" id="40748">Jujutsu Kaisen</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/cowboy.php"> <img src="../assets/images/cowboy.jpg" class="card-img-top  w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="1">Cowboy Bebop</button></a>
                </div>
            </div>


            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/one_punch.php"> <img src="../assets/images/one_punch.jpg" class="card-img-top w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="30240">One Punch Man
                            Animation</button></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-4 mb-3 ">
                <div class="card w-100 text-center bg-dark ">
                    <a href="./mostfavourite/psyco.php"> <img src="../assets/images/psycho_pass.jpg" class="card-img-top  fw-bold w-100"
                            height="400px" alt="..."> <button class="btn btn-dark" id="13601">Psycho Pass</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>

</html>