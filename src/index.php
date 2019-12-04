<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Gerenciador JLS</title>

    <!-- Favicon -->
    <link rel="icon" href="images/logo.png"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./images/logo.png" alt="" width="80" height="80"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
							<div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
									<?php
									session_start();
									if(isset($_SESSION['cpfproprietario'])){
										
										echo "<li><a href=\" view/AreaProprietario.php\">Painel</a></li>";
										echo "<li><a href=\" controller/sairindex.php\">logut</a></li>";
									}
									else if(isset($_SESSION['cpfcliente'])){
										
										echo "<li><a href=\" view/AreaCliente.php\">Painel</a></li>";
										echo "<li><a href=\" controller/sairindex.php\">logut</a></li>";
									}
									else if(isset($_SESSION['cpffuncionario'])){
										
										echo "<li><a href=\" view/AreaFuncionario.php\">Painel</a></li>";
										echo "<li><a href=\" controller/sairindex.php\">logut</a></li>";
									}
									else{
										echo "<li><a href=\"view/AreaLogin.php\">Login</a></li>";
										echo "<li><a href=\"view/AreaCadastro.php\">Cadastrar</a></li>";
									}
									?>
									
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/16.jpg);" data-img-url="img/bg-img/16.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->

                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">JLS</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Bem Vindo ao JLS</h2>
                                    <!--<a href="view/AreaLogin.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Login</a>
                                    <a href="view/AreaCadastro.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Cadastrar</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/17.jpg);" data-img-url="img/bg-img/17.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">JLS</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Bem Vindo ao JLS</h2>
                                    <!-- <a href="view/AreaLogin.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Login</a>
                                    <a href="view/AreaCadastro.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Cadastrar</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/18.jpg);" data-img-url="img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">JLS</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Bem Vindo ao JLS</h2>
                                    <!--<a href="view/AreaLogin.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Login</a>
                                    <a href="view/AreaCadastro.php" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Cadastrar</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Projects Area Start -->
    <section class="roberto-project-area">
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(img/bg-img/5.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                        <p>Eu me concentro muito em ajudar a primeira vez ou um viajante inexperiente a sair preparado e confiante ...</p>
                    </div>
                    <a href="#" class="btn project-btn">Descubra agora <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/6.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                       <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                        <p>Foco em ajudar a primeira vez ou um viajante inexperiente a sair preparado e confiante ...</p>
                    </div>
                    <a href="#" class="btn project-btn">Descubra agora  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/7.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                        <p>Eu me concentro muito em ajudar a primeira vez ou um viajante inexperiente a sair preparado e confiante ...</p>
                    </div>
                    <a href="#" class="btn project-btn">Descubra agora <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/8.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                       <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                       <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                        <p>Eu me concentro muito em ajudar a primeira vez ou um viajante inexperiente a sair preparado e confiante ...</p>
                    </div>
                    <a href="#" class="btn project-btn">Descubra agora  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(img/bg-img/9.jpg);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entreterimento</h6>
                        <h5>Lazer</h5>
                        <p>Foco em ...</p>
                    </div>
                    <a href="#" class="btn project-btn">Descubra agora  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area End -->

    <!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>BLOG</h6>
                        <h2>Últimas Notícias e Eventos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/2.jpg" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">019</a>
                            <a href="#" class="post-catagory">Evento</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Venha Conhecer</a>
                        <p>Diaria</p>
                        <a href="index.php" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/3.jpg" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">2019</a>
                            <a href="#" class="post-catagory">Evento</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Relaxar</a>
                        <p>Venha Conhecer</p>
                        <a href="index.php" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/4.jpg" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">2019</a>
                            <a href="#" class="post-catagory">Evento</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Ferias</a>
                        <p>Venha Conhecer…</p>
                        <a href="index.php" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->



    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="./images/logo.png"  alt="" width="220" height="220"></a>



                            <h4>+35 12345-6789</h4>
                            <span>jbl@gmail.com</span>
                            <span>123 Lavras, Minas Gerais, Brazil</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">JLS</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Engenharia de Software</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 2019/2</span>
                            </div>


                        </div>
                    </div>


                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Email para Contato</h5>
                            <span>Envie seu email</span>

                            <!-- Newsletter Form -->
                            <form action="index.php" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
