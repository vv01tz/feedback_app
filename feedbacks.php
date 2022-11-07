<?php require 'inc/header.php' ?>
<?php require 'config.php' ?>
<?php
    // Connect to database
    $db_connection = new mysqli($servername, $db_user, $db_password, $db);
    if ($db_connection->connect_error)
    {
        echo "<h1>Ooops something went wrong try again later </h1>";
    }

    // Get feebacks from the database
    $data = $db_connection->query("SELECT * FROM user_feedback ORDER BY DATE desc");
    if (!isset($data))
    {
        echo "<h1> No feedback yet </h1>";
    }

    $db_connection->close();
?>
<div class="feedback-container">
    <?php
        foreach ($data as $i) {
            $feedback_date = date_create($datetime=$i['date']);
            $formatted_date = date_format($feedback_date, 'd/m/Y');
            echo "
                <article class='card'>
                    <div class='card-header'>
                        <div class='card-username'>
                            $i[name]
                        </div>
                        <div data-rating=$i[rating] class='card-rating'></div>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'>
                            $i[message]
                        </p>
                    </div>
                    <div class='card-footer'>
                        <p class='card-date'>
                            $formatted_date
                        </p>
                    </div>
                </article>";
        }
    ?>
</div>
<?php require 'inc/footer.php' ?>