<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <h1>
        Let’s Learn Some PHP for Web Development <br>
        <?php
            echo "Hello, World!";
        ?>
    </h1>

    <p>
        This is a simple PHP script embedded in HTML.<br>
        <?php 
            echo "Awesome! It's working fine, easy peasy 😎"; 
        ?>
    </p>

    <p>
        <?php 
            // This PHP block outputs a message
            echo "Working in a paragraph inside HTML.";
        ?>
    </p>

    <?php 
        // Variables and Data types in PHP
        /*$name = "Abdul Majeed";
        $age = 25;
        $isDev = true;

        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Developer: " . ($isDev ? "Yes" : "No") . "</p>";*/

        // general syntax of echo and varibales
        $name = "Abdul Majeed";
        $age = 27;
        echo "<p>my Age is = $age</p><br>";
        echo "<h1>My Name is = $name</h1>";
        echo "<h2>I live in pakistan</h>";

        // scalar data types: integer, float, string, boolean and Arry
        $string = "Sana Ullah";
        $age = 26;
        $float = 26.5;
        $boolean = true;
        $array = array("HTML", "CSS", "JS", "PHP");
        $names = ["Sana","Majeed","Wajid"];
        $try = $age;

        echo "<p>My name is $string</p>";
        echo "<p>My age is $age</p>";
        echo "<h1>My float value is $float</h1>";
        echo "<h2>My boolean value is =  .($boolean ? True : False ). </h2>";
        echo "<h2>My array values are:" .implode(", " ,$array) . "</h2>";
        
        
        echo "<h2>My names are: " .implode(", " ,$names) . "</h2>";


    ?>
    <p>I am <?php echo $name ?>, learning PHP</p>
    <h1>My age is <?php echo $try ?></h1>
</body>
</html>
