     
<?php
// Template Name:Home

get_header(); ?>

    
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php bloginfo( 'name' ); ?><?php wp_title() ?></h1>
		</header>
		<article class="content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

			  <section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
				</section>
			
			<div class="row row-cols-1 mt-4 row-cols-md-2">

				<div class="col mb-4">

				<?php 
				//cpt post show code
$arg = array( 'post_type' => 'movies', 'post_status' => 'publish');

// The Query
$the_query = new WP_Query( $arg );

// The Loop

	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

?>
				  <div class="card shadow">
					<div class="card-body">
					  <h5 class="card-title"><?php the_title( ) ?> </h5>
					  <p class="card-text"><?php the_excerpt() ?></p>
					  <a class="btn btn-primary" href="<?php the_permalink( )?>">View</a>
					</div>
				  </div>
				</div>

				<?php  } ?>

 
				
		</div>
	    </article>

        <?php get_footer();?>





