<!DOCTYPE html>
<html lang="es">

  <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115167280-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-115167280-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <!-- Used this example as a starting point for my home page and modified the skeleton and navbar
    https://startbootstrap.com/template-overviews/scrolling-nav/-->
    
    
    <!-- learned how to add an icon to the the tab here:
    https://stackoverflow.com/questions/11488960/how-do-i-put-my-websites-logo-to-be-the-icon-image-in-browser-tabs -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
   
   
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <!--Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
     
  </head>
 
 
  <body id="page-top">
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--complete bootstrap javascript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <!-- Navigation -->
    <!-- Learned about chaanging colour of text and background in navbar here
          https://stackoverflow.com/questions/18529274/change-navbar-color-in-twitter-bootstrap-3-->
          
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container">
       
      <a class="navbar-brand js-scroll-trigger" href="index.php">
      <img src="../img/Logo_Interiors.png" width="200" height="80" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="products.html">PRODUCTS & SERVICES</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="gallery.html">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="financing.html">FINANCING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">CONTACT</a>
            </li>
            
             <li class="nav-item">
              <div class="btn-group" role="group" aria-label="Basic example">
              <a href="../index.php"> <button type="button" class="btn btn-light">ES</button></a>
               <a href="index.php"><button type="button" class="btn  btn-light">EN</button></a>
              
            </div>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary">
      <div class="container text-center">
        <h1></h1>
        <p class="lead"></p>
      </div>
      
     <!-- Modified code. Tutorial for the picture slideshow from:
     https://github.com/BlackrockDigital/startbootstrap-shop-homepage/blob/master/index.html-->
   
    <div class="container" id="container">
     
          <div class="col-lg-14 center-block" >
    
              <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="../img/slideshow1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="../img/room.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="../img/brown.jpg" alt="Third slide">
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
             <!-- end of modified code-->
     </div>
     
     
    </header>
    
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1>Interiors mobles de Cuina</h1>
            <p class="lead">The kitchen is the heart of any home, the centre of family life, a place to feel creative and alive.<br><br>
            We design kitchens and interiors to be functional and tailored to the needs of every individual. We help to create spaces that make your life easier.<br><br>
            Our commercial activity is not just restricted to kitchens, worktops and accessories. We can provide all aspects of interior carpentry and joinery including made to measure wardrobes and storage, internal doors, and parquet.
            </p>
            <ul>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container" style="padding-left:5%;">
      <!-- Page Features -->
      <div class="row text-center">

       <!-- Found code for little card boxes with pictures at :
       https://github.com/BlackrockDigital/startbootstrap-heroic-features/blob/master/index.html 
       Modified code starts here-->

        <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
             <a href="kitchenFurniture.html" style="height:100%;">
            <img  class="card-img-top img-responsive img-rounded" src="../img/kitchensquare.jpg" alt="">
            </a>
          
          </div>
        </div>

<!-- original image taken with permission from this website :
https://www.parador.eu/products/laminate-flooring/trendtime/globetrotter-modern-light-1601429 -->
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
            <!--Inline CSS (style = "height:100%;") to fix cross-browser compatibility issues with Internet Explorer 11-->
             <a href="parquet.html" style="height:100%;">
            <img  class="card-img-top img-responsive img-rounded" src="../img/parquet.jpg" alt="parquet">
           </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card ">
             <a href="wardrobes.html" style="height:100%;">
            <img class="card-img-top img-responsive img-rounded" src="../img/wardrobes.jpg" alt="">
           </a>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card ">
             <a href="electricalAppliances.html" style="height:100%;">
            <img class="card-img-top img-responsive img-rounded" src="../img/electrical.jpg" alt="">
           </a>
            
          </div>
        </div>
 <!--End of modified code-->
      </div>
      <!-- /.row -->
      </div>
    </section>

    <section id="contact">
     <div class="modal-body row">
  
  <!--I was having trouble making the map align left and this was a good fix:
  https://stackoverflow.com/questions/35163164/how-to-center-content-in-bootstrap-column-->
  <div class="col-md-6"  align="right">
    
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50964.527805849095!2d-0.4749904734183495!3d39.138237627268595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61a532b035abc5%3A0xc4bdbe1c10862822!2sInteriors+Mobles+de+Cuina!5e0!3m2!1sen!2sie!4v1508183679338" 
     width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
  </div>
  <div class="col-md-6" style="padding-left:8%;">
  
         <!--<div class="col-lg-8 mx-auto">-->
            <h1>Contact us</h1>
            
            <p class= "lead">Interiors Mobles de Cuina<br>
            46740, Carcaixent<br>
            Valencia, ESPAÑA<br>
            Tel: 626006246 / 962434779 <br>
            interiors.carcaixent@gmail.com
            
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Footer -->
    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black"> Interiors Mobles de Cuina Copyright &copy; 2018 -
        interiors.carcaixent@gmail.com - 626006246 / 962434779 </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
  </body>

</html>