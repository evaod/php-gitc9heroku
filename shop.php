<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop</title>
    <!-- Used this example as a starting point for my home page and modified the skeleton and navbar
    https://startbootstrap.com/template-overviews/scrolling-nav/-->
    
    
   <!-- learned how to add an icon to the the tab here:
   https://stackoverflow.com/questions/11488960/how-do-i-put-my-websites-logo-to-be-the-icon-image-in-browser-tabs -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.ico" />
   
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
       <link href="css/products.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
 
 
  <body id="page-top">
    
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--complete bootstrap javascript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- includes the Braintree JS client SDK -->
    <script src="https://js.braintreegateway.com/web/dropin/1.9.3/js/dropin.min.js"></script>
    
    <!-- Navigation -->
    <!-- Learned about chaanging colour of text and background in navbar here
          https://stackoverflow.com/questions/18529274/change-navbar-color-in-twitter-bootstrap-3-->
          
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container">
       
      <a class="navbar-brand js-scroll-trigger" href="indexweb.html">
      <img src="img/Logo_Interiors.png" width="200" height="80" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="indexweb.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="products.html">PRODUCTS & SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="shop.php">ONLINE SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="gallery.html">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="financing.html">FINANCING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cart.php"><i class="fa fa-shopping-cart fa-lg"></i> CART</a> 
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--secondary navbar-->
    <header class="bg-primary" id="productspadding">
      
        <div class="container ">
       <a class="style" href ="indexweb.html">HOME /</a>
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
       
       //devalopment db variables-to use on cloud9
    #$host = "127.0.0.1";
    #$user = "evaod";                    //Your Cloud 9 username
    #$pass = "";                         //Remember, there is NO password by default!
    #$db = "sample_db";                  //Your database name you want to connect to
    
    //Production variables -  To use on Heroku ClearDB
    $host = "eu-cdbr-west-02.cleardb.net";
    $user = "b110759b7e7766";                   
    $pass = "b0ab1edf";                         
    $db = "heroku_bb468c9befbbe02";                  
    
    // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

           #$conn->close();
        ?>
   
    <!--First item - Lemans-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="lemans.php"><img class="card-img-top" src="img/gallery/shop/lemans.jpg" alt=""></a>
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
    
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shop/lemans.php"><img class="card-img-top" src="img/gallery/shop/carousel.jpg" alt=""></a>
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
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shopItem.html"><img class="card-img-top" src="img/gallery/shop/magic.jpg" alt=""></a>
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
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shopItem.html"><img class="card-img-top" src="img/gallery/shop/cleaning.jpg" alt=""></a>
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
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shopItem.html"><img class="card-img-top" src="img/gallery/shop/comfort.jpg" alt=""></a>
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
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shopItem.html"><img class="card-img-top" src="img/gallery/shop/convoy.jpg" alt=""></a>
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
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           <a href="shopItem.html"><img class="card-img-top" src="img/gallery/shop/tandem.jpg" alt=""></a>
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
       
        <p class="m-0 text-center text-black"> Interiors Mobles de Cuina Copyright &copy; 2017 -
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

