<?php
$user_name = "root";
$password = "root";
//$database = "ejercicios";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

/*$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

echo "Database Found ";
mysql_close($db_handle);

}
else {

echo "Database NOT Found ";
}*/

?>