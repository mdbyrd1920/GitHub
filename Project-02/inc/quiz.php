<?php
//PHP Techdegree Project 2: Build a Quiz App in PHP
session_start();

include ('generate_questions.php');

//Referenced code from Treehouse Browser Persistent Data Course
$total = 10;
$question = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty($question)) {
  session_destroy();
  $question = 1;
}

if (isset($_POST['answer'])) {
  $_SESSION['answer'][$question-1] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
}

if ($question <= 10) {
// Show which question they are on
  echo "<p class='breadcrumbs'> Question ". $question . " of $total </p>";

//Provided answer is evaluated upon button submissions
  echo '<form method = "post" action="index.php?p='. ($question + 1) . '" />';
// Show random question
  echo "<p class='quiz'> What is " . $leftSide . "+" . $rightSide . "? </p>";


// Shuffle answer buttons
shuffle($answers);
  echo "<input type='submit' class='btn' name='answer' value=' " . $answers[0] . "'>";
  echo "<input type='submit' class='btn' name='answer' value=' " . $answers[1] . "'>";
  echo "<input type='submit' class='btn' name='answer' value=' " . $answers[2] . "'>";
  echo "<input type='hidden' name='correctAnswer' value='" . $correctAnswer . "'>";
  }

if (!isset($_SESSION['rightAnswered'])) {
      $_SESSION['rightAnswered'] = 0;
  }

//Conditional statement allows correct answers are marked as correct,
//and incorrect answers are marked as incorrect
if (isset($_POST['answer']) && isset($_POST['correctAnswer'])) {
      $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
      $_SESSION['correctAnswer'] = filter_input(INPUT_POST, 'correctAnswer', FILTER_SANITIZE_NUMBER_INT);

//Toasts for correct and incorrect answer
if (($_SESSION['answer'] == $_SESSION['correctAnswer'])) {
      $_SESSION['rightAnswered']++;
  echo '<h1>Correct!</h1>';
  }
elseif ($_SESSION['answer'] !== $_SESSION['correctAnswer']){
  echo '<h2>Incorrect.</h2>';
          }
  }

//Final score displayed
if ($question == 11) {
  echo '<h1> Your final score... '. $_SESSION['rightAnswered'] . ' out of ' . $total . ' correct!</h1>';
  echo "<form action='index.php' method='post'>";

//Exceeds: Users may try the quiz again
echo "<input type='submit' class='btn' name='restart' value='Click to re-take quiz'>";
}
