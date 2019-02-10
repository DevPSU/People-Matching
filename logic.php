<?php

$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$name = $_POST['first'] . " " . $_POST['last'];
$email = $_POST['email'];

echo $name . ",";
echo "<br><br>";
echo "Your stem score was: " . ($Q1 + $Q3); //Plus all of the questions we decide for the stem (or anything) category
echo "<br>";
echo "Your physical activities score was: " . ($Q2 + $Q4);
echo "<br><br>";
echo "As a result, we recommend you join these clubs: (Recommended clubs would follow here when we figure that out)"
?>