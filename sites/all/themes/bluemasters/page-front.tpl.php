<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php global $base_url;?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts; ?>

<script src="<?php print drupal_get_path('theme', 'bluemasters') . '/js/bluemasters.js'?>" type="text/javascript"></script>

</head>
<body>

<div id="page">

<div id="wrapper">
	<div id="header" class="clearfix">
	
    <?php if ($logo): ?>
    <a id="logo" href="<?php print $front_page; ?>" name="home" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $base_path . path_to_theme() . '/logo.png'; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
    <!-- /logo -->
    <?php endif; ?>

    <div id="site-details">
      <?php if ($site_name): ?>
      <h1 id='site-name'>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <?php print $site_name; ?>
        </a>
      </h1>
      <!-- /site-name -->
      <?php endif; ?>

      <?php if ($site_slogan): ?>
      <blockquote id='site-slogan'>
        <?php print $site_slogan; ?>
      </blockquote>
      <!-- /site-slogan -->
      <?php endif; ?>

    </div>
    <!-- /site-details -->

    <div id="navigation">
    	<?php //if (isset($primary_links)) { ?><?php //print theme('links', $primary_links, array('class' =>'links', 'id' => 'primary-links')) ?><?php //} ?>
        <?php print menu_tree($menu_name = 'primary-links'); ?>
    </div><!--navigation-->
	
	</div><!--header-->


	<div id="banner" class="clearfix">
		<?php //print $banner;?>
		<div class="main_view">
			<div class="window">
				<div class="image_reel">
					<a href="?q=node/1"><img src="sites/all/themes/bluemasters/images/slide-image-1.jpg"></a>
					<a href="?q=node/2"><img src="sites/all/themes/bluemasters/images/slide-image-2.jpg"></a>
					<a href="?q=node/3"><img src="sites/all/themes/bluemasters/images/slide-image-3.jpg"></a>
				</div>
				<div class="descriptions">
					<div class="desc" style="display: none;">אחרי הקיץ, אחרי החגים כל קהילת דרופל סוף סוף נפגשים</div>
					<div class="desc" style="display: none;">מרצים מובילים מהארץ ומחו"ל</div>
					<div class="desc" style="display: none;">סדנאות מבוא גם למתחילים</div>
				</div>
				
			</div>
		
			<div class="paging" style="display: block;">
				<a rel="1" href="#" class="">1</a>
				<a rel="2" href="#" class="">2</a>
				<a rel="3" href="#" class="">3</a>
			</div>
		</div>
		
	</div><!--banner-->
	
	<div id="slide-navigation"></div>
	<div id="citybackground"></div>
	<div id="home-blocks-area" class="clearfix">
		<div id="home-block-1" class="home-block">
	    	<?php print $home_area_1;?> 		
	    </div>
	    <div id="home-block-2" class="home-block">
	    	<?php print $home_area_2;?> 
	    </div>
	    <div id="home-block-3" class="home-block">
	    	<?php print $home_area_3;?> 
	    	<div id="home-block-3-b">
	    		<?php print $home_area_3_b;?> 
	    	</div>
	    </div>
	</div>    
	
	<?php 
	// uncomment this to get news feed in your home page
	// you have to take care about the look'n'feel 
	// print $content;
	?> 
     
</div><!-- /wrapper-->

<div id="footer">
    <div id="footer-inside" class="clearfix">
    	<div id="footer-left">
    		<div id="footer-left-1">
    			<?php print $footer_left_1;?>
    		</div>
    		<div id="footer-left-2">
    			<?php print $footer_left_2;?>
    		</div>
        </div>
        <div id="footer-center">
        	<?php print $footer_center;?>
        </div>
        <div id="footer-right">
        	<?php print $footer_right;?>
        </div>
    </div>
</div>

<div id="footer-bottom">
    <div id="footer-bottom-inside" class="clearfix">
    	<div style="float:left">
    		<?php print $footer_message;?> 
    	</div>
    	<div style="float:right">
	        <?php if (isset($secondary_links)) : ?>
	          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
	        <?php endif; ?>      	
    	</div>
    </div>
</div>
    
<?php print $closure ?>


</div><!-- /page-->

</body>
</html>
