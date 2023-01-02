<?php  
// Template Name:Contact us

get_header( );

?>

<div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">Contact Us</h1>
		</header>
	    <article class="about-section py-5">
		    <div class="container">			    
				<form>
					<div class="form-group">
					  <label for="exampleInputEmail1">Email address</label>
					  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					  <label for="exampleMessage">Message</label>
					  <textarea class="form-control" id="exampleMessage"></textarea>
					</div>
					<div class="form-group form-check">
					  <input type="checkbox" class="form-check-input" id="exampleCheck1">
					  <label class="form-check-label" for="exampleCheck1">Subscribe to Newsletter</label>
					</div>
					<button type="submit" class="btn btn-primary">Send Message</button>
				  </form>
		    </div>
	    </article>
<?php
get_footer( )
?>