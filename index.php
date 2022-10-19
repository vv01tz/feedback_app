<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"> 
        <!-- My stylesheet -->
        <link rel="stylesheet" href="./assets/css/main.css">
        <title>Feedback Form | Studio 79</title>
    </head>
    <body>
        <header class="header">
            <div class="header-logo">
                Studio 79
            </div>
            <nav class="main-nav">
                <ul class="main-menu">
                    <li><a href="/feedbackApp/"> Form </a></li>
                    <li><a href="#"> Feedbacks </a></li>
                </ul>
            </nav>
        </header>
        <main>
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
                        <div>
                            <input id="fullname" type="text" name="full_name" required>
                            <label for="fullname"> Full Name </label>
                        </div>

                        <div>
                            <input id="email" type="email" name="email" required>
                            <label for="email"> Email </label>
                        </div>

                        <div>
                            <input id="rating" type="number" min="0" max="5" name="rating" required>
                            <label for="rating"> Rating out of five </label>
                        </div>

                        <div>
                           <textarea id="message" name="message">
                           </textarea>
                           <label for="message">Message</label>
                        </div>

                        <button type="submit">Send</button>
                    </form>
                </div>
            </article>
        </main>
        <footer class="footer"> 
            Coded by <a href="https://www.github.com/vv01tz" target="_blank">Arno Volts</a>
        </footer>
    </body>
</html>
