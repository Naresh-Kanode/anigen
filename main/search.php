<?php include 'connect.php'; ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime By Age</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/home_header.js"></script>


</head>
<!--<img src='data:image/jpeg;base64," . base64_encode($row[' image']) . "' class=' border border-3 border-light p-2 '>-->

<body class="text-dark">

    <?php
    // Retrieve the search query from the form
    $searchQuery = $_GET['searchQuery'];

    // Query the database based on the search query
    $query = "SELECT * FROM search WHERE name LIKE '%" . $searchQuery . "%'";
    $result = mysqli_query($con, $query);
    ?>

    <!-- Display the results in a table -->

    <?php
    // Iterate through the retrieved records and display them
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $genre = $row['genre'];
        $episodes = $row['episodes'];
        $Synopsis = $row['synopsis'];
        $image = $row['image'];

        echo "


        <div class='container-fluid mt-2  text-light'>
        <div class='card'>
            <div class='row d-lg-flex '>
            <h4 class='text-dark text-center overflow-hidden mt-3' >$name</h4>
                <div class='col-12 col-lg-4 col-md-4'>
                    <img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'class='w-100 p-3 '>
                </div>
                <div class='col-12 col-lg-8 col-md-8 p-4'>
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
                            </tbody>
                    </table>

                    <label class='text-light bg-primary rounded w-100 fw-bold text-center p-2'> Synopsis</label>
                    <p class='text-dark synopsis'>$Synopsis</p>
                </div>
            </div>
        </div>

    </div>";

    }

    ?>


</body>

</html>