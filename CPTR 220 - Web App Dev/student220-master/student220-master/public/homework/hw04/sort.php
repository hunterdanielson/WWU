<?php
// function to search and remove duplicates
function removedupps($scsv) {
    $sorted[] = $scsv[0];
    for($i = 0; $i < count($scsv); $i++) {
        $flag = true;
        for($j = 0; $j < count($sorted); $j++) {
            if($scsv[$i][1]==$sorted[$j][1]&&$scsv[$i][2]==$sorted[$j][2]) {
                $flag = false;
            }
        }

        if($flag) {
            array_push($sorted,$scsv[$i]);
        }
    }
    return $sorted;
}

// function to read in csv file and put into an array
function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}


function table($scsv) {
    echo '<table>';
    echo '<tr>';
    for($i=0;$i<count($scsv[0]);$i++) {
        echo '<th>' . $scsv[0][$i] . '</th>';
    }
    echo '</tr>';
    for($i=1;$i<count($scsv);$i++) {
        echo '<tr>';
        for($j=0;$j<count($scsv[0]);$j++) {
            echo '<td>' . $scsv[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}



function booksjoin($bcsv,$acsv,$sercsv) {
    $joined = array(array('Book title', 'Series name', 'Author', 'Number of pages', 'ISBN', 'Date published', 'Publisher' ));
    for($i=1;$i<count($bcsv);$i++){
        unset($temp);
        $temp = array($bcsv[$i][1]);
        $authors = '';
        $series = '';
        for($j=1;$j<count($sercsv);$j++){
            if($bcsv[$i][0] == $sercsv[$j][0]){
                $series = $sercsv[$j][1];

            }
        }
        for($j=1;$j<count($acsv);$j++){
            if($bcsv[$i][0] == $acsv[$j][0]){
                $authors = $acsv[$j][1] . ' ' . $acsv[$j][2] . ', ';
                
            }
        }
        array_push($temp,$series,$authors,$bcsv[$i][4],$bcsv[$i][5],$bcsv[$i][3],$bcsv[$i][2]);

        array_push($joined, $temp);

    }
return $joined;
}



?>