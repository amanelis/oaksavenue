<?php
require_once 'facebook.php';

$appapikey = 'b133fdeeebc3484422fd4288273863a3';
$appsecret = '78f2c43456a502809603989cee3ff6a8';
$facebook = new Facebook($appapikey, $appsecret);


$fb_uid = $facebook->get_loggedin_user();
echo $fb_uid;


?>