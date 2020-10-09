<?php
$merk = [
    ["Sport Vehicle ( SUV )", "Jeep Compass ", 50000000,"1.jpg"],
    ["Sport Vehicle ( SUV )", "Chevy Traverse", 5100000,"2.jpg"],
    ["Sport Vehicle ( SUV )", "Ford Escape ", 5910000,"3.jpg"],
    ["Mobil convertible ", "Ford Escape ", 3910000,"4.jpg"],
    ["Mobil convertible ", " bmw ", 4500000,"11.jpg"],
    ["Station Wagon ", "bmw ", 300000,"10.jpg"],
    ["Station Wagon ", "pajero ", 2500000,"7.jpg"],
    ["Sports Car", "ferary ", 6000000,"8.jpg"],
];
$temp_arr=[];
foreach($merk as $key){
    $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
foreach($pilihan as $key_x){
    echo $key_x."\n";
}