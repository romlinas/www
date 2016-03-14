<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This theme is built 
			on <b>Bootstrap 3</b> framework. This is a  photocentric theme with some cool hover animation and responsive layout. The theme is compatible with the
			jetpack infinitecroll plugin to provide a smooth ajax paginaton effect. The content area is single column with animated show/hide type sidebar.   </p>
	</div>

</div>

<div class="row">

	<div class="col col1">
		<h3>Required Plugins</h3>
		<p> The theme requires the following plugin to work as advertised.  
			You will find a notification on the admin panel prompting you to install the required plugins. 
			Please install and activate the plugins.  
		</p>
		<ol>
			<li><b> <a href="https://wordpress.org/plugins/jetpack/"> Jetpack </a> </b>  - This plugin is required for the infinite scroll load effect. Please install the plugin and activate the infinite scroll module </li>
		</ol>
	</div>

</div>	

<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>

		<h4>1. Installing theme</h4>
		<p> Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearance > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>

		<h4>2. Install plugins</h4>
		<p> After theme activation, you will find a notification that prompts you to install and activate the required plugin listed earlier. Please install and activate them.</p>

		<h4>3. Saving theme options</h4>
		<p> The theme comes with an options page. You can save the options page with its default values to see how the content is laid out. Then you can customize the options as required for your site.</p>

	</div>

</div>


<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>
	 </div>
	 <div class="col col1">
	 	<h4> 1. Homepage </h4>
	 	<p> On the homepage just below the header, there is a section to display a welcome message. You have the option to enetr a custom welcome message via theme option. </p>
	 	<p> You have a call to action section on the homepage just above the footer widgets. Via theme options you can set the call to action text, button and the link from the button.</p>
	 </div>
	 <div class="col col1">
	 	<h4> 2. Social settings </h4>
	 	<p> You have the option set various social media links and other contact informations like, email, phone, skype etc via theme options. </p>
	 </div>

	 <div class="col col1">
	 	<h4> 3. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 4. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px;}
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.clear{clear: both;}
	.red{color: red;}
</style>	

<?php }
