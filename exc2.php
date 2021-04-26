<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$questions = array("Question 1: Where is the University of Kansas?", "Question 2: Who is Bill Self?", "Question 3: What is the capitol of China?",
                    "Question 4: What is the most important statistical distribution for real-life applications?", "Question 5: What element has an atomic mass of about 12 AMU?");
  
$solutions = array("Lawrence", "Basketballcoach", "Shanghai", "Normal", "Carbon");
$answers = array($_POST["city"], $_POST["coach"], $_POST["capitol"], $_POST["stats"], $_POST["amu"]);
$numTotal = 5;
$numRight = 0;

for ($i = 0; $i < $numTotal; $i ++) {
    echo ($questions[$i].'<br>');
    echo("You answered: ".$answers[$i].'<br>');
    echo("The correct answer was: ".$solutions[$i]. '<br><br>');

    if ($answers[$i] === $solutions[$i]) {
        $numRight ++;
    }
}
echo("You got ".$numRight." correct out of 5.".'<br>');
$percent = ($numRight/$numTotal)*100;
echo("That means you got a ".$percent."%".'<br>');

?>