<!-- ==== SECTION DIVIDER1 -->
	<section id="group1" class="partDesigner sectionPadding ">
		<article >
			<?php
				$query = new WP_Query('pagename=job1');
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
	