
<?php 

require_once 'Numbers.php';

if(isset($_REQUEST['submit'])) {

$min = $_REQUEST['min'];
$max = $_REQUEST['max'];
$quantity = $_REQUEST['quantity'];

$numbers = new Numbers;

$sort = $numbers->myNumbers($_REQUEST);

$result = $numbers->draw($min, $max, $quantity);


}

require_once 'index.view.php';
?>

