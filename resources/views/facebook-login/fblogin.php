<?php

# 1. Installation
	# a. Start Session
	//session_start();
	# b. Include the auto load file
	require_once __DIR__.'/vendor/autoload.php';
	# c. Facebook object with parameters
	$fb = new Facebook\Facebook ([
		'app_id' => '1072728849539829',
		'app_secret' => '653af6765428aca6c00f084a64c3ab86',
		'default_graph_version' => 'v2.5',
	]);
	$redirect = 'http://www.gogetlyft.com/login/callback';
# 2. Base Code
	$helper = $fb->getRedirectLoginHelper();
	
	try{
		$access_token = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	# a. Print login url if no access code
	if(!isset($access_token)) {
		$permission = ['email'];
		$loginurl = $helper->getLoginUrl($redirect, $permission);
		
		 
		
		echo '<div style="text-align:center; margin:18px 0; font-size:20px;">';
		echo '<a href="' . $loginurl . '" style="color:#fff; background-color:#3b5990; padding:15px 0px 15px 0px; border-radius:4px; display:block; width:97.5%">';
		echo '<i class="fa fa-facebook-f" style="color:#3b5990; background-color:#fff; border-radius:2px; font-size:24px; padding:6px 0; margin-right:6px; width:38px;"></i> Login with Facebook</a>';
		echo '</div>';
	}
	# b. Else Retrive the data
	else {
		$fb->setDefaultAccessToken($access_token);
		$response = $fb->get('/me?fields=email,name');
		$usernode = $response->getGraphUser();
		
		echo 'Name: ' . $usernode->getName() . '<br>';
		echo 'User ID: ' . $usernode->getId() . '<br>';
		echo 'Email: ' . $usernode->getProperty('email') . '<br><br>';
		
		$image = 'https://graph.facebook.com/' . $usernode->getId() . '/picture?width=200';
		echo "Picture<br>";
		echo '<img src="$image"><br><br>';
	}