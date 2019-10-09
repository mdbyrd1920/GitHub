<?php

// Exceeds: Generate random questions with unique answers


//Loop for required number of questions
for ($i = 1; $i<=10; $i++) {

// Get random numbers to add
$leftSide= rand(1,50);
$rightSide= rand(1,50);

// Calculate correct answer
$correctAnswer =  $leftSide + $rightSide;

// Get incorrect answers within 10 numbers either way of correct answer
$_1stIncorrectAnswer = $correctAnswer + rand(1,10);
$_2ndIncorrectAnswer = $correctAnswer + rand(-1,-10);

// Add question and answer to questions array
$questions = [
  $leftSide,
  $rightSide
];

$answers = [
  $correctAnswer,
  $_1stIncorrectAnswer,
  $_2ndIncorrectAnswer
];

}
