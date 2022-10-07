<?php
session_start();

//刪除 session 
session_destroy();

header("Location: ../view/index.php");

?>