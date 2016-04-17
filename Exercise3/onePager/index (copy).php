<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="utf-8">
    <title> J. O. Rob main page</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500' rel='stylesheet' type='text/css'/>
    <script src="<?php bloginfo('template_url'); ?>/jquery-2.2.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/transitions.js"></script>
    
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
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
    <section class="web">
	<section id="home">
		<header class="main_header">
	  		<h1><span ></span></h1>
	  		<p class="slideInBottom">A 2.0 web developer.</p>
	  		<p class="slideInBottom">At your service</p>
	  	</header>	    

	</section>
<!--
    
    <div id="hr_header">
        <hr>
    </div>
-->
        
	<!-- ==== ABOUT ==== -->
    <section>
	<section class ="sectionPadding slideInLeft link" id="about">
		<article>
			<br>
            <header>
			<h1 class="sectionTitle" >A LITTLE ABOUT MY SELF</h1>
            </header>
			<hr>
				
            <p>I am a UX/UI Designer and Front End developer from Zurich, Switzerland. I love to solve complex problem, create new and simple design solution for different topics.
					I create beautiful, usable, professional websites using best practice accessibility and the latest W3C web standards guidelines, resulting in semantic and seo friendly XHTML and CSS. All my websites are lovingly hand coded. </p>
			<br>
			<br>
            <p>At first I intended to be an animator and went to design school fully motivated to become just that. One thing led to another and 2 years went by and I was a (almost) fully fledged freelance web designer without ever planning to become one.
                When I am not coding or designing some new websites I am usually at the gym doing boldring. To relax my nerve I like to play videogames with some friends while eating pizza! .</p>
		</article>
	</section>
		
	<!-- ==== SECTION DIVIDER1 -->
	<section id="group1" class="partDesigner sectionPadding ">
		<article class ="slideInBottom">
            <header>
			<h1 class="sectionTitle">PART DESIGNER...</h1>
            </header>
			<hr>
			<p>A web developer needs to have a good aesthetic eye on his product.<br> For this reason part of my skills include user interface and interaction design.</p>
		</article>
	</section>

	<!-- ==== SECTION DIVIDER2 -->
	<section class="partCoder " >
		<article class = "slideInLeft">
            <header>
			<h1 class="sectionTitle">PART CODER!</h1>
            </header>
			<hr>
			<p>But a website cannot be just nice to see... It has to work! That's why we have JavaScript, PHP and CMS like WordPress </p>
		</article>
	</section>

	<section class="skills sectionPadding slideInBottom">
            <header>
			<h1 class="sectionTitle"> My Technical Skills</h1>
            </header>
			<div class="skill_sqr" > <div id="html_skill" ><div class="skill_percentage">95<span>%</span></div> <div class="skill_name">HTML</div></div></div>
			<div class="skill_sqr" >  <div id="css_skill" ><div class="skill_percentage">80<span>%</span></div> <div class="skill_name" >CSS</div></div></div>
			<div class="skill_sqr"  > <div id="js_skill" ><div class="skill_percentage">90<span>%</span></div> <div class="skill_name">JavaScript</div> </div></div>
			<div class="skill_sqr" > <div  id="wp_skill"> <div class="skill_percentage">80<span>%</span></div> <div class="skill_name">WordPress</div> </div></div>
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
        
			<section>
				<div class="buttonsContainer">
					<div class="button active"> <p>ALL</p></div>
					<div class="button"> <p> UI DESIGN </p></div>
					<div class="button"> <p> ANDROID PAGE </p></div>
				</div>
			</section>
			<br>
			<section class="portfolioImages" >
				<!-- PORTFOLIO IMAGE 1 -->
			    	<article class="singleImage">
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
			    	<article class="singleImage">
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
			    	<article class="singleImage">
						<figure>
							<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="takeLook" data-toggle="modal" href="#myModal3" >Take a Look</a>
								<div id="myModal3" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
							</figcaption>
						</figure>
			    	</article>
				<!-- PORTFOLIO IMAGE 3 -->
				<article class="singleImage">
					<figure>
						<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
						<figcaption>
							<h5>ANDROID PAGE</h5>
							<a class="takeLook" data-toggle="modal" href="#myModal4" >Take a Look</a>
							<div id="myModal4" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
						</figcaption>
					</figure>
				</article>
				<!-- PORTFOLIO IMAGE 3 -->
				<article class="singleImage" >
					<figure>
						<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
						<figcaption>
							<h5>ANDROID PAGE</h5>
							<a class="takeLook" data-toggle="modal" href="#myModal5" >Take a Look</a>
							<div id="myModal5" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
									<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
									<p>This is a sample modal box that can be created using the powers of CSS3.</p>
									<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
									</div>
								</div>					
						</figcaption>
					</figure>
				</article>
			<!-- PORTFOLIO IMAGE 3 -->
			<article class="singleImage six">
				<figure>
					<img  src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio06.jpg" alt="">
					<figcaption>
						<h5>ANDROID PAGE</h5>
						<a class="takeLook" data-toggle="modal" href="#myModal6" >Take a Look</a>
						<div id="myModal6" class="modalDialog">
									<div>
									<a href="#close" title="Close" class="close">X</a>
									<h2>UI DESIGN</h2>
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
				<article id="first" class="slideInLeft">
					<div class="writer">
						<br>
							<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
							<h4>Pinco Pallino</h4>
							<h5 class="blog-date">Published Feb 28.</h5>
					</div>
					<div class="intro">
						<h2>What Define Success</h2>
						<p>No matter how old you are, where you’re from or what you do for a living, we all share something in common—a desire to be successful. .</p>
						<p>Each person’s definition of success is different, however, as some may define success as being a loving and faithful spouse or a caring and responsible parent, while most people would equate success with wealth, fame, and power</p>
						<p><a href="#" > Read More</a></p>
						<br>
					</div>
				</article>
				
				<article id='second' class="slideInLeft"	>
					<div class="writer">
					<br>
						<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
						<h4>Pinco Pallino</h4>
						<h5 class="blog-date">Published Feb 02.</h5>
					</div>
					<div class="intro">
						<h2>A Beautiful Story</h2>
						<p>One day, in a heavily crowded place, a young man was shouting at the crowd. “People look at me; I have the most beautiful heart in the world.”</p>
						<p>Many people looked at him and were stunned to see the beautiful heart in a perfect shape, no little flaw, which looked quite amazing. Most of the people who saw his heart was mesmerized by the beauty of his heart and praised him. </p>
						<p><a href="#" > Read More</a></p>
						<br>
					</div>
                </article>
				<aside id="others">
					<div class="others-list slideInBottom">
				            <div class="others-box">
							 <p> Parallax Tutorial</p> <p class="blog-date"> Dec. 2015</p>
							 <p><a href="#" > Read More</a></p>
							</div>
							<div class="others-box">
							 <p> Positioning in CSS</p> <p class="blog-date"> Nov. 2015</p>
							 <p><a href="#" > Read More</a></p>
							</div>						
							 <div class="others-box">
							 <p> What is Node.js?</p> <p class="blog-date"> Sep. 2015</p>
							 <p><a href="#" > Read More</a></p>
                            </div>
		     </div>
		  </aside>
			<br>
			<br>
	</section>
    </section>

		
		<!-- ==== SECTION DIVIDER ==== -->
     <section class="craftedinZurich " >
     	<div class="slideInLeft">
         <header >
				<h1>CRAFTED IN ZURICH, SWITZERLAND.</h1>
				<hr>
         </header>
         
         <footer>
				<p>Paradeplatz 987,</p>
				<p>+0041 9884 4893</p>
				<p><a  href="#"></a>  <a  href="#"></a></p>
        </footer>
        </div>
         
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
					<p> <span></span> Paradeplatz, Zurich<br>
				        <span></span> +0041 9884 4893<br>
						<span></span> +0041 9884 8893<br>
						<span></span> <a href="#"> mrdesignrobot@inf.co</a> <br>
						<span></span> <a href="#"> @mrdesignrobot </a> <br>
						<span></span> <a href="#"> Mr Design Luigi</a> <br>
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


