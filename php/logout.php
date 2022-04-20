<?php
#resume seesio
session_reset();
#unset
session_unset();
#destroy
session_destroy();
header("location:index.php"); 
?>