<?php

/*************************************************************************
 *
 * In-Class Checkpoint:  Chapter 5.4
 *
 * File Name: functions.php
 * Username:  danihu
 * Username:  owenja
 * Course:    CPTR 220
 * Date:      10-19-18
 */

function tablemaker($tablenum) {
    echo "<table style=\"margin: auto; \">";
    echo "<div style=\"text-align: center\">";
    echo "<h1>Multiplication Table For $tablenum</h1>";
    for ($i=1; $i<21; $i++) {
        echo "<tr><td style=\"text-align: right\">$tablenum x $i</td>
        <td style=\"text-align: left\">=". ($tablenum*$i) . " </td>
        </tr>";
    }
}
?>