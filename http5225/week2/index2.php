<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <h1>PHP and Creating Output</h1>

    <?php echo '<h1>whatever</h1>' ;
    
    echo '<p>The PHP echo command can be used to create output.</p>'
    ?>
  
  

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>

    <img src="php-logo.png">

    <?php

        echo '<img src="http://google.com/imhgae';

    ?>

    <img src="<?php echo 'httlp://google.com.image' ?>" alt="<?php echo 'TAG' ?>">

    <br><br><br>
    
    <?php 
    $name = 'Cary Agos'; //string both "" and '' work here
    $lastName = 'Agos'; //string

    echo "hello, " . $name; //concatenate them by using "." , but in js, it will be "+"

    //$person = array(''.''.'')

    $person['first'] = 'Cary';
    $person['last'] = 'Agos';
    $person['email'] = 'outlook.office.com/mail/';
    $person['web'] = 'google.com';

    echo "Hello, " .  $person['first'] . "<br>";


    echo '<a href="http://' . $person['email'] . '"> Email to ' . $name . '</a><br>';


    echo '<a href="http://' . $person['web'] . '"> Web</a>';


    ?>


    

  </body>
</html>