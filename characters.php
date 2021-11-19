<?php
/* 
    Document Details:
    Course:         DGL-123 - Intro To PHP
    Module:         Final Project
    Filename:       characters.php
    Author:         Iliyan Darediya
    Date:           18 Nov 2021
*/
//store the contents of characters.json file
$json = file_get_contents('characters.json');
//Decode json
$characersArray = json_decode($json, true);

//isset's to check if the values were changed
if(isset($_GET['homer'])){
    //Call createDiv with the name and array parameter
    createDiv('homer',$characersArray);       
}
if(isset($_GET['marge'])){
    createDiv('marge',$characersArray);
}
if(isset($_GET['bart'])){
    createDiv('bart',$characersArray);
}
if(isset($_GET['lisa'])){
    createDiv('lisa',$characersArray);
}
if(isset($_GET['maggie'])){
    createDiv('maggie',$characersArray);
}
if(isset($_GET['moe'])){
    createDiv('moe',$characersArray);
}

//createDiv will take the name and array as parameter and will output the character div in the html file
function createDiv($name,$array){
    //loop through the array
    foreach($array as $character){
        //find the element we want to work with
        if($name == strtolower($character['first_name'])){
            //echo the image and info by getting the data from the provided array
            echo '
            <li class="characters__itemContainer">
                <div class="characters__item">
                    <img 
                        src=https://simpsons.img100.chrisgeelhoed.com/images/'.$name.'.png 
                        alt="'.$name.'" 
                        class="characters__image"
                    >
                    <div class="characters__info">
                        <h3 class="characters__name">
                            '.$character['first_name'].' '.$character['last_name'].'
                        </h3>
                    
                        <div class="characters__age characters__attribute">
                            <b>Age:</b>'.$character['age'].'
                        </div>
                        <div class="characters__occupation characters__attribute">
                            <b>Occupation:</b>'.$character['occupation'].'
                        </div>
                        <div class="characters__voicedBy characters__attribute">
                            <b>Voiced by:</b> '.$character['voiced_by'].'
                        </div>
                    </div>
                </div>
            </li>
            ';
        }
    }
}