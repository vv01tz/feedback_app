<?php require "inc/header.php" ?>
<article class="card">
    <div class="card-header">
        <h1 class="card-header-heading">
            Feedback
        </h1>
        <p class="card-header-desc">
            Tell us what you thought of our service
        </p>
    </div>

    <div class="card-body">
        <form method="POST">
            <div class="form-control">
                <input class="form-input" id="fullname" type="text" name="full_name" required>
                <label for="fullname"> Full Name </label>
            </div>

            <div class="form-control">
                <input class="form-input" id="email" type="email" name="email" placeholder="Email" required>
                <label for="email"> Email </label>
            </div>

            <div class="form-control">
                <input class="form-input" id="rating" type="number" min="0" max="5" name="rating" required>
                <label for="rating"> Rating out of five </label>
            </div>

            <div class="form-control">
                <textarea class="form-input" id="message" name="message" required></textarea>
                <label for="message">Message</label>
            </div>

            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</article>
<?php require "inc/footer.php" ?>
