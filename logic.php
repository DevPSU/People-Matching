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
echo "<br><br>";
echo "Your academic professional interest score was: " . $academic_professional_score;
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
echo "As a result, we recommend you join these clubs: (Recommended clubs would follow here when we figure that out)"
?>