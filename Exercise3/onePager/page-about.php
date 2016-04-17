<section>
<section class ="sectionPadding slideLeft link" id="about">
		<article>
			<?php
				$aboutPageQuery = new WP_Query('pagename=about');
				while ( $aboutPageQuery->have_posts() ):
				$aboutPageQuery->the_post();  ?>
				
			
			<br>
            <header>
			<h1 class="sectionTitle" > <?php  the_title();?> </h1>
            </header>
			<hr>
			<p>
				<?php  the_content();?>
			</p>	
		</article>
		<?php endwhile; ?>
	</section>