<?php
echo"<headre>";
echo"<a href='http://localhost/popote-1/menu.php'>menu</a>";
echo "</header>";
echo "<h1>Popote minute</h1>";


$page = "./popote-1". $_GET ['pages'].'.php';

if(file_exists($page)){
    include ( $_GET['pages'] . ".php");
} else{
    echo "page introuvable erreur 404 $page";
}


?>