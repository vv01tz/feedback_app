<?php
    function main(){
        include 'config.php';

        // Connect to the database
        $db_connection = new mysqli($servername, $db_user, $db_password, $db);

        if ($db_connection->connect_error){
            $db_connection->close();
            return false;
        }

        $result = insert_data($db_connection);
        $db_connection->close();

        return $result;
    }

    function insert_data($db_connection){
        if (!isset($_POST)){
            return false;
        }

        $name = $_POST["full_name"];
        $email = $_POST["email"];
        $rating = (int) $_POST["rating"];
        $msg = $_POST["message"];
        $feedback_date = date_format(date_create("UTC"), "Ymd");
        
        $result = $db_connection->query("INSERT INTO user_feedback(name, email, rating, message, date) VALUES ('$name', '$email', $rating, '$msg', $feedback_date)");

        // Returns the result of the query
        return $result;
    }
?>

<?php require "inc/header.php" ?>

<?php $succes = main() ?>

<div class="status-msg <?php echo $succes ? "succes" : "fail" ?>">
    <h1>
        <?php
            if ($succes){
                echo "Feedback Submitted Sucessfully";
            }else {
                echo "Feedback Submission Failed";
            }
        ?>
    </h1>
</div>

<?php require "inc/footer.php" ?>