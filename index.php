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
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header id="masthead" class="site-header layout-container">
        <a href="http://localhost/pages/DGL123--final-project">
            <img 
                class="site-header__logo" 
                src="https://simpsons.img100.chrisgeelhoed.com/images/logo.svg" 
                alt="Logo"
            >
        </a>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">

                            <div class="form__imageContainer">
                                <img 
                                    src="https://simpsons.img100.chrisgeelhoed.com/images/simpsons.jpg" 
                                    alt="Simpsons" class="form__image">
                            </div>

                            <div class="form__card">

                                <h3 class="form__heading">
                                    Select characters to show
                                </h3>

                                <form method="get">

                                    <ul class="form__items">
                                        <li class="form__item">
                                            <label for="homer">
                                                Homer Simpson
                                            </label>
                                            <input 
                                                id="homer" 
                                                type="checkbox" 
                                                name="homer" 
                                                <?php if(isset($_GET['homer'])) echo "checked='checked'"; ?> 
                                            >                                
                                        </li>
                                        <li class="form__item">
                                            <label for="marge">
                                                Marge Simpson
                                            </label>
                                            <input 
                                                id="marge" 
                                                type="checkbox" 
                                                name="marge"
                                                <?php if(isset($_GET['marge'])) echo "checked='checked'"; ?>
                                            >                                
                                        </li>
                                        <li class="form__item">
                                            <label for="bart">
                                                Bart Simpson
                                            </label>
                                            <input 
                                                id="bart" 
                                                type="checkbox" 
                                                name="bart"
                                                <?php if(isset($_GET['bart'])) echo "checked='checked'"; ?>
                                            >                                
                                        </li>
                                        <li class="form__item">
                                            <label for="lisa">
                                                Lisa Simpson                                                
                                            </label>
                                            <input 
                                                id="lisa" 
                                                type="checkbox" 
                                                name="lisa"
                                                <?php if(isset($_GET['lisa'])) echo "checked='checked'"; ?>
                                            >                                
                                        </li>
                                        <li class="form__item">
                                            <label for="maggie">
                                                Maggie Simpson 
                                            </label>
                                            <input 
                                                id="maggie" 
                                                type="checkbox" 
                                                name="maggie"
                                                <?php if(isset($_GET['maggie'])) echo "checked='checked'"; ?>
                                                >                                
                                        </li>
                                        <li class="form__item">
                                            <label for="moe">
                                                Moe 
                                            </label>
                                            <input 
                                                id="moe" 
                                                type="checkbox" 
                                                name="moe"
                                                <?php if(isset($_GET['moe'])) echo "checked='checked'"; ?>
                                            >                                
                                        </li>
                                    </ul>

                                    <input class="form__button" type="submit" value="Show Characters">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                            <?php require'characters.php'?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
