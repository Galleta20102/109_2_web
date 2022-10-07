<?php
require_once 'db.php';
require_once 'functions.php';
$result = insert_user($_POST['un'], $_POST['pw'], $_POST['n']);

if($result)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>
