@extends('layouts.default')
@section('content')

<div class="header-content">
            <div class="header-content-inner" style="margin-bottom:0">
                <h1 id="homeHeading">I M S</h1>
                <h4 style="font-size: 30px">Internship Management System</h4>
                <hr>
                <p>GMF Internship Program is the program from Corporate Sosial Responsibility (CSR) of PT. GMF AeroAsia in the field of education by providing facillities to the students to further develop the academic skills have learned at schol or college in order to gain direct experience in the working world as well as being a great family with GMF AeroAsia.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="row">
                     <a href="#signin" style="margin:0 2% 0 0; padding-right: 6em; padding-left: 6em" data-toggle="modal" data-target="#myModal" style="width:auto;" class="btn btn-primary btn-xl page-scroll login"><center>Sign In</center></a>
                      <a href="signup.php" style="margin-top:0%; padding-right: 6em; padding-left:6em" class="btn btn-primary btn-xl page-scroll login">Sign Up</a>
                </div>
                <!-- <div class="row">
                    <a href="#about" style="margin-top:5%;" class="btn btn-primary btn-xl page-scroll">More Info</a>
                </div> -->
            </div>
            <!-- <div class="row" style="margin-top:10em">
                     <a href="#signin" class="btn btn-primary btn-xl page-scroll">Sign In</a>
                      <a href="#signout" class="btn btn-primary btn-xl page-scroll">Sign Up</a>
            </div> -->
        </div>

<section class="bg-primary" id="about" style="background-image:url('img/1.jpg');background-repeat: no-repeat;background-attachment: fixed;" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">It's a Pleasure to Work with You!</h2>
                    <hr class="light">
                    <p class="text-faded">We are open to everybody who's willing to work hard and having extensive maintenance expertise and skill. Check our job vacancy below for career and internship information.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Login -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" >
    
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:  #003d6e">
                  <button type="button" style="color:#fff !important" class="close" data-dismiss="modal">&times;</button>
                  <center><img src="img/logo.png"></center>
                  <!-- <h4 class="modal-title">Sign In</h4> -->
                </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"  class="form-control" />
            </div>
            <input type="checkbox"> Remember Me
            <div class="akun" style="float:right">
                <h7>Don't have an account?</h7><a href=signup.php> Sign Up</a>
            </div>
            <!-- <div class="text-right">
                <button class="btn btn-primary" type="submit">Sign In</button>
              </div> -->
            </div>
            <div class="modal-footer">
                <center><button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom:2%">Sign In</button></center>
                <center><a  href="#lupapassword">Forgot Password?</a></center>
            </div>
      
        </div>
    </div>