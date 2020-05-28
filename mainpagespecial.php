<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Admin stranica za prikaz dodatnog sadrzaja" />
        <meta name="author" content="Alan Spiljak" />
        <title>Homepage Admin</title>
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
        <link href="css/styles_admin.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Dobrodošli</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">O nama</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Mapa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Logoff</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                      <h1 class="text-uppercase text-white font-weight-bold">Admin site</h1>

                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Uređivanje korisnika</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Započni</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Registracija korisnika</h2>
                     
                        

                            <form method="post" action="register.php">
                            <?php include('errors.php'); ?>
                            <div class="input-group">
                              <label>Kor.ime</label>
                              <input type="text" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group">
                              <label>Email</label>
                              <input type="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="input-group">
                              <label>Lozinka</label>
                              <input type="password" name="password_1">
                            </div>
                            <div class="input-group">
                              <label>Potvrdi lozinku</label>
                              <input type="password" name="password_2">
                            </div>
                            <div class="input-group">
                              <button type="submit" class="btn" name="reg_user">Registriraj korisnika</button>
                            </div>
                         
                          </form>

    					
                    </div>
                  
        </section>
                </div>
                  <!-- start sw-rss-feed code --> 
                    <script type="text/javascript"> 
                    <!-- 
                    rssfeed_url = new Array(); 
                    rssfeed_url[0]="http://feeds.bbci.co.uk/news/world/europe/rss.xml#";  
                    rssfeed_frame_width="2430"; 
                    rssfeed_frame_height="400"; 
                    rssfeed_scroll="on"; 
                    rssfeed_scroll_step="6"; 
                    rssfeed_scroll_bar="off"; 
                    rssfeed_target="_blank"; 
                    rssfeed_font_size="12"; 
                    rssfeed_font_face=""; 
                    rssfeed_border="on"; 
                    rssfeed_css_url="https://feed.surfing-waves.com/css/style2a.css"; 
                    rssfeed_title="on"; 
                    rssfeed_title_name=""; 
                    rssfeed_title_bgcolor="#3366ff"; 
                    rssfeed_title_color="#fff"; 
                    rssfeed_title_bgimage=""; 
                    rssfeed_footer="off"; 
                    rssfeed_footer_name="rss feed"; 
                    rssfeed_footer_bgcolor="#fff"; 
                    rssfeed_footer_color="#333"; 
                    rssfeed_footer_bgimage=""; 
                    rssfeed_item_title_length="50"; 
                    rssfeed_item_title_color="#666"; 
                    rssfeed_item_bgcolor="#fff"; 
                    rssfeed_item_bgimage=""; 
                    rssfeed_item_border_bottom="on"; 
                    rssfeed_item_source_icon="off"; 
                    rssfeed_item_date="off"; 
                    rssfeed_item_description="on"; 
                    rssfeed_item_description_length="120"; 
                    rssfeed_item_description_color="#666"; 
                    rssfeed_item_description_link_color="#333"; 
                    rssfeed_item_description_tag="off"; 
                    rssfeed_no_items="0"; 
                    rssfeed_cache = "92e7997e664105178f717faf520a2048"; 
                    //--> 
                    </script> 
                    <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
                    <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
                    <div style="color:#ccc;font-size:10px; text-align:center; width:230px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
                    <!-- end sw-rss-feed code -->
            </div>
        </section>
        </section>
       
        <!-- Portfolio-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                                      
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.0548434053994!2d15.972103051215957!3d45.81016001820999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6fc7635cc3d%3A0x1e44eb419500eebe!2sMULTIMEDIA%20INSTITUTE%20-%20club%20MaMa!5e0!3m2!1sen!2shr!4v1589732104808!5m2!1sen!2shr" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <br></br>
                <h2 class="mt-0">Ovdje smo! Posjeti nas!</h2>
            </div>
            
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            

        <div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h3 class="reviews">Ostavi komentar</h3>
            <div class="logout">
                <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#logout').hide(); $('#login').show()">
                    <span class="glyphicon glyphicon-off"></span> Logout                    
                </button>                
            </div>
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab">
                <h4 class="reviews text-capitalize">Komentari</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Dodaj komentar</h4></a></li>
                <li><a href="#account-settings" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Postavke profila</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://i.ibb.co/Q8Q892p/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">DarthMaul</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">18/</li>
                                <li class="mm">05</li>
                                <li class="aaaa">2020</li>
                              </ul>
                              <p class="media-comment">
                                Cool opcija,al nitko ti nebu komentiral po ovoj stranici
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span>Odgovori</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 0 komentara</a>
                          </div>              
                        </div>
                      </li>          
                      <li class="media"></li>
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://i.ibb.co/YWPFrGG/1288.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Barica420</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2020</li>
                              </ul>
                              <p class="media-comment">
                                slazem se, cekk al i ja sad komentiram, vidis da ima smisla
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Odgovori</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyTwo"><span class="glyphicon glyphicon-comment"></span> 1 komentar</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyTwo">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span>Jozica</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2020</li>
                                          </ul>
                                          <p class="media-comment">
                                            Classy!
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Odgovori</a>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                            <div class="col-sm-10">                    
                                <div class="input-group">
                                  <div class="input-group-addon">http://</div>
                                  <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
                <div class="tab-pane" id="account-settings">
                    <form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10">                                
                                <div class="custom-input-file">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Vilma palma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">Nick name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Vilma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="vilma@mail.com">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Save changes</button>
                                    </div>
                                </div>            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row"></div>
          <div class="page-header text-center">
            <h3 class="reviews"><span class="glyphicon glyphicon-magnet"></span> Uicomments by <a href="https://twitter.com/maridlcrmn">maridlcrmn</a></h3>
          </div>
          <div class="notes text-center"><small>Image credits: uifaces.com</small></div>
</div>
</div>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Bootstrap</div></div>
        </footer>
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
