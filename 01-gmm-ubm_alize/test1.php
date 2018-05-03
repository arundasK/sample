<?php
if(isset($_GET['one']) && isset($_GET['two']) && isset($_GET['three']) && isset($_GET['name']))
{
$one = $_GET['one'];
$two = $_GET['two'];
$three = $_GET['three'];
$name = $_GET['name'];

$a = shell_exec('./train.sh '.$one.' '.$two.' '.$three.' '.$name);

echo "$a";
}

?>
