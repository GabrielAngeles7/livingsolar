<?php include 'partials/header.php'; ?>

<header class="navbar l-navbar" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Living Solar</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

    	<ul class="nav navbar-nav navbar-right navbar-top">
        <li><img src="images/rinnai.png" alt=""></li>
        <li>
        	<span class="btn btn-primary btn-lg">
        		<i class="icon icon-phone icon-offset"></i>
        		03 9676 2620
        	</span>
      	</li>
      	<li>
      		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#freeQuote">Get a Free Quote</button>
      	</li>
      </ul>

      <ul class="nav navbar-nav navbar-right navbar-bottom">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="prices.php">Prices</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="latest-news.php">Latest News</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
        <li class="dropdown dropdown-full">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
          	<i class="icon icon-search"></i>
        	</a>
          <div class="dropdown-menu">
            <div class="container">
            	<div class="search">
            		<div class="col-md-5">
	            		<h3 class="h4 search-title">What are you looking for? Search for more..</h3>
	            	</div>
	            	<div class="col-md-7">
	            		<form class="navbar-form navbar-left" role="search">
						        <div class="form-group">
						          <input type="text" class="form-control" placeholder="Search">
						        </div>
						        <button type="submit" class="btn btn-primary">Submit</button>
						      </form>
	            	</div>
            	</div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>


<div class="skin-pretty">
	<div class="container">
		<?php include 'partials/slider.php'; ?>

		<div class="section section--hero">
	    <div class="formatted formatted-lg">
	    	<h1 class="h2 title-pretty">Quality Solar Hot Water System at Competitive Prices</h1>
	    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
	    	<ul class="list-inline">
	    		<li><img src="images/rinnai-lg.png" alt=""></li>
	    		<li><img src="images/equinox.png" alt=""></li>
	    	</ul>
	    </div>

		</div>		
	</div>
</div>

<div class="container">
	<div class="section">
		<div class="row">
			<div class="col-md-4">
				<div class="block block-l3 skin-blue">
					<div class="block-figure">
						<img src="placeholders/residential-thumb.jpg" alt="">
						<h3 class="block-title">
							<i class="icon icon-residential"></i>
							<span>Residential</span>
						</h3>
					</div>
					<div class="block-content formatted">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
						<a href="#" class="btn btn-default">Read More</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="block block-l3 skin-yellow">
					<div class="block-figure">
						<img src="placeholders/trade-thumb.jpg" alt="">
						<h3 class="block-title">
							<i class="icon icon-trade"></i>
							<span>Trade</span>
						</h3>
					</div>
					<div class="block-content formatted">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
						<a href="#" class="btn btn-default">Read More</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="block block-l3 skin-green">
					<div class="block-figure">
						<img src="placeholders/commercial-thumb.jpg" alt="">
						<h3 class="block-title">
							<i class="icon icon-commercial"></i>
							<span>Commercial</span>
						</h3>
					</div>
					<div class="block-content formatted">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
						<a href="#" class="btn btn-default">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section--ticker">
		<div id="carousel-example-generic" class="carousel slide ticker-carousel" data-ride="carousel">
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		    	Greenhouse gas emissions saved by Living Solar hot water installations: <span class="text-blue">2.81 million kilograms</span>
		    </div>
		    <div class="item">
		    	Greenhouse gas emissions saved by Living Solar hot water installations: <span class="text-blue">2.81 million kilograms</span>
		    </div>
		  </div>

		  <!-- Controls -->
		  <div class="carousel-controllers">
		  	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <i class="icon icon-left"></i>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <i class="icon icon-right"></i>
			  </a>
		  </div>
		</div>
	</div>


</div>





<?php include 'partials/free-quote.php'; ?>
<?php include 'partials/footer.php'; ?>