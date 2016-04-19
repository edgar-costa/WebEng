<!-- ==== SECTION DIVIDER2 -->
	<section class="partCoder >
		<article class="slideInLeft">
			<?php
				$query = new WP_Query('pagename=job2');
				while ( $query->have_posts() ):
				$query->the_post();  ?>
				
            <header>
			<h1 class="sectionTitle">
				<?php  
					the_title();
				?>

			</h1>
            </header>
			<hr>
			<p>
				<?php  
					the_content(); 
				?>
			</p>
		</article>
		<?php endwhile; ?>
	</section>
	