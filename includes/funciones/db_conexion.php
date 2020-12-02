<?php
    $conn = new mysqli('localhost', 'root', 'smashb1391', 'gdlwebcamp');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }

?>