<?php
$jam = date("00:00:01");

if ($jam > "00:00:00" && $jam <= "04:00:00") {
    echo "$jam = subuh";
}
elseif ($jam > "04:00:00" && $jam <= "10:00:00") {
    echo "$jam = pagi";
} 
elseif ($jam > "10:00:00" && $jam < "15:00:00") {
    echo "$jam = siang";
}
elseif ($jam >= "15:00:00" && $jam < "18:00:00") {
    echo "$jam = sore";
}
else {
    echo "$jam = dunia malam";
}
?>