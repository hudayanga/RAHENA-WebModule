<!DOCTYPE html>
<html lang="en">

  <head>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>
    <script>
     function initialize()
       {
        var mapProp = {
         center:new google.maps.LatLng(5.94413,80.5492),
         zoom:5,
         mapTypeId:google.maps.MapTypeId.ROADMAP
         };
         var map=new google.maps.Map(document.getElementById("googleMap")
           ,mapProp);
             }

             google.maps.event.addDomListener(window, 'load', initialize);
      </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="description" content="Creating basic alerts with Twitter Bootstrap. Examples of alerts and errors with Twitter Bootstrap">   
    <link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  

    <meta name="author" content="Your name">
    <title>REHENA</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    


    <!-- Start: HEADER -->
    <style type="text/css">

    .navbar-inner{

      background: #F79F81;
    }
    .newww{


      background: #B6BC04;
    }
    .dropdown{

     font-style: black;
    }
    .b{

      color: black;
    }






    </style>
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.html" class="brand brand-bootbus">
              <img src="img/logo.png" width="100" height="100" alt="">

            </a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Area<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header"></li>
                    <li><a href="product.html">Track service crews</a></li>
                    <li><a href="product.html">Our locations</a></li>
                    <li><a href="product.html"></a></li>
                    <li><a href="all_products.html"></a></li>             
                    <li class="divider"></li>
                    <li class="nav-header"></li>
                    <li><a href="service.html"></a></li>
                    <li><a href="service.html"></a></li>
                    <li><a href="service.html"></a></li>
                    <li><a href="all_services.html"></a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintains<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Running processes</a></li>
                    <li><a href="patnerships.html">Areas to fix</a></li>
                    <li><a href="leadership.html">Shedule power cut</a></li>
                    <li><a href="news.html"></a></li>
                    <li><a href="events.html"></a></li>
                    <li><a href="blog.html"></a></li>
                  </ul>
                </li>
                <li><a href="faq.html">Previous status</a></li>
                <li><a href="contact_us.html">Complains</a></li>
               
                <li><a href="signin.html">Sign in</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar2">
        <div class="navbar-inner" >
          <body>
            
            <div class="newww">
            </div>

          </body>
          </div>
          </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class >
      </div>
      <!-- Start: slide'r -->
      <div class="container">
            <li class="span8">

                <div class="thumbnail">

                  
                  <div class="caption">
                    <h3>Dehiwala</h3>
                    <div id="googleMap" style="width:700px;height:480px;"></div>

                  </li>

                    <li class="span3">  
                    <div class="alert">  
                       <a class="close" data-dismiss="alert">×</a>  
                      <span class="label label-important">Warning!</span></strong> <?php
         

         $client = new SoapClient('http://localhost:8080/axis2/services/axis2Services?wsdl');
         $params = array('mcid'=> '1');
         $result = $client->getLongitude_Mc($params);
          print_r($result);
       ?><br>
                      Time:  18:44 pm 
                      
                    </div> 
                    <div class="alert">  
                       <a class="close" data-dismiss="alert">×</a>  
                      <span class="label label-important">Warning!</span></strong> Bellanwila power down<br>
                      Time:  18:44 pm 
                      
                    </div> 
                    <div class="alert">  
                       <a class="close" data-dismiss="alert">×</a>  
                      <span class="label label-important">Warning!</span></strong> Bellanwila power down<br>
                      Time:  18:44 pm 
                      
                    </div> 
                    </li>
                    
                  </div>
                  </div>
                    
                </div>
              </li>
           </div>
      





      </div>
       <?php
         

         $client = new SoapClient('http://192.168.43.26:8080/axis2/services/axis2Services?wsdl');
         $params = array('mcid'=> '1');
         $result = $client->getLongitude_Mc($params);
          print_r($result);
       ?>
      


    


     
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
         
            <h2></h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span12">
                <div class="thumbnail">
                  
                  
                    <h3>Status</h3>
                    <p>
                      <div class="alert alert-error">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <h4><span class="label label-important">Warning!</span></h4>
                      Bellanwila temple area power isue still not fixed.
                      </div>
                      <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <span class="label label-success">Success</span>
                      <p>Dehiwala recover procces complete.</p>
                      </div>
                    </p>
                    <p>
                      <div class="alert alert-error">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <h4><span class="label label-important">Warning!</span></h4>
                      Bellanwila temple area power isue still not fixed.
                      </div>
                      <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <span class="label label-success">Success</span>
                      <p>Dehiwala recover procces complete.</p>
                      </div>
                    </p>
                  </div>
                  
                    <p>
                      <a href="#" class="btn btn-primary"></a>&nbsp;
                      <a href="product.html" class="btn"></a>
                    </p>
                  </div>
                </div>
              </li>
              
              
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i>Area</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html"></a></li>
                <li><a href="product.html"></a></li>
                <li><a href="product.html"></a></li>
                <li><a href="all_products.html"></a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i>Maintans</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html"></a></li>
                <li><a href="service.html"></a></li>
                <li><a href="service.html"></a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i>Previous records</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Complains</a></li>
                <li><a href="leadership.html"></a></li>
                <li><a href="news.html"></a></li>
                <li><a href="events.html"></a></li>
                <li><a href="blog.html"></a></li>
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i></h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html"></a></li>
                <li><a href="contact_us.html"></a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i></h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4></h4>
            <div class="social-icons-row">
                                                       
            </div>
            <div class="social-icons-row">
                  
            </div>
            <div class="social-icons-row">
              
            </div>
          </div>      
          <div class="span3">
            <h4></h4>
            <form>
              
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 Bootbusiness, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>

  </body>
</html>
