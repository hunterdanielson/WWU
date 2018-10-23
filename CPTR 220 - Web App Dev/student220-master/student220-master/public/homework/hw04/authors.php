

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HW #4 authors</title>
    <link rel="stylesheet" type="text/css" href="hw4.css">
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <!-- links to the other things -->
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
// specifies what file to read in 
$csvFile = 'library_authors.csv';

// call function to read
$csv = readCSV($csvFile);






$fcsv = removedupps($csv);

$lengthnodup = count($fcsv) - 1;
print_r($lengthnodup);

table($fcsv);
/*
//display to see whats going on
echo '<pre>';
print_r($fcsv);
echo '</pre>';
*/



?>

</html>