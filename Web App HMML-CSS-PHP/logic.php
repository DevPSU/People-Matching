<!DOCTYPE html>

<html>
<head>
    <title>Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html">Penn State <span>Club Matching Utility</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="Form.html">Form</a></li>
    </ul>
</nav>

<!-- Main -->
<div id="main">

    <!-- Section -->
    <section class="wrapper">
        <div class="inner">
            <div class="col col1 first">
                <div class="align-center">
                    <img src="images/Penn%20State%20Logo.png" alt="" />
                </div>
            </div>
            <header class="align-center">
                <h1>Results</h1>
                <p>Here are some clubs that we think you might like.</p>
            </header>
        </div>
    </section>


</div>

<div class="align-center">
    <?php

    $name = $_POST['first'] . " " . $_POST['last'];
    $email = $_POST['email'];

    $weights = array
    (
        array(.4, .1 ,.1, .1, .1 ,.2, 'Q1'),
        array(.1, .4 ,.2, .1, .1 ,.1, 'Q2'),
        array(.1, .2 ,.1, .1, .4 ,.1, 'Q3'),
        array(.1, .1 ,.2, .1, .4 ,.1, 'Q4'),
        array(.1, .1 ,.4, .1, .2 ,.1, 'Q5'),
        array(.1, .1 ,.4, .1, .2 ,.1, 'Q6'),
        array(.3, .1 ,.1, .1, .1 ,.3, 'Q7'),
        array(.1, .1 ,.1, .1, .4 ,.2, 'Q8'),
        array(.1, .2 ,.1, .1, .1 ,.4, 'Q9'),
        array(.2, .2 ,.1, .2, .1 ,.2, 'Q10'),
        array(.1, .1 ,.4, .2, .1 ,.1, 'Q11'),
        array(.1, .1 ,.2, .3, .1 ,.2, 'Q12'),
        array(.4, .1 ,.1, .1, .1 ,.2, 'Q13'),
        array(.2, .1 ,.1, .2, .1 ,.3, 'Q14'),
        array(.1, .1 ,.1, .1, .4 ,.2, 'Q15')
    );

    $academic_professional_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $academic_professional_score += $_POST['Q' . strval($x)]*$weights[$x][0];
    }

    $physical_education_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $physical_education_score += $_POST['Q' . strval($x)]*$weights[$x][1];
    }

    $multi_cultural_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $multi_cultural_score += $_POST['Q' . strval($x)]*$weights[$x][2];
    }

    $performing_arts_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $performing_arts_score += $_POST['Q' . strval($x)]*$weights[$x][3];
    }

    $service_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $service_score += $_POST['Q' . strval($x)]*$weights[$x][4];
    }

    $special_interest_score = 0;
    for ($x = 1; $x <= 15; $x++) {
        $special_interest_score += $_POST['Q' . strval($x)]*$weights[$x][5];
    }

    echo $name . ",";
    echo "<h4>Your academic professional interest score was: " . $academic_professional_score;
    echo "<br>";
    echo "Your physical activity interest score was: " . $physical_education_score;
    echo "<br>";
    echo "Your multi-cultural activity interest score was: " . $multi_cultural_score;
    echo "<br>";
    echo "Your performing arts interest score was: " . $performing_arts_score;
    echo "<br>";
    echo "Your service interest score was: " . $service_score;
    echo "<br>";
    echo "Your special interest score was: " . $special_interest_score;
    echo "<br><br>";
    echo "As a result, we recommend you join these clubs: (Recommended clubs would follow here when we figure that out)</h3>"

    ?>
</div>

<!-- Footer -->
<footer id="footer">
    <div class="copyright">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
        </ul>
        <p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


