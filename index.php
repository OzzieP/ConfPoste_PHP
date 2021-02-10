<?php

require ('DatabaseHelper.php');

$db = new DatabaseHelper();
$hello = $db->getHelloWorld();

?>

<h1><?php echo $hello ?></h1>


<h2>Bonjour sur le site PHP !</h2>
