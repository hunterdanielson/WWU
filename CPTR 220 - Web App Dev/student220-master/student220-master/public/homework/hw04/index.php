<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW #4 index</title>
    <link rel="stylesheet" type="text/css" href="hw4.css">
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <!-- nav links -->
        <nav>
            <a href="authors.php">Authors</a> | 
            <a href="books.php">Books</a> | 
            <a href="series.php">Series</a>
        </nav>
        <hr>
    </header>
</body>

<?php

    include('sort.php');
    
    $authors = 'library_authors.csv';
    $books = 'library_books.csv';
    $series = 'library_series.csv';
    

    echo '<h1> Authors:' . count(removedupps(readCSV($authors))) . '</h1>';
    
    echo '<h1> Books:' . count(removedupps(readCSV($books))) . '</h1>';

    echo '<h1> Series:' . count(removedupps(readCSV($series))) . '</h1>';


?>
</html>

