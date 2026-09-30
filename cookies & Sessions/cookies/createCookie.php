<?php
setcookie("user", "John", time() + (86400 * 30), "/","", false, true); 

echo "Cookie 'user' is set!";
?>