<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="content content-post clearfix">


	<section class="post-container post-about clearfix">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post-entry ">
				<h1><?php the_title(); ?></h1>
				

				<article class="clearfix">
					<h2><span>Welcome to bohemestudio!</span></h2>

					<div class="about-left">
						<p>
							Thank you for your visit :) <br />
							My website started as a personal project in 2010. The first idea was to create a place to share my pictures and my vision of the world around me, a virtual album of what I see through my lenses.
						</p>
						<p>
							Unfortunately, taking pictures was not enough... Who is going to pay the rent?! Here was my opportunity to show more of my UX developer and designer skills.
						</p>
						<p>
							I truly believe that along with big companies are plenty of amazing developers and designers building the world wide web. How could I possibly stay out of it!? So, here is my contribution to the community.
						</p>
					</div>

					<aside>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about/welcome-to-bohemestudio.jpg" />
					</aside>
				</article>

				<article class="clearfix">
					<h2><span>The man behind the walrus</span></h2>

					<div class="about-right">
						<p>
							Literally, that's me! <br />
							My name is Miguel and I've been working for almost a decade as a Front-end developer and UX/Web designer. I've been focusing on User Experience with great attention to detail, building websites and webapps beyond coding, keeping in mind that in front of computers, tablets or smartphones, people will expect a good looking, usable and intuitive web experience.
						</p>
						<p>
							The IT world is evolving every day and I love to search and to learn about new trends and to try new technologies. You can call me crazy but I'm one of these guys who doesn't support IE7 anymore ;)
						</p>
						<p>
							So this is my website! My latest projects, portfolios, pictures and more!
						</p>
					</div>

					<aside>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about/the-man-behind-the-walrus.jpg" />
					</aside>					
				</article>	

				<article class="clearfix about-social">
					<h2><span>Keep in touch</span></h2>
					<div class="about-left">
						<p>
							I'm looking forward to hearing from you! Don't hesitate to contact me or to comment on the website. I would really appreciate any feedback. <br /><br /><br />
						</p>

						<p>
							You can find more about me on the social networks.
						</p>

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
					</div>

					<aside>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about/bohemestudio-social.jpg" />
					</aside>
					
				</article>				
				
				<article class="clearfix" >

					<h2><span>One more thing...</span></h2>

					<?php the_content(); ?>
					
				</article>

			</div>

		<?php endwhile; else: ?>

			<h3>Sorry, no posts matched your criteria.</h3>
		<?php endif; ?>   

	</section>


</div><!--//content-->

<?php get_footer(); ?> 		

