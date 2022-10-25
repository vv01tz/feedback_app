<?php require 'config.php' ?>
<?php
    // Connect to database
    $db_connection = new mysqli($servername, $db_user, $db_password, $db);
    if ($db_connection->connect_error)
    {
        die("Connection failed".$db_connection->connect_error);
    }

    // Insert data into database
    if (isset($_POST))
    {
        $name = $_POST["full_name"];
        $email = $_POST["email"];
        $rating = (int) $_POST["rating"];
        $msg = $_POST["message"];
        $feedback_date = date_format(date_create("UTC"), "Ymd");
        
        $db_connection->query("INSERT INTO user_feedback(name, email, rating, message, date) VALUES ('$name', '$email', $rating, '$msg', $feedback_date)");
    }

    $db_connection->close();
?>