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
        <li><a href="/">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="prices.php">Prices</a></li>
        <li class="active"><a href="gallery.php">Gallery</a></li>
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

<div class="skin-pretty skin-pretty-md">
  <div class="container">
    <h1 class="page-title">Gallery</h1>
  </div>
</div>

<div class="container">
  <div class="l-content clearfix">
    <div id="links">
      <div class="row">
        <div class="col-md-4 gallery-item">
          <a href="placeholders/g1.jpg" title="Rinnai SunMaster Solar Hot Water Commercial System" data-gallery>
            <img src="placeholders/thumbnails/g1.jpg" alt="">
        </a>
        </div>
        <div class="col-md-4 gallery-item">
          <a href="placeholders/g2.jpg" title="Rinnai SunMaster Solar Hot Water Commercial System" data-gallery>
            <img src="placeholders/thumbnails/g2.jpg" alt="">
          </a>
        </div>
        <div class="col-md-4 gallery-item">
          <a href="placeholders/g3.jpg" title="Rinnai SunMaster Solar Hot Water Commercial System" data-gallery>
            <img src="placeholders/thumbnails/g3.jpg" alt="">
          </a>
        </div>
        <div class="col-md-4 gallery-item">
          <a href="placeholders/g4.jpg" title="Rinnai SunMaster Solar Hot Water Commercial System" data-gallery>
            <img src="placeholders/thumbnails/g4.jpg" alt="">
          </a>
        </div>
        <div class="col-md-4 gallery-item">
          <a href="placeholders/g5.jpg" title="Rinnai SunMaster Solar Hot Water Commercial System" data-gallery>
            <img src="placeholders/thumbnails/g5.jpg" alt="">
          </a>
        </div>
      </div>
    </div>

    <div class="bg-info clearfix">
      <div class="pull-left"><p>Interested with solar water heaters? call Living Solar today.</p></div>
      <a href="#" class="pull-right btn btn-default">Contact Us</a>
    </div>
    
    <div id="blueimp-gallery" class="blueimp-gallery">
      <!-- The container for the modal slides -->
      <div class="slides"></div>
      <!-- Controls for the borderless lightbox -->
      <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
      <ol class="indicator"></ol>
      <!-- The modal dialog, which will be used to wrap the lightbox content -->
      <div class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" aria-hidden="true">&times;</button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body next"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left prev">
                <i class="glyphicon glyphicon-chevron-left"></i>
                Previous
              </button>
              <button type="button" class="btn btn-primary next">
                Next
                <i class="glyphicon glyphicon-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>


<?php include 'partials/free-quote.php'; ?>
<?php include 'partials/footer.php'; ?>