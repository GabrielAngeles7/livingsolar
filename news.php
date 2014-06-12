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
        <li><a href="gallery.php">Gallery</a></li>
        <li class="active"><a href="latest-news.php">Latest News</a></li>
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
    <h1 class="page-title">Solar review casts shadow on high-rises</h1>
  </div>
</div>

<div class="container">
  <div class="l-content clearfix">
    <div class="formatted story">

      <article class="media media-spread">
        <a class="pull-left" href="#">
          <img class="media-object" src="placeholders/n1.jpg" alt="">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Solar review casts shadow on high-rises</h4>
          <span class="media-meta">Posted on Oct 29 2013</span>
          <div class="media-content">
            <p>Developers may be prevented from building high-rises that block sunlight from hitting solar panels on buildings in central Melbourne, under new rules being considered by the state government. The Department of Transport, Planning and Local Infrastructure is reviewing planning and building provisions that affect solar panel placement and overshadowing.</p>
            <p>The Department of Transport, Planning and Local Infrastructure is reviewing planning and building provisions that affect solar panel placement and overshadowing.</p>
            <p>A department spokesman said the review would decide whether there is need for reform, with any changes to be part of the new Metropolitan Planning Strategy.</p>
            <p>The move comes as a new study shows Melbourne's inner-city rooftops could host enough solar panels to power 10,000 houses.</p>
            <p>Melbourne City Council examined low-rise commercial buildings and warehouses outside the CBD, including Carlton, Fishermans Bend and Kensington.</p>
          </div>
        </div>
      </article>

    </div>
    
  </div>
</div>


<?php include 'partials/free-quote.php'; ?>
<?php include 'partials/footer.php'; ?>