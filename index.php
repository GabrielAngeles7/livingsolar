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
        		<i class="icon icon-phone"></i>
        		03 9676 2620
        	</span>
      	</li>
      	<li>
      		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#freeQuote">Get a Free Quote</button>
      	</li>
      </ul>

      <ul class="nav navbar-nav navbar-right navbar-bottom">
        <li><a href="/">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="prices.php">Prices</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="latest-news.php">Latest News</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>


<div class="skin-pretty">
	<div class="container">
		<?php include 'partials/slider.php'; ?>		
	</div>
</div>


<?php include 'partials/free-quote.php'; ?>
<?php include 'partials/footer.php'; ?>