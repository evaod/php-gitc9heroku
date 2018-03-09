<?php
//START OF EDITED CODE FROM https://github.com/IceTimux/SMTP-Bootstrap-Contact-Form
      if(isset($_POST['submit'])) 
      {
      $message=
      'Full Name:	'.$_POST['fullname'].'<br />
      Subject:	'.$_POST['subject'].'<br />
      Phone:	'.$_POST['phone'].'<br />
      Email:	'.$_POST['emailid'].'<br />
      Comments:	'.$_POST['comments'].'
      ';
          require "../PHPMailer-master/class.phpmailer.php"; //include phpmailer class
            
          // Instantiate Class  
          $mail = new PHPMailer();  
            
          // Set up SMTP  
          $mail->IsSMTP();                // Sets up a SMTP connection  
          $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
          $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
          $mail->Host = "smtp.sendgrid.net";  //Gmail SMTP server address
           #$mail->Port = 465;  //Gmail SMTP port
         $mail->Port = 465;  //Gmail SMTP port
          $mail->Encoding = '7bit';
         
            
            $mail->Username   = "apikey"; // Your full Gmail address
            $mail->Password   = "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"; // Your Gmail password
            
          // Compose
          $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
          $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
          $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
          $mail->MsgHTML($message);
       
          // Send To  
          $mail->AddAddress("evaodriscoll96@gmail.com"); // Where to send it - Recipient
          $result = $mail->Send();		// Send!  
      	$message = $result ? '<div class="alert alert-success" role="alert"><strong>Success! </strong>Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';  
      	unset($mail);
      }
//end of edited code
?>

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

    <title>Contact</title>
    <!-- Used this example as a starting point for my home page and modified the skeleton and navbar
    https://startbootstrap.com/template-overviews/scrolling-nav/-->
    
    
   <!-- learned how to add an icon to the the tab here:
   https://stackoverflow.com/questions/11488960/how-do-i-put-my-websites-logo-to-be-the-icon-image-in-browser-tabs -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
   
     <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    
   <link href='../PHPMailer-master/contact.css' rel='stylesheet' type='text/css'>
    
  
     <!--Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
 
 
  <body id="page-top">

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
              <a class="nav-link js-scroll-trigger" href="contact.hmtl">CONTACT</a>
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

    <header class="bg-primary" id="productspadding">
      
        <div class="container ">
       <a class="style" href ="index.php">HOME /</a>
        <a class="style active" href ="contact.php">CONTACT</a>
        <br>
        </div>
        
      <div class="container text-center ">
      
    
        <h1>Experience and professionality</h1>
        <p class="lead"> All of our kitchens and interiors are designed in a way that the client can customise them to their liking, with a wide variety of colours, materials and finishings.
        If you are interested in our products, you can contact us through email at <b>interiors.carcaixent@gmail.com</b>, by telephone <b>626006246 </b>or through the online form.<br>
        The shop opening hours are Monday to Friday 10 to 13:30 and 5:30 to 8:30.
       
        </p>
       
    </header>
    
     <section id="contact1">
    <div class="modal-body row">
        
       <div class="col-md-6"  >
          <!-- Start of modified code. Tutorial from:
         https://github.com/IceTimux/SMTP-Bootstrap-Contact-Form-->

      <div class="contactform">
  	<div class="panel panel-default">
  		<div class="panel-heading">
    	</div>
    	<div class="panel-body">
    	<form name="form1" id="form1" action="" method="post">
    			<fieldset>
    			  <input type="text" class="form-control" name="fullname" placeholder="Full Name" />
    			  <br />
    			  <input type="text" class="form-control" name="subject" placeholder="Subject" />
    			  <br />
    			  <input type="text" class="form-control" name="phone" placeholder="Phone" />
    			  <br />
    			  <input type="email" class="form-control" name="emailid" placeholder="Email" />
    			  <br />
    			  <textarea rows="4" class="form-control" cols="20" name="comments" placeholder="Comments"></textarea>
    			  <br />
    			  <input type="submit" class="btn btn-dark"name="submit" value="Send Message" />
    			</fieldset>
    	</form>
    	<p><?php if(!empty($message)) echo $message; ?></p>
    	</div>
	</div>
	</div>
       <!-- End of modified code.-->
      </div>
      
      <div class="col-md-6"  align="right" >
    
        <!-- This is where I learned how to round the borders of images:
        https://v4-alpha.getbootstrap.com/utilities/borders/-->
        
        <img width="250" height="350" class="img-responsive rounded "  src="../img/shop.jpg" alt="shop">
        <img width="250" height="350" class="img-responsive rounded" src="../img/shop1.jpg" alt="shop">
        
         
         
         
    
        </div>
      
      
      </div>
      
      
      
      <!--End of modified code -->

    </div>
  </div>
    </section>
    
     <section id="services" class="bg-light">
      <div class="container">
         <!-- Page Features -->
      <div class="row text-center">

 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50964.527805849095!2d-0.4749904734183495!3d39.138237627268595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61a532b035abc5%3A0xc4bdbe1c10862822!2sInteriors+Mobles+de+Cuina!5e0!3m2!1sen!2sie!4v1508183679338" 
         width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
        
           
         
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="../js/scrolling-nav.js"></script>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="../validator.js"></script>
        <script src="../js/contact.js"></script>

  </body>

</html>