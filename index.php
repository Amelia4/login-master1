<?php 

/*
 * start session
 ***/
session_start();


require_once('config.php');
require_once('koneksi.php');

if (!isset($_SESSION['user']['login'])) {
	require_once('login.php');
}

else {
	$username=$_SESSION['user']['username'];
    print "
    	<center>
    		Hello $username!
    		Login BERHASIL
    	</center>";
	require_once('logout.php');
}
