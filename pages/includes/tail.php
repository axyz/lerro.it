<!-- Included JS Files (Uncompressed) -->
	<script src="javascripts/foundation/jquery.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/foundation/jquery.placeholder.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.joyride.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="javascripts/jquery.cycle.all.js"></script>
  <script src="javascripts/jquery.grid-a-licious.min.js"></script>
  <script src="javascripts/jquery.maximage.js"></script>
  <script src="javascripts/foundation/app.js"></script>

  <?php
    session_start();
    require_once("php/twitteroauth.php");

    $consumerkey = "SPKLJEHWzAMG4MGzOMEn5Q";
    $consumersecret = "VJ1XzXgzrlJFaWAFrnh66E0CYcWuwHokwgkZPzKOM";
    $accesstoken = "12844042-ftvYZlNjZckCv25JH8doiSDlYp7JWIWK9quRSIMN2";
    $accesstokensecret = "QtlwlqFIdFnbOQ4kP4yRixTueQp4tvScG3OXEkePs8Yzb";

    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }

    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

    $tweets = $connection->get("https://api.twitter.com/1.1/lists/statuses.json?slug=cf-italy-list&owner_screen_name=Crowdfund_ITALY&count=5");

    $tweets = json_encode($tweets);
  ?>

  <script src="javascripts/script.js"></script> 

  <script type="text/javascript">
    var t = <?php echo $tweets; ?>;
    twitterCB(t);
  </script>

  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38746985-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>

</body>
</html>