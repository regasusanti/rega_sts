<?php
$username  =12345;
$passwoard =12345;

if($username == 12345 && $passwoard == 12345){
    echo "anda berhasil login";
}else if($username == 6){
    echo "username salah";
}else if($passwoard == 7){
    echo "passwoard salah";
}else{
    echo "mohon maaf username dan passwoard salah";
}
?>