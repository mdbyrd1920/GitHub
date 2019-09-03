<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes[]= [
'quote' => 'The blacker the berry, the sweeter the juice. I say the darker the flesh then the deeper the roots.',
'source' => 'Tupac Shakur',
'citation' => 'Keep Ya Head Up',
'year' => '1993'

];

$quotes[]= [
'quote' => "Don't be in a hurry to condemn because he doesn't do what you do or think as you think or as fast. There was a time when you didn't know what you know today.",
'source' => 'Malcom X',
'citation' => 'Message to the Grassroots',
'year' => '1963'


];

$quotes[]= [
'quote' => 'The best thing you can do for a person is to inspire them.',
'source' => 'Nipsey Hussle',
'citation' => 'Revolt TV',
'year' => '2019'


];

$quotes[]= [
'quote' => 'Service to others is the rent you pay for your room here on earth.',
'source' => 'Muhammad Ali',
'citation' => 'Time Magazine',
'year' => '1978'


];

$quotes[]= [
'quote' => "Truth cannot be concealed. Truth is ‘that which is.’ It is specific energy in the universe. It literally begs to be revealed.",
'source' => 'Dr. Frances Cress Welsing',
'citation' => 'The Keys to the Colors',
'year' => '1991'

];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($quotes) {
global $quotes;
    // return the random item
return $quotes [array_rand($quotes)];

};
    // generate a random number between 0 and the last index in the array parameter
      // use the random number and box notation to grab a random item from the array
// Create the printQuote funtion and name it printQuote

  function printQuote($favQuotes) {
     // create a variable that calls the getRandomQuote() function, passing in the quotes array as an argument
  $favQuotes = getRandomQuote($quotes);

     // create a variable that initiates your HTML string
     // using the template in the project instructions, add the two default quote properties

  $displayQuotes = '';
  $displayQuotes =   '<p class="quote">' . $favQuotes ['quote'] . '</p>';
  $displayQuotes .=  '<p class="source">' . $favQuotes ['source'].
   '<span class= "citation">' . $favQuotes ['citation'] . '</span>' .
   '<span class="year">' . $favQuotes ['year'] . '</span> </p>';
   // if the quote contains a citation value, add it the string
   // if the quote contains a year value, add it the string
   // close the string with the necessary closing HTML tags
   if ($favQuotes ['citation'] && ['year'] == Null) {
     '<p class="quote">' . $favQuotes ['quote'] . '</p>';
     $displayQuotes = '<p class="source">' . $favQuotes ['source'] . '</p>';

   }

// display the complete HTML string
echo $displayQuotes;



  }

?>
