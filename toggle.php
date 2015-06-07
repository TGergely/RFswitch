<?php
$rfPath = '/var/www/rfoutlet/codesend ';
$outletLight = $_POST['outletId'];
$outletStatus = $_POST['outletStatus'];

if ($outletLight == "1" && $outletStatus == "on") {
    $rfCodes = array(16106836);
} else if ($outletLight == "1" && $outletStatus == "off") {
    $rfCodes = array(16106832);
} else if ($outletLight == "2" && $outletStatus == "on") {
    $rfCodes = array(16110676);
} else if ($outletLight == "2" && $outletStatus == "off") {
    $rfCodes = array(16110672);
} else if ($outletLight == "3" && $outletStatus == "on") {
    $rfCodes = array(16110916);
} else if ($outletLight == "3" && $outletStatus == "off") {
    $rfCodes = array(16110912);
} else if ($outletLight == "4" && $outletStatus == "on") {
    $rfCodes = array(351491);
} else if ($outletLight == "4" && $outletStatus == "off") {
    $rfCodes = array(351500);
} else if ($outletLight == "5" && $outletStatus == "on") {
    $rfCodes = array(357635);
} else if ($outletLight == "5" && $outletStatus == "off") {
    $rfCodes = array(357644);
} else if ($outletLight == "6" && $outletStatus == "on") {
    $rfCodes = array(349491, 349635, 349955, 351491, 357635);
} else if ($outletLight == "6" && $outletStatus == "off") {
        $rfCodes = array(349500, 349644, 349964, 351500, 357644);
}


foreach ($rfCodes as $rfCode) {
        shell_exec($rfPath . $rfCode);
        sleep(1);
}

echo json_encode(array('success' => true));
?>
