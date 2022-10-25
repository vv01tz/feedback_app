<?php require 'inc/header.php' ?>
<?php
    $user = "segfault";
    $password = "beCode2023";
    $servername = "localhost";

    // Connect to database
    $db_connection = new mysqli($servername, $user, $password, "feedback");
    if ($db_connection->connect_error)
    {
        die("Connection failed".$db_connection->connect_error);
    }

    // Get feebacks from the database
    $data = $db_connection->query("SELECT * FROM user_feedback");
    if (!isset($data))
    {
        echo "No feedback yet";
    }

    foreach ($data as $i) {
        // Start of card
        echo "<article class='card'>";

        // Start of card header
        echo "<div class='card-header'>";

        echo "<div>";
        echo $i["name"];
        echo "</div>";

        echo "<div>";
        echo $i["rating"];
        echo "</div>";
        
        echo "</div>";
        // End of card header

        // Start of card body
        echo "<div class='card-body'>";
        echo $i["message"];
        echo "</div>";
        // End of card body

        // Start of card footer
        echo "<div class='card-footer'>";
        echo $i["date"];
        echo "</div>";
        // End of card footer

        // End of card
        echo "</article>";
    }

    $db_connection->close();
    
?>
<?php require 'inc/footer.php' ?>