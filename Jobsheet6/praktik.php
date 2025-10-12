<?php   

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya" .$nama. "<br/> ";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Hamdana", "Halo");

echo "<hr>";

$saya = "Rani";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>