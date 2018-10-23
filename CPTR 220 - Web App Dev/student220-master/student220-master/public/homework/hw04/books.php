

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW #4 books</title>
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

$csvFile = 'library_books.csv';
$csvFile2 = 'library_authors.csv';
$csvFile3 = 'library_series.csv';

$csv = readCSV($csvFile);
$csv2 = readCSV($csvFile2);
$csv3 = readCSV($csvFile3);

$fcsv = removedupps($csv);
$lengthnodup = count($fcsv) - 1;
print_r($lengthnodup);

//var_dump(joincsv($csv,$csv2);
table(booksjoin($csv,$csv2,$csv3));
//table($fcsv);
/*
echo '<pre>';
print_r($fcsv);
echo '</pre>';
*/


?>