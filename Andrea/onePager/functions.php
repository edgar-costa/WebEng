<?php 




	function create_skills_options_page() {  
		add_menu_page('Skills Options', 'Skills Options', 'manage_options', "skills_options", 'build_skill_options_page');}
add_action('admin_menu', 'create_skills_options_page');




function build_skill_options_page(){

	//adding options and setting default values
 add_option( "html_skill" , 80); 
 add_option( "css_skill" , 70); 
 add_option( "wp_skill" , 90); 
 add_option( "js_skill" , 70); 


	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Skills Percentages Settings </h1>
			 <p>Provide percentages for the various skills.</p>
			<form method="POST" action="">
				
				<table class="form-table">
					<tr>
						<th><label for="html">HTML:</label></th>
						<td>
						<input type="number" name="html" min="0" max="100"
						value="<?php print get_option("html_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="css">CSS:</label></th>
						<td>
						<input type="number" name="css" min="0" max="100"
						value="<?php print get_option("css_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="js">Javascript:</label></th>
						<td>
						<input type="number" name="js" min="0" max="100"
						value="<?php print get_option("js_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="wp">Wordpress:</label></th>
						<td>
						<input type="number" name="wp" min="0" max="100"
						value="<?php print get_option("wp_skill"); ?>"
						size ="25" />
						</td>
					</tr>
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Skills" class="button-primary"/>
				</p> 
			</form>

		</div>
 <?php 
		if (isset($_POST['submit'])) {
			
			$html = esc_attr($_POST["html"]);
			update_option("html_skill", $html);
			$css = esc_attr($_POST["css"]);
			update_option("css_skill", $css);
			$js = esc_attr($_POST["js"]);
			update_option("js_skill", $js);
			$wp = esc_attr($_POST["wp"]);
			update_option("wp_skill", $wp);
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}

function my_custom_post_portfolio_item() {
  $labels = array(
    'name'               => _x( 'Portfolio Item', 'post type general name' ),
    'singular_name'      => _x( 'Porfolio Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Portfolio Item' ),
    'edit_item'          => __( 'Edit Portfolio Item' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Product' ),
    'search_items'       => __( 'Search Portfolio Item' ),
    'not_found'          => __( 'No  found' ),
    'not_found_in_trash' => __( 'No portfolio item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio Items'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds all works that go into the portfolio section',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'portfolio_item', $args ); 
}
add_action( 'init', 'my_custom_post_portfolio_item' );





 ?>

