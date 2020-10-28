<?php 
extract($_POST);
if(isset($button))
{
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $text = $_REQUEST['text'];
  
  $message="Name=$name.Email=$email.Phone=$phone.Message=$text";
  //$mail="Jattesh13@gmail.com, autoexplain@gmail.com";
  
  $url = "index.html";
  if(empty($name) || empty($email) || empty($phone)|| empty($text)){
  
      echo "<script type='text/javascript'> alert('Your Message not sent ')</script>";
  }
  
  else
  {
      mail($mail,"Message from Website", $message, "From: $name <$email>");
      
      $mongo = new MongoClient();
          $db=$mongo->jatte;
          $collection=$db->text;

          if($_POST)
          {
              $insert= array(
                  'name'=>$_POST['name'],
                  'email'=>$_POST['email'],
                  'phone'=>$_POST['phone'],
                  'text'=>$_POST['text']
              );

              if($collection->insert($insert))
              {
                 
              }

              else
              {
                  echo "Some issue";
              }


          }
          else 
          {
              echo "no data stored";
          }
            }
            
          }

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Unfold - Online Bicycles Shop</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="stylesheet" href="assets/fonts/line-icons.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">

  <!-- Animate -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  

</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">
                About Us
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="#testimonial">
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Download The App <br>"Shop" Bicycle</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum
                nulla magnam veniam sapiente, fugiat! fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat!</p>
              <div class="header-button">
                <a href="#" class="btn btn-common">Download Now</i></a>
                <a href="#" class="btn btn-border video-popup">Learn More</i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <div class="intro-img">
              <img class="img-fluid" src="assets/img/intro-mobile.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->

  </header>
  <!-- Header Area wrapper End -->



  <!-- About Us Section Start -->
  <section id="features" class="section-padding">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">About Us</h2>
        <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="content-left">
            <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
              <span class="icon">
                <i class="lni-rocket"></i>
              </span>
              <div class="text">
                <h4>One day Delivery</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
              <span class="icon">
                <i class="lni-laptop-phone"></i>
              </span>
              <div class="text">
                <h4>Shop Bicycle from Home</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
              <span class="icon">
                <i class="lni-cog"></i>
              </span>
              <div class="text">
                <h4>Customizable Bicycle</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
            <img src="assets/img/feature/intro-mobile.png" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="content-right">
            <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
              <span class="icon">
                <i class="lni-leaf"></i>
              </span>
              <div class="text">
                <h4>Modern Design Bicycle</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              </div>
            </div>
            <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
              <span class="icon">
                <i class="lni-layers"></i>
              </span>
              <div class="text">
                <h4>Multi-purpose Bicycle</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
              <span class="icon">
                <i class="lni-leaf"></i>
              </span>
              <div class="text">
                <h4>Towards Ecofriendly</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us Section End -->

  <!-- Products Section Start -->

  <section id="testimonial" class="testimonial section-padding">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Products</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/s.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">
                  <h2><a href="#">Sports Bicycle</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/a.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">
                  <h2><a href="#">Roadstar Bicycles</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/b.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">
                  <h2><a href="#">Kids Bicycle</a></h2>
                  <h3><a href="#">For Kids</a></h3>

                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/8.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">

                  <h2><a href="#">Hill Bicycles</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/g.gif" alt="" width="150px" height="150px">
                </div>
                <div class="info">
                  <h2><a href="#">Joging Bicycles</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/l.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">

                  <h2><a href="#">Ladies Bicycles</a></h2>
                  <h3><a href="#">For women</a></h3>

                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/n.jpg" alt="" width="150px" height="150px">
                </div>
                <div class="info">

                  <h2><a href="#">Classic Bicycle</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-item">
                <div class="img-thumb">
                  <img src="assets/img/testimonial/r.jpeg" alt="" width="150px" height="150px">
                </div>
                <div class="info">
                  <h2><a href="#">Runing Bicycle</a></h2>
                  <h3><a href="#">For Mens</a></h3>
                </div>
                <div class="content">
                  <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex
                    fermentum, gravida felis nec, tincidunt ligula.</p>
                  <div class="star-icon mt-3">
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-half"></i></span>
                    <span><i class="lni-star-half"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section End -->



  <!-- Services Section Start -->
  <section id="services" class="section-padding">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
        <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
      </div>
      <div class="row">
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon">
              <i class="lni-cog"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Free Maintenance</a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
            <div class="icon">
              <i class="lni-stats-up"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Free Data </a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
            <div class="icon">
              <i class="lni-users"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Home Pickup</a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
            <div class="icon">
              <i class="lni-layers"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">2 yera Design warenty</a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
            <div class="icon">
              <i class="lni-mobile"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Free App Access</a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
            <div class="icon">
              <i class="lni-rocket"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">User Friendly services</a></h3>
              <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->








  <!-- Contact Section Start -->
  <section id="contact" class="section-padding bg-gray">

    <div class="container">

      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contact Us</h2>
        <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
      </div>
      <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="contact-block">
            <form  method="post"  onsubmit="popup()">  

           <!-- <form action="insert.php" id="contactForm"  method="post" method="post">-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <!--<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required
                      data-error="Please enter your name">-->
                      <input required type="text" name="name" value="" class="form-control" id="name" placeholder="Name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <!-- <input type="email" placeholder="Email" id="email" class="form-control" name="email" value="" required
                      data-error="Please enter your email">  -->
                      <input required type="email" name="email" value="" id="email" class="form-control"  placeholder="Email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <!--<input type="text" placeholder="Phone Number" id="msg_subject" class="form-control" name="phone" value="" required
                      data-error="Please enter your phone number">-->
                      <input required type="text" name="phone" value="" id="msg_subject" class="form-control" placeholder="Phone Number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message" rows="7"
                      data-error="Write your message" name="text" value=""  required></textarea>
                     <!-- <input required type="text" name="text" value="" class="form-control" id="message" placeholder="Your Message" >-->
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="submit-button text-left">
                   <!-- <button  type="submit" class="btn btn-common" id="form-submit" name="button">Save</button>-->
                   <button type="submit" name="button" class="btn btn-common" id="form-submit" >Save</button>

                   <script>
                  
                   function popup(){
                    swal("THANK YOU!", "Thank you for submitting your enquiry. Our concerned team will get in touch with you soon", "success");
                     }
                   </script>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-12">
          <div class="map">
            <object style="border:0; height: 280px; width: 100%;"
              data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer Section Start -->
  <footer id="footer" class="footer-area section-padding">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <div class="widget">
              <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
              <div class="textwidget">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod
                  purus suscipit quis.</p>
              </div>
              <div class="social-icon">
                <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <h3 class="footer-titel">Products</h3>
            <ul class="footer-link">
              <li><a href="#">Sports Cycle</a></li>
              <li><a href="#">Ladies Cycle</a></li>
              <li><a href="#">Joging cycle</a></li>
              <li><a href="#">Mountain Bicycles.</a></li>
              <li><a href="#">Boys Cycle</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <h3 class="footer-titel">Services</h3>
            <ul class="footer-link">
              <li><a href="#">one year warenty</a></li>
              <li><a href="#">three year replacement</a></li>
              <li><a href="#">home pickup</a></li>
              <li><a href="#">Free app access</a></li>
              <li><a href="#">usere frendly srevices</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <h3 class="footer-titel">Contact</h3>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> 105 Kengeri Bangalore - <br> Third Floor Bangalore, NY
                  10016</a>
              </li>
              <li>
                <a href="#"><i class="lni-phone-handset"></i> P: 6360456861</a>
              </li>
              <li>
                <a href="#"><i class="lni-envelope"></i> E: Jattesh13@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-content">
              <p>Copyright © 2020 <a rel="nofollow" href="https://github.com/Jattesh-Hittinahalli">Jattesh</a> All Right
                Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/scrolling-nav.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form-validator.min.js"></script>
  <script src="assets/js/contact-form-script.min.js"></script>

</body>

</html>