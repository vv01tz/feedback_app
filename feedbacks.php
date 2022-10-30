<?php require 'inc/header.php' ?>
<?php require 'config.php' ?>
<?php
    // Connect to database
    $db_connection = new mysqli($servername, $db_user, $db_password, $db);
    if ($db_connection->connect_error)
    {
        die("Connection failed".$db_connection->connect_error);
    }

    // Get feebacks from the database
    $data = $db_connection->query("SELECT * FROM user_feedback ORDER BY DATE desc");
    if (!isset($data))
    {
        echo "No feedback yet";
    }

    $db_connection->close();
    
?>
<div class="feedback-container">
    <?php
        foreach ($data as $i) {
        // Start of card
        echo "<article class='card'>";

        // Start of card header
        echo "<div class='card-header'>";

        echo "<div class='card-username'>";
        echo $i["name"];
        echo "</div>";

        echo "<div class='card-rating'>";
        echo $i["rating"];
        echo "</div>";
        
        echo "</div>";
        // End of card header

        // Start of card body
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        echo $i["message"];
        echo "</p>";
        echo "</div>";
        // End of card body

        // Start of card footer
        $feedback_date = date_create($datetime=$i['date']);
        echo "<div class='card-footer'>";
        echo "<p class='card-date'>";
        echo date_format($feedback_date, "d/m/Y");
        echo "</p>";
        echo "</div>";
        // End of card footer

        // End of card
        echo "</article>";
        }
    ?>
</div>
<?php require 'inc/footer.php' ?>