<?php 

include 'php/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: php/welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: php/welcome.php");
	} else {
		echo "<script>alert('email yoki parol xato')</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="16maktab,16-maktab, buxoro viloyati qorako'l tumani 16-maktab" />
  <meta name="description" content="Buxoro viloyati qorako'l tumani 16-maktab" />
  <meta name="author" content="Bahodirov Behruz Botirovich" />

  <title>16-maktab</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              16-maktab
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="about.html"> Maktab haqida</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="Teachers.html"> O'qituvchilar</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="Events.html">Tadbirlar</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Courses.html">Kurslar</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="php/login.php">Tizimga kirish</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h2>
            Buxoro viloyati Qoroko'l tumani 16-umumiy o'rta talim maktabining  rasmiy sahifasiga xush kelibsiz
          </h2>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              Maktab haqida
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="img/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <div class="common_style">

    <!-- about section
    <section class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="images/about.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box">
              <h3>
                About our School
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- end about section -->

    <!-- admission section
    <section class="admission_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="admission_detail-box">
              <h3>
                Admission open
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="admission_img-container">
              <img src="images/admission.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section> -->



    <!-- end admission section -->

    <!-- why section 
    <section class="why_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="why_img-container">
              <img src="images/why.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="why_detail-box">
              <h3>
                Why learn on Fanadesh
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->


    <!-- end why section -->

    <!-- determine section 
    <section class="determine_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="determine_detail-box">
              <h3>
                Datermine the right for you
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              </p>
              <div class="">
                <a href="" class="call_to-btn btn_white-border">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="determine_img-container">
              <img src="images/determine.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>-->


    <!-- end determine section -->

  </div>


  <!-- client section
  <section class="client_section layout_padding">
    <h2 class="">
      Testimonial
    </h2>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/client.png" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/client.png" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/client.png" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
     
    </div>
  </section> -->


  <!-- end client section -->


    <!-- contact section 

    <section class="contact_section ">

        <div class="container">
         
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-center d-md-block">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="">
                <div class="contact_form-container">
                  <div>
                    <div>
                      <input type="text" placeholder="Name">
                    </div>
                    <div>
                      <input type="email" placeholder="Email">
                    </div>
                    <div>
                      <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="mt-5">
                      <input type="text" placeholder="Message">
                    </div>
                    <div class="mt-5">
                      <button type="submit">
                        send
                      </button>
                    </div>
                  </div>
    
                </div>
    
              </form>
            </div>
            <div class="col-md-6">
              <div class="contact_img-box">
                <img src="images/students.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <!-- end contact section -->
      <section class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              16-maktab
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-3">
                <h5>
                                                                                                
                </h5>
               <p>
                
               </p>
              </div>
              <div class="col-md-3">
                <h5>
                    Useful Link 
                </h5>
                <ul>
                  <li>
                    <a href="">
                        Video games
                    </a>
                  </li>
                  <li>
                   <a href="">
                      Remote control
                   </a>
                  </li>
                  <li>
                    <a href="">
                        3d controller
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>
                    Biz bilan bog'lanish
                </h5>
                <p>
                    dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e 
                </p>
              </div>
              <div class="col-md-3">
           
                <div class="subscribe_container">
                  <h5>
                      Newsletter
                  </h5>
                  <div class="form_container">
                    <form action="">
                      <input type="email" placeholder="emailni kiriting">
                      <button type="submit">
                        Subscribe
                      </button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                  <div class="social-box">
                    <a href="#">
                      <img src="img/fb.png" alt="">
                    </a>
      
                    <a href="#">
                      <img src="img/twitter.png" alt="">
                    </a>
                    <a href="#">
                      <img src="img/linkedin.png" alt="">
                    </a>
                    <a href="#">
                      <img src="img/instagram.png" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </section>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      <b> Mualliflik huquqi &copy; 2021 Barcha huquqlar himoyalangan <i>Dasturchi: B.Bahodirov</i></b>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

     
      </div>
 <!-- load JS files -->
         <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
         <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
         <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
         <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
         <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
         
         <script>
 
             function adjustHeightOfPage(pageNo) {
 
                 var offset = 80;
                 var pageContentHeight = 0;
 
                 var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");
 
                 if( pageType != undefined && pageType == "gallery") {
                     pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                 }
                 else {
                     pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height();
                 }
 
                 if($(window).width() >= 992) { offset = 120; }
                 else if($(window).width() < 480) { offset = 40; }
                
                 // Get the page height
                 var totalPageHeight = 15 + $('.cd-slider-nav').height()
                                         + pageContentHeight + offset
                                         + $('.tm-footer').height();
 
                 // Adjust layout based on page height and window height
                 if(totalPageHeight > $(window).height()) 
                 {
                     $('.cd-hero-slider').addClass('small-screen');
                     $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                 }
                 else 
                 {
                     $('.cd-hero-slider').removeClass('small-screen');
                     $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                 }
             }
 
             /*
                 Everything is loaded including images.
             */
             $(window).load(function(){
 
                 adjustHeightOfPage(1); // Adjust page height
 
                 /* Gallery One pop up
                 -----------------------------------------*/
                 $('.gallery-one').magnificPopup({
                     delegate: 'a', // child items selector, by clicking on it popup will open
                     type: 'image',
                     gallery:{enabled:true}                
                 });
                 
                 /* Gallery Two pop up
                 -----------------------------------------*/
                 $('.gallery-two').magnificPopup({
                     delegate: 'a',
                     type: 'image',
                     gallery:{enabled:true}                
                 });
 
                 /* Gallery Three pop up
                 -----------------------------------------*/
                 $('.gallery-three').magnificPopup({
                     delegate: 'a',
                     type: 'image',
                     gallery:{enabled:true}                
                 });
 
                 /* Collapse menu after click 
                 -----------------------------------------*/
                 $('#tmNavbar a').click(function(){
                     $('#tmNavbar').collapse('hide');
 
                     adjustHeightOfPage($(this).data("no")); // Adjust page height       
                 });
 
                 /* Browser resized 
                 -----------------------------------------*/
                 $( window ).resize(function() {
                     var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                     
                     // wait 3 seconds
                     setTimeout(function() {
                         adjustHeightOfPage( currentPageNo );
                     }, 1000);
                     
                 });
         
                 // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                 $('body').addClass('loaded');
                            
             });
 
             /* Google map
             ------------------------------------------------*/
             var map = '';
             var center;
 
             function initialize() {
                 var mapOptions = {
                     zoom: 15,
                     center: new google.maps.LatLng(37.769725, -122.462154),
                     scrollwheel: false
                 };
             
                 map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);
 
                 google.maps.event.addDomListener(map, 'idle', function() {
                   calculateCenter();
                 });
             
                 google.maps.event.addDomListener(window, 'resize', function() {
                   map.setCenter(center);
                 });
             }
 
             function calculateCenter() {
                 center = map.getCenter();
             }
 
             function loadGoogleMap(){
                 var script = document.createElement('script');
                 script.type = 'text/javascript';
                 script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                 document.body.appendChild(script);
             }
         
             // DOM is ready
             $(function() {                
                 loadGoogleMap(); // Google Map
             });
 
         </script> 
 
</body>

</html>