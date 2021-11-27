<!DOCTYPE html>
<!-- 
    Document Details:
    Course:         DGL-123 - Intro To PHP
    Module:         Final Project
    Filename:       index.php
    Author:         Iliyan Darediya
    Date:           18 Nov 2021
 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Characters test</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
        echo "Loading characters.php<br>";
        require 'characters.php';  // code to be tested

        $json = file_get_contents('characters.json');
        //Decode json
        $characersArray = json_decode($json, true);

        echo "Running Tests for characters.php<br>";


        // Test functions
        //=============================================================================
        function testCreateDiv($name,$array,$expectedResult) {
            if (createDiv($name,$array) === $expectedResult) {
                echo 'Test PASSED with input '.$name.'<br>';
            } else {
                echo "FAILED test with input \"$name\"<br>";
            }
        }

        function testAdd($value,$array,$elementName,$expectedResult) {
            if (add($value,$array,$elementName) === $expectedResult) {
                echo 'Test PASSED with input '.$elementName.'<br>';
            } else {
                echo "FAILED test with input \"$elementName\"<br>";
            }
        }
        
        
        $HomerOutput = '
        <li class="characters__itemContainer">
            <div class="characters__item">
                <img src="https://simpsons.img100.chrisgeelhoed.com/images/homer.png" alt="homer" class="characters__image">
                <div class="characters__info">
                    <h3 class="characters__name">
                        Homer Simpson
                    </h3>
                    <div class="characters__age characters__attribute">
                        <b>Age:</b>40
                    </div>
                    <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Nuclear Safety Inspector
                    </div>
                    <div class="characters__voiced_by characters__attribute">
                        <b>Voiced by:</b>Dan Castellaneta
                    </div>
                </div>
            </div>
        </li>
        ';
        $HomerAdd = '
        <div class="characters__age characters__attribute">
            <b>Age:</b>40
        </div>
        ';
        testCreateDiv('homer',$characersArray,$HomerOutput);
        testAdd('age',$characersArray['homer'],'Age',$HomerAdd);
        
        //End of testing
        echo "Completed Running Tests for characters.php<br>";
    ?>
</body>
</html>
