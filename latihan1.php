<h2>Latihan 1</h2>  

<?php
//variable scope
$panjang=5;
$lebar=3;
$luas= $panjang * $lebar;
echo "luasnya pp adalah = " .$luas. "cm<sup>2</sup><br>" ;
//kk
$buah = array("jeruk", "mangga", "nanas");
$hewan = ["mahen", "woof woof", "monyet"];
echo "buah " .$buah[1]. "<br>";
echo "hewan " .$hewan[0]. "<br>";
echo "<br>";
$ipk= 2.7;
if($ipk >= 3.5){
       echo "cumlaude mantap!";
}elseif ($ipk >=3){
    echo "sangat memuasakn";
}else{
    echo "memuaskan";
}

// perintah menampilkan text di php

   echo "<h1>Hello World</h1>";
   
?>