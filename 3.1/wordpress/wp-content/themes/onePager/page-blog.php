<section id="blog">
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

				<article id="first" >

					<?php if ( have_posts() ) : while ( $the_query_first->have_posts() ) : $the_query_first->the_post(); ?>
					<div class="writer">
						<br>
							<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
							<h4><?php the_author(); ?></h4>
							<h5 class="blog-date">Published <?php the_date(); ?>.</h5>
					</div>
					<div class="intro">
						<h2><?php the_title(); ?></h2>
						<p>
							  <?php the_excerpt(); ?>
						</p>
						<p><a href="<?php the_permalink(); ?>" > Read More</a></p>
						<br>
					</div>
					<?php endwhile; else: ?>

       				 <?php endif; ?>
				</article>

				
				<article id='second' 	>
					<?php if ( have_posts() ) : while ( $the_query_second->have_posts() ) : $the_query_second->the_post(); ?>
					<div class="writer">
					<br>
						<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
						<h4><?php the_author(); ?></h4>
						<h5 class="blog-date">Published <?php the_date(); ?>.</h5>
					</div>
					<div class="intro">
						<h2><?php the_title(); ?></h2>
						<p>
							  <?php the_excerpt(); ?>
						</p>
						<p><a href="<?php the_permalink(); ?>" > Read More</a></p>
						<br>
					</div>
					<?php endwhile; else: ?>

       				 <?php endif; ?>
                </article>
				<aside id="others">
					
					<div class="others-list">
						<?php if ( have_posts() ) : while ( $the_query_others->have_posts() ) : $the_query_others->the_post(); ?>
				            <div class="others-box">
							 <p> <?php the_title(); ?></p> <p class="blog-date"> <?php the_date(); ?></p>
							 <p><a href="<?php the_permalink(); ?>" > Read More</a></p>
							</div>
							<?php endwhile; else: ?>
		     		</div>
		     		

       				 <?php endif; ?>
		  </aside>
			<br>
			<br>
	</section> 
	<br>
	<br>