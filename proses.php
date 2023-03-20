<?php
$username = $_GET["uname"];
$password = $_GET["pss"];

echo "username = ".$username." <br>";
echo "password = ".$password." <br>";

$data = array("admin"=>"12345", "Budi"=>"Budi123");
$ada = false;
foreach($data as $u => $p){
    if($u == $username && $p == $password){
       $ada = true;
       break;
}
}

if($ada) {
    echo "selamatt ";
}else {
    echo "yahaha wahyu";
}
?>