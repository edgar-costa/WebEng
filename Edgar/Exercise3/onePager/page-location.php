<section class="craftedinZurich " >
     	<div class="">

        <?php
                $query = new WP_Query('pagename=location');
                while ( $query->have_posts() ):
                $query->the_post();  ?>
         <header >
				<h1><?php  
                    the_title();
                ?></h1>
				<hr>
         </header>
         
         <footer>
				<?php  
                   the_content(); 
                ?>
				<p><a  href="#"></a>  <a  href="#"></a></p>
        </footer>
        </div>
         <?php endwhile; ?>
     </section>
