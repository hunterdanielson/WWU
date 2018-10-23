<?php

/*************************************************************************
 *
 * In-Class Checkpoint:  Chapter 6.1
 *
 * File Name: photos.php
 * Username:  danihu
 * Username:  boskti
 * Course:    CPTR 220
 * Date:      10/22/18
 */

?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Display Random Picture</title>
    <link rel="stylesheet" type="text/css" href="photos.css">
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <!-- Google Searches -->
        <nav>
            <a href="https://www.google.com/search?q=Walla Walla University">WWU</a> | 
            <a href="https://www.google.com/search?q=Pink Pirates">Pink Pirates</a> | 
            <a href="https://www.google.com/search?q=Random Name Generator">Random Name Generator</a>
        </nav>
        <hr>
    </header>

    <h1>Photo Links</h1>

    <!-- TODO Create Three Photos Links -->
    <ul>
        <li><a href="https://picsum.photos/200/300/?random">Random Photo</a></li>
        <li><a href="https://picsum.photos/200/300/?image=459">Grass light Photo</a></li>
        <li><a href="https://picsum.photos/200/300/?image=8">Totally Legit apple Photo</a></li>
        <li><a href="https://picsum.photos/200/300/?image=427">Palm light Photo</a></li>

    </ul>

    <p>

    <hr>


    <!-- TODO Add HTML Form to Get Random Photos -->
    <h1>Photo Form</h1>
    <form action="https://picsum.photos/200/300/" method="get">
        <input type="text" name="gravity" id="frm1_submit" />
    </form>

    
    <footer>
        <hr>
        <p>
            <!-- Validation Links -->
            <a href="https://validator.w3.org/check/referer">validate HTML</a> | 
            <a href="http://jigsaw.w3.org/css-validator/check/referer">validate CSS</a>
        </p>    
    </footer>

</body>

</html>