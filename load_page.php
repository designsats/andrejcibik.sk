<?php

if(!$_POST['page']) die("0");

$page = $_POST['page'];

if(file_exists('views/'.$page.'.php'))
echo file_get_contents('views/'.$page.'.php');

else echo 'There is no such page!';

?>
