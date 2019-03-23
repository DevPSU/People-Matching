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
        <li><a href="Form.html">Interest Survey</a></li>
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
<section class="wrapper style1">
    <div class="inner">
        <h3>
        <?php

        $name = $_POST['name'];
        $email = $_POST['email'];

        $weights = array
        (
        array(0,0.5,0.5,-0.5,0,0,0,1,0.75,-0.5,1.5,-0.5,0,-0.25,-0.5,-0.25,0,1,-0.25,0.25, 'Q1'),
        array(0.25,0.25,0.25,0.5,0.25,0,0.25,0.25,0.25,0.25,0.25,0.25,0.25,0.25,0.25,0,0.25,0.25,0.25,0.25, 'Q2'),
        array(0.5,0,0,0.5,0,0,0,-0.25,-0.5,0.75,0,0.5,0,0,0,0.5,0,0,0.75,0, 'Q3'),
        array(0.75,0,0,0.25,0,0.25,0,-0.25,-0.25,0.75,0,0.5,0.5,0,0,0.25,0,0.25,0.75,0, 'Q4'),
        array(0,0,0,0,0,0,0,0,0,0.25,0,0,0,0,0.25,0,2,0,0,0, 'Q5'),
        array(0.5,0,0,0.25,0,0,0,0,0,0.25,-0.25,0,0,0,0.25,0.5,0,0,1,0, 'Q6'),
        array(0,0,0,0.25,0,0,0,0.25,3,0,0.5,0,0,0,0,0,0,0,0,0.25, 'Q7'),
        array(0.5,0.5,0,0.5,0.25,0.25,0.25,-0.25,-0.5,0.5,-0.25,0,0.25,0.25,0.25,0.25,0,0.25,0.5,0.25, 'Q8'),
        array(0,0,0,0,0.25,0.5,0.25,-0.5,-0.25,0.25,-0.5,0,1,1,0.25,0,0.25,0.75,0.25,0.25, 'Q9'),
        array(0,0.25,0.25,0,0,0.5,0.5,0.5,0,0,0,0.25,0,0.25,0.5,0.5,0.25,0.5,0,0.75, 'Q10'),
        array(0,0.25,0.5,0,0,0,0.5,0.75,0.25,0,0.5,0,0.5,0.25,0,0.25,0,0.5,0,0.25, 'Q11'),
        array(0,0,0,0,0,0,0.25,1,0,0,0,0,0,0.5,0,0.25,0,0,0,0, 'Q12'),
        array(.5,0.25,0,1,0.5,0.5,0.25,0,0,0.25,0,0,0.5,0,0,0,0.25,0.25,0.5,0, 'Q13'),
        array(0,0.25,0.5,0,0,0,0.5,0.5,0.25,0.25,0.75,0.25,0,0,0.5,0,0.5,0.25,0,0.25, 'Q14'),
        array(0,0,0,0,0,-0.25,0,-0.25,-0.5,0.25,-0.25,0.25,0,0,0,0.25,0,-0.25,0.25,0, 'Q15'),
        array(0,0,0,0,0,1.25,0,0,0,0,0,0.25,0,0.25,0,0,0,0.25,0,0, 'Q16'),
        array(0.5,0,0,0.5,0.5,0.5,0,0,0,0.25,0,0.5,0.5,0,0.25,0.5,0,0,0.25,0, 'Q17'),
        array(0,0,0,0.25,2,0,0,0,0,0.5,0,0.5,0.5,0.5,0.5,0.5,0,0,0,0, 'Q18'),
        array(0,0.25,1,0,0,0,1,1,1,0,1.25,0,0,0,0.25,0,0,0,0,0.5, 'Q19'),
        array(0,1,0.5,0,0,0,0.25,0.25,0,0,0,0.75,0,0.5,0.75,0.5,0,0,0,0.5, 'Q20')
        );


        $Adult_Learner_Community = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Adult_Learner_Community += $_POST['Q' . strval($x)]*$weights[$x - 1][0];
        }

        $BBH_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $BBH_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][1];
        }

        $BET_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $BET_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][2];
        }

        $Campus_Activities_Board = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Campus_Activities_Board += $_POST['Q' . strval($x)]*$weights[$x - 1][3];
        }

        $Campus_Pride = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Campus_Pride += $_POST['Q' . strval($x)]*$weights[$x - 1][4];
        }

        $Concert_Band = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Concert_Band += $_POST['Q' . strval($x)]*$weights[$x - 1][5];
        }

        $Criminal_Justice_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Criminal_Justice_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][6];
        }

        $Engineering_and_Innovation_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Engineering_and_Innovation_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][7];
        }

        $Gaming_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Gaming_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][8];
        }

        $Lion_Ambassadors = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Lion_Ambassadors += $_POST['Q' . strval($x)]*$weights[$x - 1][9];
        }

        $Math_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Math_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][10];
        }

        $My_Vote_Matters = 0;
        for ($x = 1; $x <= 20; $x++) {
            $My_Vote_Matters += $_POST['Q' . strval($x)]*$weights[$x - 1][11];
        }

        $Nittany_Pride = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Nittany_Pride += $_POST['Q' . strval($x)]*$weights[$x - 1][12];
        }

        $PhotoClub = 0;
        for ($x = 1; $x <= 20; $x++) {
            $PhotoClub += $_POST['Q' . strval($x)]*$weights[$x - 1][13];
        }

        $Psychology_Club_and_Psi_Chi = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Psychology_Club_and_Psi_Chi += $_POST['Q' . strval($x)]*$weights[$x - 1][14];
        }

        $Student_Government_Association = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Student_Government_Association += $_POST['Q' . strval($x)]*$weights[$x - 1][15];
        }

        $Spanish_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $Spanish_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][16];
        }

        $STEAM_Outreach_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $STEAM_Outreach_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][17];
        }

        $THON = 0;
        for ($x = 1; $x <= 20; $x++) {
            $THON += $_POST['Q' . strval($x)]*$weights[$x - 1][18];
        }

        $X_Ray_Club = 0;
        for ($x = 1; $x <= 20; $x++) {
            $X_Ray_Club += $_POST['Q' . strval($x)]*$weights[$x - 1][19];
        }

        if($Adult_Learner_Community > 15){
            //$Adult_Learner_Community;
            echo "We recommend that you support the Adult Learner Community.";
            echo "<br><br>";

        }
        if($BBH_Club > 15){
            //$BBH_Club;
            echo "We recommend that you join the BBH Club.";
            echo "<br><br>";

        }
        if($BET_Club > 15){
            //$BET_Club;
            echo "We recommend that you join the BET Club.";
            echo "<br><br>";

        }
        if($Campus_Activities_Board > 15){
            //$Campus_Activities_Board;
            echo "We recommend that you join the Campus Activities Board.";
            echo "<br><br>";

        }
        if($Campus_Pride > 15){
            //$Campus_Pride;
            echo "We recommend that you join Campus Pride.";
            echo "<br><br>";

        }
        if($Concert_Band > 15){
            //$Concert_Band;
            echo "We recommend that you join the Concert Band.";
            echo "<br><br>";

        }
        if($Criminal_Justice_Club > 15){
            //$Criminal_Justice_Club;
            echo "We recommend that you join the Criminal Justice Club.";
            echo "<br><br>";

        }
        if($Engineering_and_Innovation_Club > 15){
            //$Engineering_and_Innovation_Club;
            echo "We recommend that you join the Engineering and Innovation Club.";
            echo "<br><br>";

        }
        if($Gaming_Club > 15){
            //$Gaming_Club;
            echo "We recommend that you join the Gaming Club.";
            echo "<br><br>";

        }
        if($Lion_Ambassadors > 15){
            //$Lion_Ambassadors;
            echo "We recommend that you join the Lion Ambassadors.";
            echo "<br><br>";

        }
        if($Math_Club > 15){
            //$Math_Club;
            echo "We recommend that you join the Math Club.";
            echo "<br><br>";

        }
        if($My_Vote_Matters > 15){
            //$My_Vote_Matters;
            echo "We recommend that you join the My Vote Matters Club.";
            echo "<br><br>";

        }
        if($Nittany_Pride > 15){
            //$Nittany_Pride;
            echo "We recommend that you join Nittany Pride, the student run newspaper.";
            echo "<br><br>";

        }
        if($PhotoClub > 15){
            //$PhotoClub;
            echo "We recommend that you join the Photo Club.";
            echo "<br><br>";

        }
        if($Psychology_Club_and_Psi_Chi > 15){
            //$Psychology_Club_and_Psi_Chi;
            echo "We recommend that you join the Psychology Club and Psi_Chi.";
            echo "<br><br>";

        }
        if($Student_Government_Association > 15){
            //$Student_Government_Association;
            echo "We recommend that you join the Student Government Association.";
            echo "<br><br>";

        }
        if($Spanish_Club > 15){
            //$Spanish_Club;
            echo "We recommend that you join the Spanish Club.";
            echo "<br><br>";

        }
        if($STEAM_Outreach_Club > 15){
            //$STEAM_Outreach_Club;
            echo "We recommend that you join the STEAM Outreach Club.";
            echo "<br><br>";

        }
        if($THON > 15){
            //$THON;
            echo "We recommend that you join a THON organization.";
            echo "<br><br>";

        }
        if($X_Ray_Club > 15){
            //$X_Ray_Club;
            echo "We recommend that you join the X-Ray Club.";
            echo "<br><br>";

        }

        ?>
        </h3>
    </div>
</section>>
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


