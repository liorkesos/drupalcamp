<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php global $base_url;?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>

<?php print $scripts;  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
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

<div id="main-area" class="clearfix">

<div id="main-area-inside" class="clearfix">

    <div id="main"  class="inside clearfix">  
    	<?php print $content_top;?>  
		<?php print $messages;?>
        <?php print $tabs;?>   
        <?php print $content;?> 
    </div><!--main-->

    <div id="right" class="clearfix">
    	<?php print $right;?>
    </div><!--right-->
    
</div>

</div><!--main-area-->
</div><!-- /#wrapper-->

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
