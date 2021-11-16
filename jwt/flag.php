<?php
require "auth.php";
$is_auth = authenticate();

if ($is_auth == True) {
	echo "HTB{" . str_replace(array("\r", "\n"), '', file_get_contents('/home/htb/user.txt')) . "}";
} else {
	echo("You are not admin");
}
