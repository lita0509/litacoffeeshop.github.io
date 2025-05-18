<?php
	require "includes/header.php";
  require "config/config.php";
?>
<?php 
	$dessert_query = $conn->query("SELECT ID, SUBSTRING(product_title,1,70) as product_title, image, SUBSTRING(description,1,100) as description, price FROM product WHERE type = 'drink'");
	$dessert_query->execute();
	$dessert_query_result = $dessert_query->fetchAll(PDO::FETCH_OBJ);

	$drinks_query = $conn->query("SELECT ID,SUBSTRING(product_title,1,70) as product_title, image, SUBSTRING(description,1,100) as description, price FROM product WHERE type= 'drink'");
	$drinks_query->execute();
	$drinks_query_result = $drinks_query->fetchAll(PDO::FETCH_OBJ);
?>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
				<?php foreach($dessert_query_result as $dessert_products): ?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url('<?php echo APPURl; ?>/images/<?php echo $dessert_products->image ?>');"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $dessert_products->product_title ?></span></h3>
	        				<span class="price"><?php echo $dessert_products->price ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo $dessert_products->description ?> . . . . . . </p>
	        			</div>
        			</div>
        		</div>
				<?php endforeach; ?>
        	</div>
        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
				<?php foreach($drinks_query_result as $drink_products): ?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?php echo APPURl; ?>/images/<?php echo $drink_products->image; ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $drink_products->product_title; ?></span></h3>
	        				<span class="price"><?php echo $drink_products->price ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo $drink_products->description ?>. . . . . .</p>
	        			</div>
	        		</div>
        		</div>
				<?php endforeach; ?>
        	</div>
        </div>
    	</div>
    </section>
    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

		              <a class="nav-link active" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">	
		              <div class="tab-pane fade show active" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
						<?php foreach($drinks_query_result as $drink_products): ?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo APPURl; ?>/images/<?php echo $drink_products->image; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $drink_products->product_title; ?></a></h3>
		              					<p><?php echo $drink_products->description; ?></p>
		              					<p class="price"><span><?php echo $drink_products->price; ?></span></p>
		              					<p><a target="_blank" href="products/product-single.php?id=<?php echo $drink_products->ID; ?>" class="btn btn-primary btn-outline-primary">Show</a></p>
		              				</div>
		              			</div>
		              		</div>
					<?php endforeach; ?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
						<?php foreach($dessert_query_result as $dessert_products): ?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo APPURl; ?>/images/<?php echo $dessert_products->image; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $dessert_products->product_title; ?></a></h3>
		              					<p><?php echo $dessert_products->description; ?>. . . . . .</p>
		              					<p class="price"><span><?php echo $dessert_products->price; ?></span></p>
		              					<p><a target="_blank" href="products/product-single.php?id=<?php echo $drink_products->ID; ?>" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
						<?php endforeach; ?>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <?php require "includes/footer.php";?>