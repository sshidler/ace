<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale-1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet/less"  href="../css/styles.less" type="text/css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <title>Template-Ace in the Hole Multisport Events</title>
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
                    <img src="../images/cyclist-2.jpg" alt="Ace in the Hole Multisport athletes running in the Try-a-Tri event.">
                    <section>
                        <h2>Success!</h2>
                        <p>
                            Thank you for registering for our event on March 23-24, 2019!
                            Payment for the event is accepted at packet pickup. We accept credit cards, cash, and checks. <br />
                            packet pickup is at:<br />
                            Why Worry Racing<br />
                            123 NW Everett, Portland OR.<br />
                            No Packet pickup on the day of the event!
                        </p>
                        <p>
                            Check out the Event Details page for information about the event.
                            If you have any questions, visit our <a href="<?php echo BASE_URL; ?>faq">FAQ</a> page or feel free to <a href="<?php echo BASE_URL; ?>contact">Contact Us.</a>
                        </p>

                    </section>
                </div>
                <div class="col span_1_of_2">
                    <aside>
                        <h3>Finish Line Festivities</h3>
                        <p>After crossing the finish line, participants can enjoy the Sports & Fitness Expo and live entertainment.</p>
                        <img src="../images/running-5.jpg" alt="A woman crosses the finish line of the 10k race." id="finishline">
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