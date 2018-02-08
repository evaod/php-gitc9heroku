<!DOCTYPE html>
<html lang="en">
  
<?php 	//This will save the value of the total as a cookie 
		//so that it can be accessed on ebusiness3.php
		
		
		setcookie("Total", $_POST['Total'], time() +3600);
 ?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>
    <!-- Used this example as a starting point for my home page and modified the skeleton and navbar
    https://startbootstrap.com/template-overviews/scrolling-nav/-->
    
    
   <!-- learned how to add an icon to the the tab here:
   https://stackoverflow.com/questions/11488960/how-do-i-put-my-websites-logo-to-be-the-icon-image-in-browser-tabs -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.ico" />
   
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='css/custom.css' rel='stylesheet' type='text/css'>
  
  <!--Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        //https://getbootstrap.com/docs/4.0/components/forms/
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>
   
  </head>
 
 
  <body id="page-top">
    
    
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--javascript-->
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

    <header class="bg-primary" id="productspadding">
      
        <div class="container ">
       <a class="style" href ="indexweb.html">HOME /</a>
        <a class="style active" href ="checkout.html">CHECKOUT</a>
        <br>
        </div>
        
      <div class="container text-center ">
      
    
        <h1></h1>
        <p class="lead">
        </p>
        
        
        
       
    </header>
    
     <section id="contact"  >
       <!--Code fromhttps://getbootstrap.com/docs/4.0/components/forms/-->
       <div class="container">
         <?php

        //Learned how to write to database here: 
        //https://www.w3schools.com/php/php_mysql_insert.asp
        
             $host = "127.0.0.1";
             $user = "evaod";                   //Your Cloud 9 username
             $pass = "";                        //Remember, there is NO password by default!
             $db = "sample_db";                 //Your database name you want to connect to
          
                 // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
         
          if(isset($_POST['save']))
          {
            $sql = "INSERT INTO tblCustomers (name,Lname,email)
        VALUES ('".$_POST["Fname"]."','".$_POST["Lname"]."','".$_POST["email"]."')";
        $sql1 = "INSERT INTO tblAddresses (address1, address2, city, postal_code)
        VALUES ('".$_POST["1"]."','".$_POST["2"]."','".$_POST["city"]."', '".$_POST["code"]."')";
        
        if ($conn->query($sql) === TRUE) 
        {
    echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        if ($conn->query($sql1) === TRUE) 
        {
    echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
       
        
        
                #$result = mysqli_query($conn,$sql);
                     # $conn->close();
                  }
                  
                  
            ?>
         
         <form class="needs-validation" method="post" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" name="Fname" class="form-control" id="validationCustom01" placeholder="First name" required>
                <div class="invalid-feedback">
                  Please provide a valid name.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" name="Lname" class="form-control" id="validationCustom02" placeholder="Last name" required>
                <div class="invalid-feedback">
                  Please provide a valid last name.
                </div>
              </div>
              
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Email</label>
                <input type="text" name="email" class="form-control" id="validationCustom03" placeholder="Email" required>
                <div class="invalid-feedback">
                  Please provide a valid email.
                </div>
              </div>
              
              
              
            </div>
            <div class="form-row">
              
              
              <div class="col-md-4 mb-3">
                <label for="validationCustom03">Address Line 1</label>
                <input type="text" name="1" class="form-control" id="validationCustom03" placeholder="Address" required>
                <div class="invalid-feedback">
                  Please provide a valid address.
                </div>
              </div>
              
              <div class="col-md-3 mb-3">
                <label for="validationCustom03">Address Line 2</label>
                <input type="text" name="2" class="form-control" id="validationCustom03" placeholder="Address" required>
                <div class="invalid-feedback">
                  Please provide a valid address.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">City</label>
                <input type="text" name="city" class="form-control" id="validationCustom04" placeholder="City" required>
                <div class="invalid-feedback">
                  Please provide a valid City.
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationCustom05">Postal code</label>
                <input type="text" name="code" class="form-control" id="validationCustom05" placeholder="Postal code" required>
                <div class="invalid-feedback">
                  Please provide a valid postal code.
                </div>
              </div>
            </div>
            
        <button class="btn btn-dark" type="submit" name="save">Place order</button>
          </form>
      
          <!--
                      <div id="dropin-container"></div>
              <button id="submit-button">Purchase</button>
          
              <script src="https://js.braintreegateway.com/web/dropin/1.9.3/js/dropin.min.js"></script>
          
              <script>
                var submitButton = document.querySelector('#submit-button');
          
                braintree.dropin.create({
                  authorization: 'sandbox_2p3jr9x2_pgxy887hjy5gbtgb',
                  container: '#dropin-container'
                }, function (err, dropinInstance) {
                  if (err) {
                    // Handle any errors that might've occurred when creating Drop-in
                    console.error(err);
                    return;
                  }
                  submitButton.addEventListener('click', function () {
                    dropinInstance.requestPaymentMethod(function (err, payload) {
                      if (err) {
                        // Handle errors in requesting payment method
                      }
          
                      // Send payload.nonce to your server
                    });
                  });
                });
              </script>
        
      
      </div>-->
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