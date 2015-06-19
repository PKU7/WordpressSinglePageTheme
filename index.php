<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Wordpress</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    </head>
    <body>
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
    </body>
</html>
