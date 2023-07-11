<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Clover</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
    <link rel="stylesheet" href="style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="home_header.js"></script>
    <script src="/assets/js/home_header.js"></script>


</head>

<body class="bg-light  text-light">
    <div id=home_header></div>
        <?php
        $id = 34572;
        $sql = "SELECT * FROM mostpopular WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $anime_name=$row['anime_name'];
                $genre = $row['genre'];
                $episodes = $row['episodes'];
                $rating = $row['rating'];
                $synopsis = $row['synopsis'];

                echo "
                        <div class='container-fluid mt-4 mb-5 text-light'>
                        <div class='card shadow m-2'>
                            <div class='row d-lg-flex mt-2 p-3'>
                            <h4 class='ms-2 text-dark text-center overflow-hidden' >$anime_name</h4>
                                <div class='col-12 col-lg-4 col-md-4'>
                                    <img src='images/black_cover.jpg 'class='w-100 border border-3 border-light p-2 '>
                                </div>
                                <div class='col-12 col-lg-8 col-md-8'>
                                    <table class='table table-borderless table-striped'>
                                    <tbody>
                                                <tr>
                                                <th scope='col'>Genre</th>
                                                    <td>$genre</td>
                                            </tr>
                                            <tr>
                                                <th scope='col'>Episodes</th>
                                                <td>$episodes</td>
                                            </tr>
                                            <tr>
                                                <th scope='col'>Rating</th>
                                                <td>$rating</td>
                                            </tr>
                                            </tbody>
                                    </table>

                                <label class='text-light bg-primary rounded w-100 fw-bold text-center p-2'>Synopsis</label>
                                <p class='text-dark Synopsis'>$synopsis</p>
                                </div>
                                <div id='back'></div>
                            </div>
                        </div>
                
                    </div>";
            }
        }
        ?>