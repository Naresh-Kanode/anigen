<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime By Age </title>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/home_header.js"></script>


</head>

<body class="bg-dark text-light">
    <div id="home_header"></div>
    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Retrieve the selected value from the dropdown
        $selectedValue = $_POST['dropdown'];
        $query = "SELECT * FROM age WHERE Age='$selectedValue'";
        $result = mysqli_query($con, $query);

        // Check if any rows were found
        echo "<h4 class='ms-2 mt-4  text-center'>Anime List As Per Selected Age $selectedValue</h4>";
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Title = $row['name'];
                $Genre = $row['genre'];
                $Episodes = $row['episodes'];
                $Rating = $row['rating'];
                $Synopsis = $row['synopsis'];


                echo " 
            <div class='row text-light border m-5 '>
            <div class='col-12 col-lg-4 col-md-4'>
            <img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'class='w-100 p-2 mt-4 mb-4 '>
        </div>
                <div class='col-12 col-lg-4 col-md-4  mx-auto text-light d-lg-flex mt-3 ms-0 '>
                        <table class='table table-borderless table-striped text-light d-lg-flex'>
                            <tbody>
                                    <tr>
                                    <th scope='col' class='text-light'>Title</th>
                                        <td class='text-light'>$Title</td>
                                </tr>
                                <tr>
                                    <th scope='col' class='text-light'>Genre</th>
                                    <td class='text-light'>$Genre</td>
                                </tr>
                                <tr>
                                <th scope='col' class='text-light'>Episodes</th>
                                <td class='text-light'>$Episodes</td>
                            </tr>
                            <tr>
                            <th scope='col' class='text-light'>Rating</th>
                            <td class='text-light'>$Rating</td>
                        </tr>
                                <tr>
                                    <th scope='col' class='text-light'>Description</th>
                                    <td class='text-light'>$Synopsis</td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                
            </div>";
            }

            echo "</table>";
        } else {
            echo "No data found.
        </body> ";
        }

        // Close the database connection
        mysqli_close($con);
    }
    echo' <a href="home.php"><button class="btn btn-outline-light mb-3 w-100">back to home</button></a>';
    ?>
    <div id="footer"></div>
</body>


</html>