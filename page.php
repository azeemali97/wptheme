<?php get_header( ); ?>

<div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
            
		</header>
        <?php the_post_thumbnail('large')?>
		<section class="theme-bg-dark py-5 text-center text-light">
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
	    </section>
	    <article class="about-section content px-3 py-5 p-md-5">
		    <div class="container">			    
			    <?php echo get_the_content(); ?>
			    
		    </div>
	    </article>


<?php get_footer(  ); ?>