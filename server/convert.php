<?php
$changeNumber = 307377;
echo ($changeNumber) . "<br>";


function callNumber($handleChangeNumber)
{
    $number_holder = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

    if ($handleChangeNumber < 12) {
        return " " . $number_holder[$handleChangeNumber];
    } else if ($handleChangeNumber < 20) {
        return callNumber($handleChangeNumber - 10) . "belas";
    } else if ($handleChangeNumber < 100) {
        return callNumber($handleChangeNumber / 10) . "puluh" . callNumber($handleChangeNumber % 10);
    } else if ($handleChangeNumber < 200) {
        return "seratus" . callNumber($handleChangeNumber - 100);
    } else if ($handleChangeNumber < 1000) {
        return callNumber($handleChangeNumber / 100) . "ratus" . callNumber($handleChangeNumber % 100);
    } else if ($handleChangeNumber < 2000) {
        return "seribu" . callNumber($handleChangeNumber - 1000);
    } else if ($handleChangeNumber < 10000) {
        return callNumber($handleChangeNumber / 1000) . "ribu" . callNumber($handleChangeNumber % 1000);
    } else if ($handleChangeNumber < 20000) {
        return callNumber($handleChangeNumber / 1000) . "ribu" . callNumber($handleChangeNumber % 1000);
    } else if ($handleChangeNumber < 100000) {
        return callNumber($handleChangeNumber / 1000) . "ribu" . callNumber($handleChangeNumber % 1000);
    } else if ($handleChangeNumber <= 999999) {
        return callNumber($handleChangeNumber / 1000) . "ribu" . callNumber($handleChangeNumber % 1000);
    }
}
echo callNumber($changeNumber);