<?php
	
    require_once('session1.php');	
    require_once('connection.php');
    require_once('notif.php');
    require_once('msg.php');

    if (isset($_GET['controller']) && isset($_GET['action'])) {
    	$controller = $_GET['controller'];
    	$action     = $_GET['action'];
  	} else {
    	$controller = 'pages';
    	$action     = 'home';
  	}

  	require_once('views/layout.php');

	if(isset($_POST['out'])){	
		//session end
		// remove all session variables
		session_unset();
		// destroy the session
		session_destroy();
	}
?>
