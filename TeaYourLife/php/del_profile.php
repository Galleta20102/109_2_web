<?php
require_once 'db.php';
require_once 'functions.php';

//判別有無在登入狀態
if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
	$del_result = del_favorite($_POST['id']);
	
	if($del_result)
	{
		echo 'yes';
	}
	else
	{
		echo 'no';	
	}
}
else
{
	echo 'no';	
}

?>