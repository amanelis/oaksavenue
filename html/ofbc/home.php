
<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Free Test Bank
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 
 


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
?>