<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Free Test Bank
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 
 
require_once 'facebook.php';

$appapikey = 'b133fdeeebc3484422fd4288273863a3';
$appsecret = '78f2c43456a502809603989cee3ff6a8';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 25);
foreach ($friends as $friend) {
  echo "<br>$friend";
}
echo "</p>";