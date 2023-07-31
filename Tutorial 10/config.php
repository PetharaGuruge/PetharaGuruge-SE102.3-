<?php

$conn = mysql_connect("localhost", "root", "", "university");

if ($conn){
    die("Erro");
}else{
    echo "sucess"
}

?>