<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';

        echo '<a href= "' . $linkURL . '"> ' . $linkName . ' </a>';

        if($linkName = '')
        {
            echo '<h2>' . $linkURL . '</h2>';
        }
        else
        {
            echo '<h2>' . $linkName . '</h2>';
        }

        if($linkImage)
        {
            echo '<img src="' . $linkImage . '" width = "200">';
        }
       


        ?>

        <br>
        <br>
        <h2>Challenge 1: Welcome to the Quirky Zoo Management System!</h2> 
        <?php

         //$hour = date('G');

         $hour = ceil(rand(1,24));

         echo '<h2>Now is : ' . $hour . '</2>';

         $breakfast = 'Bananas, Apples, and Oats';
         $lunch = 'Fish, Chicken, and Vegetables';
         $dinner = 'Steak, Carrots, and Broccoli';

        if($hour >= 5 && $hour <= 9){
            echo '<h2> Animals shoud be fed with : ' . $breakfast . '</h2>';
        }
        else if($hour >= 12 && $hour <= 14){
            echo '<h2> Animals shoud be fed with : ' . $lunch . '</h2>';
        }
        else if($hour >= 19 && $hour <= 21){
            echo '<h2> Animals shoud be fed with : ' . $dinner . '</h2>';
        }
        else{
            echo '<h2> Animals Not being fed yet </h2>';
        }

        ?>

        <br>
        <br>
        <h2>Challenge 2: PHP Control Structures - The Magic Number Game</h2>

        <?php

        $randomNumber = ceil(rand(1,100));


        echo '<h2>Modulus list is: ' . $randomNumber . '</2>';

        if ($randomNumber % 3 === 0 && $randomNumber % 5 === 0) {
            echo '<h2>FizzBuzz</h2>';
        } elseif ($randomNumber % 3 === 0) {
            echo '<h2>Fizz</h2>';
        } elseif ($randomNumber % 5 === 0) {
            echo '<h2>Buzz</h2>';
        } else {
            echo '<h2>' . $randomNumber . '</h2>';
        }


        ?>



    </body>
</html>