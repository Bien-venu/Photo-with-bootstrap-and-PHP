<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist//bootstrap-5.0.2-dist/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>

  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide "  data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner h-9">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/pexels-alexander-grey-1209843.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/pexels-mason-slover-940271.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/pexels-navneet-shanu-672630.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Animation</h2>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-saya-kimura-401107.jpg" alt="" class="img-fluid pb-3">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-nikita-khandelwal-788855.jpg" alt="" class="img-fluid pb-3">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-roberto-nickson-2585913.jpg" alt="" class="img-fluid pb-3">
        </div>
    </div>

</section>
</a>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature</h2>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-saya-kimura-401107.jpg" alt="" class="img-fluid pb-3">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-nikita-khandelwal-788855.jpg" alt="" class="img-fluid pb-3">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/pexels-roberto-nickson-2585913.jpg" alt="" class="img-fluid pb-3">
        </div>
    </div>

</section>
</a>


<a>
<section class="my-4">
<div class="py-4">
  <h3 class="text-center">INES - Ruhengeri</h3> <br>
  <p class="text-center">
    We ar passionated photographers interested in working with nature , Architecture and travel photography.
  </p>
</div>
</section>
</a>
<a id="contact">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">

    <form action="contactUs.php" method="post">
      <div class="form-group">
        <label>Names:</label>
        <input type="text" name="form-names" class="form-control" required>
      </div>
       <div class="form-group">
        <label>Email:</label>
        <input type="email" name="form-emails" class="form-control" required>
      </div>
       <div class="form-group">
        <label>Phones:</label>
        <input type="number" name="form-phones" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Message:</label>
        <textarea name="form-message" id="" rows="3" class="form-control" required></textarea>
      </div>
      <button  type="submit" class="btn btn-success">Submit</button>
    </form>
    
  </div>
</section>
</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>