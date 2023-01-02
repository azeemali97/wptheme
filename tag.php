<?php get_header( ); ?>

    
<div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php wp_title( ) ?></h1>
		</header>
	    <section class="content px-3 py-5 p-md-5">
		    <div class="container">
                <?php 
				//
				if (have_posts()) {
                    while (have_posts()) {
                    the_post(); ?>

			    <div class="post mb-5">
				    <div class="media">
                    <?php the_post_thumbnail('thumbnail')?>
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="post.html"><?php the_title() ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php the_date( ) ?></span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro"><?php the_excerpt() ?></thead></div>
						    <a class="more-link" href="<?php the_permalink( ) ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			 
         <?php   }
        } 
			    ?>
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="post.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>


<?php get_footer( ); ?>