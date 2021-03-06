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
    echo createDiv('homer',$characersArray);       
}
if(isset($_GET['marge'])){
    echo createDiv('marge',$characersArray);
}
if(isset($_GET['bart'])){
    echo createDiv('bart',$characersArray);
}
if(isset($_GET['lisa'])){
    echo createDiv('lisa',$characersArray);
}
if(isset($_GET['maggie'])){
    echo createDiv('maggie',$characersArray);
}
if(isset($_GET['moe'])){
    echo createDiv('moe',$characersArray);
}

//createDiv will take the name and array as parameter and will output the character div in the html file
function createDiv($name,$array){
    //loop through the array
    foreach($array as $character){
        //find the element we want to work with
        if($name == strtolower($character['first_name'])){
            //create a div with the image name values
            $li = '
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
            ';
            //add age, occupation and voiced by values to the div
            $li.= add('age',$character,'Age');
            $li.= add('occupation',$character,'Occupation');
            $li.= add('voiced_by',$character,'Voiced by');
            
            //Close the divs and list items
            $li.='</div></div></li>';
            //return the div
            return $li;
        }
    }
}
//add will take in the value, array and elementName as parameter
function add($value,$array,$elementName){
    //Check if the array key exists and is not empty
    if(array_key_exists($value,$array) && !empty($array[$value])){
        //return a div with the correct value and element name
        return'
        <div class="characters__'.$value.' characters__attribute">
            <b>'.$elementName.':</b>'.$array[$value].'
        </div>
        ';
    }
}