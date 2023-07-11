<?php
include 'connect.php';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free</title>
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

<body class="bg-light  text-light">
    
        <?php
        $id = 4;
        $sql = "SELECT * FROM sports WHERE anime_id = $id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $genre = $row['genre'];
                $episodes = $row['episodes'];
                $rating = $row['rating'];
                $Synopsis = $row['synopsis'];

                echo "
                        <div class='container-fluid mt-4 mb-5 text-light'>
                        <div class='card shadow m-2'>
                            <div class='row d-lg-flex mt-2 p-3'>
                            <h4 class='ms-2 text-dark text-center overflow-hidden' >$name</h4>
                                <div class='col-12 col-lg-4 col-md-4'>
                                    <img src='../assets/images/Free!.jpg'class='w-100 border border-3 border-light p-2 '>
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

                                <label class='text-light bg-primary rounded w-100 fw-bold text-center p-2'> Synopsis</label>
                                <p class='text-dark synopsis'>$Synopsis</p>
                                </div>
                                <div id='back'></div>
                            </div>
                        </div>
                
                    </div>";
            }
        }
        ?>