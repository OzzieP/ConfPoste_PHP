<?php

require ('DatabaseHelper.php');

$db = new DatabaseHelper();
echo $db->getHelloWorld();

