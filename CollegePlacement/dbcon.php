<?php
error_reporting('E_ALL^E_NOTICE');

@mysql_select_db('placement',@mysql_connect('localhost','root',''))or die(mysql_error());
?>