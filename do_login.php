<?php

     //HTTPS redirect
    if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	

//    print_r($_POST);
//    print $_POST['username'];


	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}



	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: page1.php");
		exit;
	}

	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        
        print "the username is $username ";
        
    }
//
//    require_once db.conf;
//
//    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//
//    if($mysqli->connect_error){
//        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
//        require "login_form.php";
//        exit;
//    }
//       
//    $username = $mysqli->real_escape_string($username);
//    $password = $mysqli->real_escape_string($password);
//       
    
            
        
    

?>