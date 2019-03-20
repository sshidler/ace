<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Have a question or comment about our inclusive events? Feel free to contact Ace in the Hole Multisport Events.">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale-1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet/less"  href="../css/styles.less" type="text/css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <title>Contact-Ace in the Hole Multisport Events</title>
</head>
<header>
    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navigation.php'; ?>
</header>
<body>
    <div id="container">

        <main>
            <section>
                <div class="section group">
                    <div class="col span_1_of_2">
                        <img src="../images/triathlon-3.jpg" alt="Swimmers participating in the Ace in the Hole Multisport Events Long Course Triathlon.">
                        <section>
                        <h2>Contact Us</h2>
                            <form action="contact-results.php" method="post" id="contactForm" class="wrapper">
                                <div class="row">
                                    <label for="contactName" class="col-25">Name:</label> <br />
                                    <input type="text" name="contactName" id="contactName" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="contactEmail" class="col-25">Email:</label> <br />
                                    <input type="text" name="contactEmail" id="contactEmail" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="contactParticipant" class="col-25">Athlete or Volunteer:</label> <br />
                                    <input type="radio" name="contactParticipant" id="contactParticipant" value="athlete" class="col-75">Athlete
                                    <input type="radio" name="contactParticipant" id="contactParticipant" value="volunteer" class="col-75">Volunteer <br />
                                </div>
                                <div class="row">
                                    <label for="contactComment" class="col-25">Question or Comment:</label> <br />
                                    <textarea rows="4" cols="20" name="contactComment" id="contactComment" class="col-75" required></textarea> <br />
                                </div>
                                <div class="row">
                                    <input type="submit" value="Submit" id="submit">
                                </div>
                            </form>
                        </section>

                    </div>
                    <div class="col span_1_of_2">
                        <aside>
                            <h3>Volunteer</h3>
                            <p>Sign up to volunteer for our events.</p>
                            <a href="<?php echo BASE_URL; ?>registration"><button type="button" id="volunteerContact">Sign Up to Volunteer</button></a>
                            <img src="../images/volunteer.jpg" alt="Volunteers for the event.">
                        </aside>
                    </div>
                </div>
            </section>
        </main>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/scripts.js"></script>
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </div>

</body>
</html>