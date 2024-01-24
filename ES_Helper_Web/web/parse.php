<?php
$output = shell_exec("/usr/bin/python3 parse.py 2&>1");

echo $output;

?>
