<?php
    $conn = mysqli_connect('localhost','root','','data');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?>