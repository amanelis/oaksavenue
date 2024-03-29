<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <title>Facebook Connect Demo 2</title>
</head>
<body>
  <h1>
    Facebook Connect Demo 2</h1>
  <p>
    Login flow and basic XFBML examples
  </p>
  <p>
    Login Button</p>
  <fb:login-button>
  </fb:login-button>
  <h1>
    Client-side XFBML, rendered directly with JS</h1>
  <p>
    Demo using different FBML tags</p>
  <p>
    <fb:name uid="USER_ID_HERE" capitalize="true" shownetwork="true">
    </fb:name>
    <---- fb:name <br/>
    <fb:pronoun uid="USER_ID_HERE" possessive="true" reflexive="true">
    </fb:pronoun>
    <---- fb:pronoun
	</p>
  <div style="">
    <div>
      fb:profile-pic Variations</div>
    <fb:profile-pic uid="USER_ID_HERE">
    </fb:profile-pic>
    <fb:profile-pic uid="USER_ID_HERE" size="thumb">
    </fb:profile-pic>
    <fb:profile-pic uid="USER_ID_HERE" size="small">
    </fb:profile-pic>
    <fb:profile-pic uid="USER_ID_HERE" size="pic_square" shownetwork="true">
    </fb:profile-pic>
  </div>
  <div>
    <p>
      Groups
    </p>
    <fb:grouplink gid="7406420086">
    </fb:grouplink>
  </div>
  <p>
    Events</p>
  <fb:eventlink eid="14400738508">
  </fb:eventlink>
  <div>
    <p>
      User links/status</p>
    <fb:userlink uid="USER_ID_HERE">
    </fb:userlink><fb:userstatus uid="USER_ID_HERE"></fb:userstatus>
    <div>
      <fb:profile-pic uid="USER_ID_HERE">
      </fb:profile-pic><fb:userstatus uid="USER_ID_HERE"></fb:userstatus>
    </div>
    <span>and </span>
    <fb:userlink uid="12313213123" ifcantsee="Someone I can't see">
    </fb:userlink>
		<br/>
  </div>
  
  <a href="index.htm">back to index.htm</a>	
  
  <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"
    type="text/javascript"></script>

  <script type="text/javascript">
    FB_RequireFeatures(["XFBML"], function()
    {
      FB.Facebook.init("b133fdeeebc3484422fd4288273863a3", "xd_receiver.htm");
    });
  </script>

</body>
</html>
