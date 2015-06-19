<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Wordpress</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    </head>
    <body>
        <div class="container">
          <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">WordPress Single Page Sample</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
         <div id="main">
             <div id="home">
             <?php $recent = new WP_Query("pagename=home"); while($recent->have_posts()) : $recent->the_post();?>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />
	        <div id="blog">
		        <h1>Blog Posts</h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
		                <p><?php the_content(__('(more...)')); ?></p>
		       <hr> <?php endwhile;endif?>
		    </div>
             <div id="about">
             <?php $recent = new WP_Query("pagename=about"); while($recent->have_posts()) : $recent->the_post();?>
                 <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />
             <div id="contact">
             <?php $recent = new WP_Query("pagename=contact"); while($recent->have_posts()) : $recent->the_post();?>
                 <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
               <?php endwhile; ?>
             </div>
             <hr />



             </div>
        </div>       
    </body>
</html>
