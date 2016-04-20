<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500' rel='stylesheet' type='text/css'/>
    <script src="<?php bloginfo('template_url'); ?>/jquery-2.2.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/transitions.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/filter.js"></script>
    
    <?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main" style="background-color: #<?php background_color(); ?>">
	<!-- ==== MENU ==== -->
	<nav>
		<ul>
            <li>
                <div class="iconname"><a href="#home">Home</a></div>
                <div class="iconn"><a href="#home"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-home.png" id="home-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#about"> About Me</a></div>
                <div class="iconn"><a href="#about"> <img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-about.png" id="about-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#portfolio"> Portfolio</a></div>
                <div class="iconn"><a href="#portfolio"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-portfolio.png" id="portfolio-icon"/></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#blog"> Blog</a></div>
                <div class="iconn"><a href="#blog"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-blog.png" id="blog-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#contact"> Contact</a></div>
                <div class="iconn"><a href="#contact"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-contact.png" id="contact-icon" /></a></div>
            </li>
		</ul>
    </nav>   
      
  	<!-- ==== /MENU ==== -->
	<!-- ==== HEADER ==== -->
    <section class="web" >
	<section id="home">
		<header class="main_header">
	  		<h1><span ></span></h1>
			<p>
	            <?php bloginfo('description'); ?>
			</p>

	  	</header>	    

	</section>
<!--
    
    <div id="hr_header">
        <hr>
    </div>
-->
        
	<!-- ==== ABOUT ==== -->
    <section>
	<section class ="sectionPadding slideInLeft link" id="about" >
		<article>
			<?php
				$aboutPageQuery = new WP_Query('pagename=about');
				while ( $aboutPageQuery->have_posts() ):
				$aboutPageQuery->the_post();  ?>
			<br>
            <header>
			<h1 class="sectionTitle" ><?php  the_title();?></h1>
            </header>
			<hr>
				
            		<p><?php  the_content();?></p>
		</article>
		<?php endwhile; ?>
	</section>
		
	<!-- ==== SECTION DIVIDER1 -->
	<section id="group1" class="partDesigner sectionPadding ">
		<article class ="slideInBottom">
		<?php
				$query = new WP_Query('pagename=job1');
				while ( $query->have_posts() ):
				$query->the_post();  ?>
            <header>
			<h1 class="sectionTitle"><?php the_title(); ?></h1>
            </header>
			<hr>
			<p>	<?php  
					the_content(); 
				?>
			</p>

		</article>
		<?php endwhile; ?>
	</section>

	<!-- ==== SECTION DIVIDER2 -->
	<section class="partCoder " >
		<article class = "slideInLeft">
			<?php
				$query = new WP_Query('pagename=job2');
				while ( $query->have_posts() ):
				$query->the_post();  ?>
            <header>
			<h1 class="sectionTitle"><?php  
					the_title();
				?></h1>
            </header>
			<hr>
			<p><?php  
					the_content(); 
				?> </p>
		</article>
		<?php endwhile; ?>
	</section>

	<section class="skills sectionPadding slideInBottom">
            <header>
			<h1 class="sectionTitle"> My Technical Skills</h1>
            </header>
			<div class="skill_sqr" > <div id="html_skill" style="height:<?php  echo get_option("html_skill") ?>%;"><div class="skill_percentage"><?php  echo strval(get_option("html_skill")) ?><span>%</span></div> <div class="skill_name">HTML</div></div></div>
			<div class="skill_sqr" >  <div id="css_skill"style="height:<?php  echo get_option("css_skill") ?>%;" ><div class="skill_percentage"><?php  echo strval(get_option("css_skill")) ?><span>%</span></div> <div class="skill_name" >CSS</div></div></div>
			<div class="skill_sqr"  > <div id="js_skill"style="height:<?php  echo get_option("js_skill") ?>%;" ><div class="skill_percentage"><?php  echo strval(get_option("js_skill")) ?><span>%</span></div> <div class="skill_name">JavaScript</div> </div></div>
			<div class="skill_sqr" > <div  id="wp_skill"style="height:<?php  echo get_option("wp_skill") ?>%;"> <div class="skill_percentage"><?php  echo strval(get_option("wp_skill")) ?><span>%</span></div> <div class="skill_name">WordPress</div> </div></div>
	</section>
    </section>
		
		<!-- ==== PORTFOLIO ==== -->
    <section id="portfolio" class="slideInLeft link">
        <header>
		<br>
				<br>
				<h1 class="sectionTitle" >I WORKED ON COOL STUFF</h1>
				<hr>
				<br>
        </header>
        
			<section class="buttonsLink">
				<div class="buttonsContainer">
					<a href="#!" class="button active" id="buttonALL" onClick="ButtonAll()"> <p>ALL</p></a>
					<a href="#!" class="button" id="buttonUI" onClick="ButtonUi()"> <p> UI DESIGN </p></a>
					<a href="#!" class="button" id="buttonANDROID" onClick="ButtonAndroid()"> <p> ANDROID PAGE </p></a>
				</div>
			</section>
			<br>
			<section class="portfolioImages" >
				<!-- PORTFOLIO IMAGE 1 -->
			    	<article class="singleImage Ui" >
						<figure> 
							<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio01.jpg" alt="">
							<figcaption>
								<h5>UI DESIGN</h5>
                                <a class="takeLook" data-toggle="modal" href="#myModal1" >Take a Look</a>
						    	<div id="myModal1" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio01.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>								
							</figcaption>
						</figure>
			    	</article>
			    	
				<!-- PORTFOLIO IMAGE 2 -->
			    	<article class="singleImage Ui">
						<figure>
							<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio02.jpg" alt="">
							<figcaption>
								<h5>UI DESIGN</h5>
								<a class="takeLook" data-toggle="modal" href="#myModal2" >Take a Look</a>
								<div id="myModal2" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio02.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
							</figcaption>
						</figure>
                </article>
				<!-- PORTFOLIO IMAGE 3 -->
			    	<article class="singleImage Android">
						<figure>
							<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="takeLook" data-toggle="modal" href="#myModal3" >Take a Look</a>
								<div id="myModal3" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>ANDROID DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
							</figcaption>
						</figure>
			    	</article>
				<!-- PORTFOLIO IMAGE 3 -->
				<article class="singleImage Android">
					<figure>
						<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
						<figcaption>
							<h5>ANDROID PAGE</h5>
							<a class="takeLook" data-toggle="modal" href="#myModal4" >Take a Look</a>
							<div id="myModal4" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>Android DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
						</figcaption>
					</figure>
				</article>
				<!-- PORTFOLIO IMAGE 3 -->
				<article class="singleImage Android" >
					<figure>
						<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
						<figcaption>
							<h5>ANDROID PAGE</h5>
							<a class="takeLook" data-toggle="modal" href="#myModal5" >Take a Look</a>
							<div id="myModal5" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>ANADROID DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
						</figcaption>
					</figure>
				</article>
			<!-- PORTFOLIO IMAGE 3 -->
			<article class="singleImage six Android">
				<figure>
					<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio06.jpg" alt="">
					<figcaption>
						<h5>ANDROID PAGE</h5>
						<a class="takeLook" data-toggle="modal" href="#myModal6" >Take a Look</a>
						<div id="myModal6" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>Android DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio06.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
					</figcaption>
				</figure>
			</article>
		</section>
    </section>
	<br>
	<br>
      
	<!-- ==== BLOG ==== -->
	<section id="blog" class="link2">
		<br>
		<header >
			<br>
			<h1 class="sectionTitle" >MY  PERSONAL BLOG</h1>
			<hr>
			<br>
		</header>
        
			<section id="parent">
				<?php   
					$args1 = array(
				    'posts_per_page' => 1,
				    'orderby'        => 'most_recent',
				    'offset'         => 0,
					);

				  $the_query_first = new WP_Query( $args1 );

				  	$args2 = array(
				    'posts_per_page' => 1,
				    'orderby'        => 'most_recent',
				    'offset'         => 1,
					);

				  $the_query_second= new WP_Query( $args2 );


				  	$args3 = array(
				    'posts_per_page' => 3,
				    'orderby'        => 'most_recent',
				    'offset'         => 2,
					);

				  $the_query_others= new WP_Query( $args3 );

			       ?>
				<article id="first" class="slideInLeft">
					<?php if ( have_posts() ) : while ( $the_query_first->have_posts() ) : $the_query_first->the_post(); ?>
					<div class="writer">
						<br>
							<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
							<h4><?php the_author(); ?></h4>
							<h5 class="blog-date">Published <?php the_time('F j,Y'); ?>.</h5>
					</div>
					<div class="intro">
						<h2><?php the_title(); ?></h2>
						<p>
 							<?php the_excerpt(); ?>
						<p>
						<p><a href="<?php the_permalink(); ?>" > Read More</a></p>
						<br>
					</div>
					<?php endwhile; else: ?>
       				 <?php endif; ?>
				</article>
				
				<article id='second' class="slideInLeft"	>
					<?php if ( have_posts() ) : while ( $the_query_second->have_posts() ) : $the_query_second->the_post(); ?>
					<div class="writer">
					<br>
						<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
						<h4><?php the_author(); ?></h4>
						<h5 class="blog-date">Published <?php the_time('F j,Y'); ?>.</h5>
					</div>
					<div class="intro">
						<h2><?php the_title(); ?></h2>
						<p>  <?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink(); ?>" > Read More</a></p>
						<br>
					</div>
					<?php endwhile; else: ?>

       				 <?php endif; ?>
                </article>
				<aside id="others">
					<div class="others-list slideInBottom">
						<?php if ( have_posts() ) : while ( $the_query_others->have_posts() ) : $the_query_others->the_post(); ?>
				            <div class="others-box">
							 <p> <?php the_title(); ?></p> <p class="blog-date"> <?php the_time('F j,Y'); ?></p>
							 <p><a href="<?php the_permalink(); ?>" > Read More</a></p>
							</div>
							<?php endwhile; else: ?>
		             		     </div>
       					 <?php endif; ?>
		  		</aside>
			<br>
			<br>
	</section>
    </section>

		
		<!-- ==== SECTION DIVIDER ==== -->
     <section class="craftedinZurich " >
     	<div class="slideInLeft">

	    <?php
                $query = new WP_Query('pagename=location');
                while ( $query->have_posts() ):
                $query->the_post();  ?>

         <header >
				<h1><?php the_title();?></h1>
				<hr>
         </header>
         
         <footer>
				<p><?php the_content(); ?></p>
				<p><a  href="#"></a>  <a  href="#"></a></p>
        </footer>
        </div>
         <?php endwhile; ?>
         
     </section>



		
     <section class="sectionPadding contact" id="contact">
         <header>
			<br>	
				<h1 class="sectionTitle" >THANKS FOR VISITING!</h1>
				<hr>
				<br>
				<br>
         </header>
         
        <section class="columns">
          <article class="column-left slideInBottom">
					<h3>Contact Information</h3>
					<p> <span></span> <?php  echo get_option("Address") ?><br>
				        <span></span> <?php  echo get_option("PhoneNumber1") ?><br>
						<span></span> <?php  echo get_option("PhoneNumber2") ?><br>
						<span></span> <a href="#!"> <?php  echo get_option("EmailAddress") ?></a> <br>
						<span></span> <a href="#!"> <?php  echo get_option("Twitter") ?> </a> <br>
						<span></span> <a href="#!"> <?php  echo get_option("Name") ?></a> <br>
					</p>
            </article>
	
            <article class="column-center slideInBottom">
					<h3>Newsletter</h3>
					<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
					<p>
						<form  role="form">
						  <div >
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div >
                                <input type="email"  id="inputEmail1" placeholder="Email"/>
						    </div>
						  </div>
						  <div >
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div >
						      <input type="text"  id="text1" placeholder="Your Name"/>
						    </div>
						  </div> <br>
						  <div >
						    <div >
						      <button type="submit" >Sign in</button>
						    </div>
						  </div>
					   </form>
					</p>
		      </article>
				
            <article class="column-right slideInBottom" >
					<h3>Support Us</h3>
					<p>If you would like to support my work and my passion for web crafting please feel free to send me an email, or to share one of my project on tweeter or facebook. Any small little thing will be appreciated!</p>
            </article>
         </section>
		
		</section>
      
</section>

		<footer class="pg_footer">
			<header>
				<h4 >Created by <a href="http://globis.co">globis</a> </h4>
			</header>
		</footer>

</body>

</html>


