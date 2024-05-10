<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgba(0, 0, 255, 0.76)">
    <div class="container-fluid">
      <a class="navbar-brand" href="/registerhomepage"> <img src="images/lo.jpeg" alt="E-Kart Logo" width="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/registerhomepage">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/productswithoutauth">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<!-- slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Cover_Image_6.jpg" class="d-block w-100"style="height: 400px;"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Blog-Image-1-1.webp" class="d-block w-100"style="height:400px;"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/images.jpeg" class="d-block w-100"style="height: 400px;"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container fluid">
 
<div class="row">

<div class="col-12">

<h1 class="text-center display-6 mt-5 mb-5">Lorem ipsum dolor sit amet consectetur <br> elit Sit quas molestiae sequi possimus.</h1>

</div>
</div>
  <!-- features -->
  <div class="row justify-content-evenly">
    <div class="col-md-3 text-center mt-5">
      <h1><i class="bi bi-wrench-adjustable text-secondary"></i></h1>
      <h5>Returns and Exchange</h5>
      <p>All products come under 15 days of exchange and return.</p>
    </div>

    <div class="col-md-3 text-center mt-5">
      <h1><i class="bi bi-truck text-"></i></h1>
      <h5>Free shipment</h5>
      <p>Free shipment on orders above 300. The offer is applicabe for 1 order only. </p>
    </div>

    <div class="col-md-3 text-center mt-5">
      <h1><i class="bi bi-patch-check-fill text-primary"></i></h1>
      <h5>Verified Seller </h5>
      <p>All the sellers are verified in the platform.You can buy orginal products on 10 % discount </p>
    </div>


  </div>

  <div class="row justify-content-evenly pt-3 pb-5">
    <div class="col-md-5 mt-5 pt-3">
      <img src="images/pre.jpeg" class="img-fluid" style="max-width: 100%; max-height: 300px;" alt="">


    </div>
    <div class="col-md-5 mt-5 text-center mb-5 pt-3">
      <h5 class="mt-2"  >Our Services</h5>
      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success" style="width: 100%"></div>
      </div>
    
     <h5 class="mt-4"> Price </h5>
      <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning " style="width: 100%"></div>
      </div>
      <h5  class="mt-4">Quality</h5>
      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info" style="width: 100%"></div>
      </div>
      <h5  class="mt-4">Collections</h5>
      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-danger" style="width: 100%"></div>
      </div>
  
    </div>
  </div>


  <div class="row justify-content-evenly pt-2 pb-5" style="background-color:white">
    <div class="col-5 mt-5">
      <h3 class="m-4 text-center">Contact Form</h3>
      <form>
        <div class="mb-3 mt-5">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" >
        
        </div>
        
        <div class="mb-3 mt-5">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="container">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>
        
        
        
        <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
      </form>




    </div>





    <div class="col-5 mt-5">

      <h3 class="text-center m-4">Address</h3>
      <p>E-40, Phase-8,<br> Industrial Area,<br> Sahibzada Ajit Singh Nagar,<br> Punjab 160071 <br><i class="bi bi-telephone"></i>: 914-541-072</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.492921569769!2d76.68820470571521!3d30.704540226877373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef35ff996629%3A0x56af50ec0799b622!2sTeleperformance%20Mohali!5e0!3m2!1sen!2sin!4v1715253726074!5m2!1sen!2sin" style="width:100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>


  </div>

<!-- faq -->
<div class="row justify-content-evenly pt-5 pb-5">
<div class="col-md-10">

<h3 class="text-center">FAQ</h3>
<div class="accordion accordion-flush border" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>


</div>

</div>



</div>

<!-- footer -->
<div class="row justify-content-evenly bg-dark text-white pt-2 pt-4">
  
  <div class="col-md-3 pt-4 ">
    <h3 class="mb-2">Contact us</h3> 
    <p>E-40, Phase-8,<br> Industrial Area,<br> Sahibzada Ajit Singh Nagar,<br> Punjab 160071 <br><i class="bi bi-telephone"></i>: 914-541-072</p>
  </div>
 
 
 
  <div class="col-md-3 pt-4">
    <h3>Important Links</h3>
    <p >
      <a href="" class="link-light text-decoration-none">Home</a><br>
      <a href="" class="link-light text-decoration-none">Products</a><br>
      <a href="" class="link-light text-decoration-none">Services</a><br>
      <a href="" class="link-light text-decoration-none">Partners</a><br>
      <a href="" class="link-light text-decoration-none">Our team</a><br>
      <a href="" class="link-light text-decoration-none">Collaborations</a><br>

    </p>
  </div>
 
  <div class="col-md-3 pt-4">
    <h3>About us</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi possimus quisquam eum mollitia aliquid nihil vel repudiandae sunt at odit.</p>

  </div>

  <div class="row bg-secondary p-2">

    <div class="col-12">
      <p class="text-center">Copy Right 2021-2024. All rights reserved </p>
    </div>
  </div>
 
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 
