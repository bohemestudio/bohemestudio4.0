<div class="footer-top"></div>
<footer class="main-footer clearfix">
	
	<nav>
		<ul class="follow-links">
			<li>
				<a class="follow-facebook animate-this" href="http://www.facebook.com/socialbohemestudio" target="_blank">facebook.com/socialbohemestudio</a>
			</li>
			<li>
				<a class="follow-twitter animate-this" href="https://twitter.com/bohemestudio" target="_blank">twitter.com/bohemestudio</a>
			</li>
			<li>
				<a class="follow-instagram animate-this" href="http://instagram.com/bohemestudio" target="_blank">instagram.com/bohemestudio</a>
			</li>
			<li>
				<a class="follow-linkedin animate-this" href="https://uk.linkedin.com/in/marodriguezgarcia" target="_blank">uk.linkedin.com/in/marodriguezgarcia/</a>
			</li>
			<li>
				<a class="follow-mail animate-this" href="mailto:contact@bohemestudio.com" target="_blank">contact@bohemestudio.com</a>
			</li>						
		</ul>
	</nav>					
	

</footer>

<?php wp_footer(); ?>

<div id="fb-root"></div>

<script>
    //PRELOAD IMAGES
	$('.content img').each(function(){
		//$(this).hide();

		var imgSrc = $(this).attr('src');		
		$(this).addClass('lazy');
		$(this).attr("data-original", imgSrc);
	});

	$('.hero img').removeClass('lazy');
	//$("img.lazy").lazyload();

	
	$("img.lazy").lazyload({
	    effect : "fadeIn"
	});

	//TWITTER
	window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));

	//FACEBOOK
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));	


	//GOOGLE ANALYTICS
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-1990053-4', 'auto');
	ga('send', 'pageview');	
	

</script>


</body>
</html>