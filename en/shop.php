<!DOCTYPE html>
<html lang="en">

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

    <title>Online Shop</title>
    <!-- Used this example as a starting point for my home page and modified the skeleton and navbar
    https://startbootstrap.com/template-overviews/scrolling-nav/-->
    
    
   <!-- learned how to add an icon to the the tab here:
   https://stackoverflow.com/questions/11488960/how-do-i-put-my-websites-logo-to-be-the-icon-image-in-browser-tabs -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
   
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
   
   
     <!-- Custom styles for this template -->
      <link href="../css/products.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
              <a class="nav-link js-scroll-trigger" href="shop.php">SHOP</a>
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
            <li class="nav-item">
              <form target="paypal" class="nav-link js-scroll-trigger" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
              ">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--secondary navbar-->
    <header class="bg-primary" id="productspadding">
      
        <div class="container ">
       <a class="style" href ="index.php">HOME /</a>
        <a class="style active " href ="shop.html">ONLINE SHOP</a>
        <br>
        </div>
        
      <div class="container text-center">
      
       
      
        <h1>Online Shop</h1>
        <p class="lead"> Browse to find the perfect accessories to complement your kitchen <br>

</p>
      </div>
    </header>
    
    <section id="about">
      
        
      <div class="container">
        
        <!--Start of edited code from: 
        https://github.com/BlackrockDigital/startbootstrap-heroic-features/blob/master/index.html
        
        Page Features -->
      <div class="row text-center">

        <?php
        //session_start();
       
       //development db variables-to use on cloud9
    #$host = "127.0.0.1";
    #$user = "evaod";                    //Your Cloud 9 username
    #$pass = "";                         //Remember, there is NO password by default!
    #$db = "sample_db";                  //Your database name you want to connect to
    
    //Production variables -  To use on Heroku ClearDB
    $host = "eu-cdbr-west-02.cleardb.net";
    $user = "b753690a4c189a";                   
    $pass = "4d3b8a01";                         
    $db = "heroku_516c1a6c01766ca";                  
    
    // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

           #$conn->close();
        ?>
   
    <!--First item - Lemans-->
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopLemans.php" style="height:50%;"><img class="card-img-top" src="../img/gallery/shop/lemans.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='2'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                             
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                </h4>
              
              <p class="card-text">
              <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='2'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              
                </p>
            </div>
            
          </div>
        </div>
        
    <!--Second item - Carousel-->    
    
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopCarousel.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/carousel.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='7'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='7'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              </p>
            </div>
            
          </div>
        </div>
        
        <!--Third item  - Magic corner-->
        
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopMagic.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/magic.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='3'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='3'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              </p>
            </div>
            
          </div>
        </div>
        
        
        <!--Fourth item - Cleaning agent-->
        
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopCleaning.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/cleaning.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='8'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='8'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              </p>
            </div>
            
          </div>
        </div>
        
        
        
        
         <!--Fifth item - Comfort ii-->
        
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopComfort.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/comfort.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='9'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='9'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              </p>
            </div>
            
          </div>
        </div>
        
        
        
        
        <!--Sixth item - Convoy-->
        
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopConvoy.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/convoy.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='10'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='10'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
              </p>
            </div>
            
          </div>
        </div>
        
        
        
        
        <!--Seventh item - Tandem-->
        
        <div class="col-lg-3 col-md-6 mb-4 img-hover">
          <div class="card">
           <a href="shopTandem.php" style="height:50%;">
             <img class="card-img-top img-responsive img-rounded" src="../img/gallery/shop/tandem.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='11'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo $row["title"];
                          }
                      } else {
                          echo "0 results";
                      }
              ?>
                
              </h4>
              <p class="card-text">
                <?php
              $sql = "SELECT * FROM tblproducts WHERE product_id='11'";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              #echo $row["title"]
                              echo $row["description"];
                          }
                      } else {
                          echo "0 results";
                      }
                      $conn->close();
              ?>
              </p>
            </div>
            
          </div>
        </div>

      </div>
      <!-- /.row -->

          
          
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="../js/scrolling-nav.js"></script>

  </body>

</html>

