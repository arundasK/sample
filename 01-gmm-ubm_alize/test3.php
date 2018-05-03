<?php
if(isset($_GET['one']))
{
$one = $_GET['one'];
$a = shell_exec('./test11.sh '.$one);
echo "$a";
}
?>
