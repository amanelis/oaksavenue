<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <title>Facebook Connect Demo 1</title>
</head>
<body>
  <h1>
    Facebook Connect Demo 1</h1>
  <p>Login flow example, with simple API call example</p>
  <p>Login Button:</p>
  <fb:login-button>
  </fb:login-button>
  
  <a href="index.htm">back to index.htm</a>	
  
  <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"
    type="text/javascript"></script>

  <script type="text/javascript">
    FB_RequireFeatures(["XFBML"], function()
    {
      FB.Facebook.init("b133fdeeebc3484422fd4288273863a3", "xd_receiver.htm");
      FB.Facebook.get_sessionState().waitUntilReady(function()
      {
        window.alert("Session is ready");
        //If you want to make Facebook API calls from JavaScript do something like
        FB.Facebook.apiClient.friends_get(null, function(result, ex) {
          //Do something with result
									window.alert("Friends list: " + result);
          });

      });
    });
  </script>

</body>
</html>
