
 <?php
	require "includes/header.php";
	require "config/config.php";
?>
<?php
	$product = $conn->query("SELECT ID, product_title, image, SUBSTRING_INDEX(description, ' ', 10) AS description, price, type FROM product LIMIT 4");
	$product->execute();
	$all_product = $product->fetchAll(PDO::FETCH_OBJ);

	$reviews = $conn->query("SELECT * FROM reviews LIMIT 4");
	$reviews->execute();
	$all_reviews = $reviews->fetchAll(PDO::FETCH_OBJ);

?>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>(+855) 10921867</h3>	    			
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>21A Street</h3>
	    						<p>Takamo city, kandal Province</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
    </section>
    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/coffee-cup.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>We started with a love for good coffee and a desire to share it with others.
					Every cup we serve is made with care — from fresh beans to smooth brews.
					Whether you're here to relax, work, or catch up with friends, we're happy to have you.
					Come in and enjoy the coffee and the cozy vibes.</p>
	  			</div>
  			</div>
    	</div>
    </section>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4">Our Menu</h2>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	            <p><a href="menu.php" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Best Coffee Sellers</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
        	</div>
			<div class="row">
				<?php foreach($all_product as $product): ?>
					<div class="col-md-3">
						<div class="menu-entry">
								<a target="_blank" href="products/product-single.php?id=<?php echo $product->ID ?>" class="img" style="background-image: url('<?php echo APPURl ; ?>/images/<?php echo $product->image; ?>')"></a>
								<div class="text text-center pt-4">
									<h3><a href="products/product-single.php?id=<?php echo $product->ID ?>"><?php echo $product->product_title; ?></a></h3>
									<p><?php echo $product->description; ?></p>
									<p class="price"><span><?php echo $product->price; ?></span></p>
									<p><a target="_blank" href="products/product-single.php?id=<?php echo $product->ID; ?>" class="btn btn-primary btn-outline-primary">Show</a></p>
								</div>
							</div>
					</div>
				<?php endforeach; ?>
			</div>
    	</div>
    </section>
<?php
	require "includes/footer.php";
?>

		
	

