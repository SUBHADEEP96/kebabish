<!DOCTYPE html>

<html>
<head>
<style>
.carousel-inner img{
width:100%;
height:100%;


}
</style>
<title>Welcome To Stoney Kebabish</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="iamge/Capture.jpg" alt="logo"><br><p style="font-size:15px;margin-left:20px;color:#fbc531">We Serve Best Kebabs</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> Special Kebabs</a>
		  <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="#">Non-Veg</a>
			 
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Pizza</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="iamge/sl1.jpg"   class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>We Serve Halal Meat</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="iamge/sl2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Best Meat in the City</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="iamge/sl3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Taste At It's Best</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</header>

<section>
<div class="container-fluid">
<h1 class="text-center text-capitalize pt-5">About us</h1>
<hr class="w-25 mx-auto">

<div class="row mb-4">

<div class="col-lg-6 col-md-6 col-12">
<img src="iamge/about.jpg" class="img-fluid">

</div>


<div class="col-lg-6 col-md-6 col-12">

<h1 class="text-center">Who We Are?</h1>
<p class="pt-4">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
</p>
<button class="btn btn-primary">Know More</button>

</div>

</div>

</div>
</section>

<!--service
<section>
<div class="container-fluid">

<h1 class="text-center text-capitalize pt-5">Services</h1>
<hr class="w-25 mx-auto">

<div class="row text-center mb-4">

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px"  class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>
</div>

<div class="row text-center mb-4">

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px"  class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-12">
<div class="card" style="width:300px">
  <img class="card-img-top" src="iamge/seo_135.jpg" style="width:250px" class="img-fluid" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-center">SEO</h4>
    <p class="card-text">Content is anything and everything that exists in the form of digital data; words, pictures, audios, videos, site or social visitor’s questions,</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

</div>

</div>

</div>
</section>-->

<section class="bg-dark">
<article class="py-5 text-center">

<div>

<h3 class="display-4 text-white">567730739</h3>
<p class="text-white">Content us for Ordering Food</p>
<button class="btn btn-danger">Contact Now</button>
</div>

</article>
</section>

<section>
<div class="container-fluid">

<h1 class="text-center text-capitalize pt-5">Gallery</h1>
<hr class="w-25 mx-auto">

<div class="row">
<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>
<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>

<div class="col-lg-4 col-md-2 col-12 mb-4">
<img src="iamge/gal.jpg" class="img-fluid">
</div>
</div>
</div>
</section>

<section class="bg-dark">
<article class="py-5">

<div class="text-center">

<h3 class="display-4 text-white"> Join us To Get Offers</h3>
<p class="text-white">Be a Part Of Stoney Kebabish Family </p>
<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Join us Now</button>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign In</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</article>
</section>

<section>
<div class="container mb-5">

<h1 class="text-center text-capitalize pt-5">Contact Us</h1>
<hr class="w-25 mx-auto">
<div class="w-50 mx-auto">
<form action="/action_page.php">
<div class="form-group">
    <label for="pwd">Your Name:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Mobile:</label>
    <input type="number" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Why Do You Join Us?</label>
    <textarea class="form-control"></textarea>
 </div>
  
  
  
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>

<footer>
<p class="text-center bg-dark text-white p-3">&copy; stoneykebabish.com 2019 Powered By Thinksurfmedia LLP</p>
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>