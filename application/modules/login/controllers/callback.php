<?php

		require_once('googleApi/vendor/autoload.php');
		$client = new Google_Client();
		$client->setAuthConfig('client_credentials.json');
		$client->addScope(Google_Service_Oauth2::PLUS_LOGIN);
		$client->setRedirectUri("http://localhost/temp/login/callback");
		
		if (isset($_SESSION['accessToken'])){
			$client->setAccessToken($_SESSION['accessToken']);
		}
		else if (isset($_GET['code'])) {
		    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		    $_SESSION['accessToken'] = $token;
		}
		else{
			header("location: index.php");
		}

		$oAtuth = new Google_Service_Oauth2($client);
		$user = $oAtuth->userinfo->get();

		echo "<pre>";
		print_r($user);

?>