<?php
$con = new mysqli('localhost', 'root', '', 'anime');

if ($con) {
    echo "";


} else {
    die(mysqli_error($con));
}
?>