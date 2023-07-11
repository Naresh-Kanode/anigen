<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonic: Night of the WereHog</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body class="bg-light  text-light">

                <?php

                //  Define the ID of the record you want to retrieve
                $id = 5583;

                // Construct the SQL query
                $sql = "SELECT * FROM action WHERE id = $id";

                // Execute the query and store the result
                $result = mysqli_query($con, $sql);

                // Check if the query was successful
                

                // Retrieve the data from the result set
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $genre = $row['genre'];
                        $episodes = $row['episodes'];
                        $rating = $row['rating'];
                        $Synopsis = $row['Synopsis'];

                        echo " <div class='container-fluid mt-4 mb-5 text-light'>
                        <div class='card shadow m-2'>
                            <div class='row d-lg-flex mt-2 p-3'>
                            <h4 class='ms-2 text-dark text-center'>Sonic: Night of the WereHog</h4>
                                <div class='col-12 col-lg-4 col-md-4'>
                                    <img src='../assets/images/Sonic_Night_of_the_WereHog.jpg' class='w-100 border border-3 border-light p-2 '>
                                </div>
                                <div class='col-12 col-lg-8 col-md-8'>
                                    <table class='table table-borderless table-striped'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>Score</th>
                                                <td>8.69</td>
                                            </tr>
                                        </thead>
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

                                <label class='text-light bg-primary rounded w-100 fw-bold text-center p-2'> Synopsis</label>
                                <p class='text-dark justify'>$Synopsis</p>
                                </div>
                                <div id='back'></div>
                            </div>
                        </div>
                
                    </div>";
                    }
                }
                ?>