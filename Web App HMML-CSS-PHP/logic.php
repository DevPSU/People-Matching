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

        if($Adult_Learner_Community > 11){
            //$Adult_Learner_Community;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Adult Learner Community</h3>";
            echo '<br>';
            echo "<strong>This organization promotes the interests of adult learners and aims to increase the awareness of the adult learner population to the campus community. This group meets through the Success Center. Please contact Ruth Herstek at rah32@psu.edu for meeting dates.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($BBH_Club > 11){
            //$BBH_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>BBH Club</h3>";
            echo '<br>';
            echo "<strong>The Biobehavioral Health (BBH) Club is an academic club connected with the BBH field of study. Biobehavioral health is a unique interdisciplinary degree that examines health from the biopsychosocial model, or rather a combination of biology, personal decision making and social determinant. The Biobehavioral health club brings in speakers to help individuals plan for their future - whether that future is as an epidemiologist, physician assistant, social worker, or one of the many other professions BBH majors can pursue.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($BET_Club > 11){
            //$BET_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>BET Club</h3>";
            echo '<br>';
            echo "<strong>The Biomedical Engineering Technology (BET) Club seeks to provide a means of educational experience in the field of biomedical engineering technology and related fields that is not available in the classroom.  Members can look forward to guest speakers, presentations, tours of medical facilities, and networking with members of the BET field.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Campus_Activities_Board > 11){
            //$Campus_Activities_Board;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Campus Activities Board</h3>";
            echo '<br>';
            echo "<strong>This club allows students to assist the Student Life Office in planning fun campus events and activities. Members learn about the exciting world of campus entertainment! Some of the activities planned by CAB include: Back to School Bash, Penn State in Pittsburgh series, Club Rush, and Spring Fling week. Please come to the Student Life office if you are interested in joining this student organization.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Campus_Pride > 11){
            //$Campus_Pride;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Campus Pride</h3>";
            echo '<br>';
            echo "<strong>Campus Pride’s purpose is to create diversity among students, faculty and staff, in order to create a safe and welcoming environment for people of the LGBTQIA+ community and their allies.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Concert_Band > 11){
            //$Concert_Band;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Concert Band</h3>";
            echo '<br>';
            echo "<strong>Concert band unites individuals with a common interest of music. The club promotes the creation, appreciation, and consumption of music.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Criminal_Justice_Club > 11){
            //$Criminal_Justice_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Criminal Justice Club</h3>";
            echo '<br>';
            echo "<strong>The purpose of the Criminal Justice Club of Penn State – New Kensington is to enhance education within the field of criminal justice, provide a bridge between civilians and law enforcement, and to provide a more accurate perception of the reality of the criminal justice system.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Engineering_and_Innovation_Club > 11){
            //$Engineering_and_Innovation_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Engineering and Innovation Club</h3>";
            echo '<br>';
            echo "<strong>The Engineering & Innovation Club seeks to examine the past, present, and future of engineering, alongside projects chosen by club members.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Gaming_Club > 11){
            //$Gaming_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Gaming Club</h3>";
            echo '<br>';
            echo "<strong>Our main purpose is to showcase a variety of games in an inclusive setting, games that provide an exclusive environment will be prohibited. We wish to provide an opportunity for people to learn about new games, as well as introduce favored games to others.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Lion_Ambassadors > 11){
            //$Lion_Ambassadors;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Lion Ambassadors</h3>";
            echo '<br>';
            echo "<strong>Lion Ambassadors work closely with the Enrollment Management Office to promote the University and the campus to prospective students. They give campus tours and assist with other recruitment activities. Additionally, Lion Ambassadors represent the campus in the community through volunteer and service activities. Membership involves an interview and maintenance of a minimum grade-point average.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Math_Club > 11){
            //$Math_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Math Club</h3>";
            echo '<br>';
            echo "<strong>Math Club is an active group of students who meet regularly with Math Faculty in support of students and their math homework, struggles, and fun!</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($My_Vote_Matters > 11){
            //$My_Vote_Matters;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>My Vote Matters Club</h3>";
            echo '<br>';
            echo "<strong>My Vote Matters is an organization that advocates for student voting and gaining knowledge about politics.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Nittany_Pride > 11){
            //$Nittany_Pride;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Nittany Prid</h3>";
            echo '<br>';
            echo "<strong>Nittany Pride is the student-run news organization of Penn State New Kensington, consisting of print and digital multimedia components. The Nittany Pride student newspaper functions as a club that is open to students from all academic disciplines. While the organization is advised by Communications faculty, the editorial decisions and news operations are carried out entirely by students, who gain valuable experience in print and online journalism.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($PhotoClub > 11){
            //$PhotoClub;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Photo Club</h3>";
            echo '<br>';
            echo "<strong>PhotoClub is a “safe place” to share your passion of photography with fellow students. We go on monthly excursions to take pictures and share them with everyone. We hold weekly meetings to learn about new software such as light room and Photoshop, and how to use them correctly when editing pictures. We are also looking to hold an art show next year as a way of showcasing our work.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Psychology_Club_and_Psi_Chi > 11){
            //$Psychology_Club_and_Psi_Chi;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Psychology Club and Psi Chi</h3>";
            echo '<br>';
            echo "<strong>The purpose of the Psych Club is to promote psychological concepts in an interactive format for all students at Penn State New Kensington. Providing a casual approach to viewing and understanding the concepts of psychology in an academic setting, the Psychology Club seeks to create a fun and inclusive environment where learning about psychology can be a fun and enjoyable experience. Psi Chi is an international honor society whose purpose shall be to encourage, stimulate, and maintain excellence in scholarship of the individual members in all fields, particularly in psychology, and to advance the science of psychology. Student Governmen</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Student_Government_Association > 11){
            //$Student_Government_Association;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Student Government Association</h3>";
            echo '<br>';
            echo "<strong>The purpose of SGA is to act in the best interests of the student body by representing student in matters that pertain to them, encouraging extracurricular activities, supporting clubs and organizations, and encouraging communication between the student body, faculty, administration, and staff. The SGA organizes the monthly General Assembly meetings and assists in the coordination of fundraising and events on campus. The president of the SGA is also the co-chair of the Student Activity Fee committee. For more information, call 724-334-6141.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($Spanish_Club > 11){
            //$Spanish_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>Spanish Club</h3>";
            echo '<br>';
            echo "<strong>This club stems from the need to help others learning Spanish and learning about the countries and cultures of the Spanish-speaking world. We want to expose members and other PSNK students to these cultures, expose them to issues pertaining to Hispanics/Latinos and create activities that promote learning in a fun, inclusive environment.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($STEAM_Outreach_Club > 11){
            //$STEAM_Outreach_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>STEAM Outreach Club</h3>";
            echo '<br>';
            echo "<strong>STEAM Outreach club's goal is to engage students and the community with STEAM related activities to inform people about STEAM fields and opportunities. S - Science, T- technology, E - Engineering, A - Arts, M - Math.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($THON > 11){
            //$THON;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>THON organization</h3>";
            echo '<br>';
            echo "<strong>THON is the largest student run philanthropy in the world, and we raise money for the fight against pediatric cancer. This is done through various fundraisers during the year and culminates in a 46-hour, no-sitting, no-sleeping dance marathon at University Park. All money we raise helps pay for the medical bills for sponsored families, and also pays for lab time to help find a cure and treatments to help better fight this disease.</strong>";
            echo '</div>';
            echo "<br>";

        }
        if($X_Ray_Club > 11){
            //$X_Ray_Club;
            echo '<div class="box">';
            echo '<span><img src="images/Shield.png" align="right" width="80" height="88.4"/></span>';
            echo "<h3>X-Ray Club</h3>";
            echo '<br>';
            echo "<strong>This club provides educational experiences for those interested in the field of radiology, including educational trips. The group also provides information to high school students interested in the field.</strong>";
            echo '</div>';
            echo "<br>";

        }

        ?>
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


