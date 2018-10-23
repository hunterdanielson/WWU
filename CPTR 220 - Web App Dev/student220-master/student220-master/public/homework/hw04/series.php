

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW #4 series</title>
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


$csvFile = 'library_series.csv';

$csv = readCSV($csvFile);


$fcsv = removedupps($csv);
$lengthnodup = count($fcsv) - 1;
print_r($lengthnodup);

table($fcsv);
/*
echo '<pre>';
print_r($fcsv);
echo '</pre>';
*/


?>