		<?php 
		  session_start(); 
		
		  if (!isset($_SESSION['username'])) {
			$_SESSION['msg'] = "You must log in first";
			header('location: login.php');
		  }
		  if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			header("location: login.php");
		  }
		?>
		
		<?php 
		if(isset($_POST['submit'])){
			$to = "kontakt@multimedia.com"; // this is your Email address
			$from = $_POST['email']; // this is the sender's Email address
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$subject = "Form submission";
			$subject2 = "Copy of your form submission";
			$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
			$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
		
			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			mail($to,$subject,$message,$headers);
			mail($from,$subject2,$message2,$headers2); 
			echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			
			}
		?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loginpage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Dobrodošli</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><p style="color:white">O nama</p></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><p style="color:white">Usluge</p></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><p style="color:white">Mapa</p></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php" > <p style="color:white"> Kontakt | </p></a></li>
                      
                        <!-- notification message -->
							<?php if (isset($_SESSION['success'])) : ?>
                              <div class="error success" >
                                <h3>
                                  <?php 
                                    echo $_SESSION['success']; 
                                    unset($_SESSION['success']);
                                  ?>
                                </h3>
                              </div>
                            <?php endif ?>
                        
                            <!-- logged in user information -->
                            <?php  if (isset($_SESSION['username'])) : ?>
                                <center><p><strong><?php echo $_SESSION['username']; ?></strong></p></center>
                                <p> <a href="login.php?logout='1'" style="color: red;">  | logout |</a> </p>
                            <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
            
                <div class="row h-100 align-items-center justify-content-center text-center">
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/NjfVp19Tu1M?start=6" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                    
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                        <br>
                         <form class="form-horizontal" action="contact-form-process.php" method="post" >
                          <fieldset>
                            <legend class="text-center"></legend>
                    
                            <!-- Name input-->
                            <div class="form-group">
                              <label class="col-md-3 control-label" for="Name"></label>
                              <div class="col-md-9">
                                <input id="Name" name="Name" type="text" placeholder="Upišite ime" class="form-control">
                              </div>
                            </div>
                    
                            <!-- Email input-->
                            <div class="form-group">
                              <label class="col-md-3 control-label" for="Email"></label>
                              <div class="col-md-9">
                                <input id="Email" name="Email" type="text" placeholder="Vaš email" class="form-control">
                              </div>
                            </div>
                    
                            <!-- Message body -->
                            <div class="form-group">
                              <label class="col-md-3 control-label" for="Message"></label>
                              <div class="col-md-9">
                                <textarea class="form-control" id="Message" name="Message" placeholder="Upišite Vaše želje i pozdrave!" rows="5"></textarea>
                              </div>
                            </div>
                    
            <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 text-left">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                  </form>
                </div>
              </div>
      
                    <div class="col-lg-10 align-self-end">
                      <img src="assets/img/logo.png" width="100" height="100">
						<hr class="divider my-4" />
    				</div>
                    <div class="content">
					</div>
                   
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
            
            
            
            
                <div class="row justify-content-center">
                         <div class="col-lg-8 text-center">
                        <hr class="divider my-4" />
                        
                    </div>
                </div>
                
             
    <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
