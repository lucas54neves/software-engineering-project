<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Remover Imóvel</title>

    <!-- Favicon -->
    <link rel="icon" href="../images/logo.png"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

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
                        <a class="nav-brand" href="../index.php"><img src="../images/logo.png" alt="" width="80" height="80"></a>

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
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="../index.php">Home</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/17.jpg);'>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">Remover Imóveis</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once '../persistence/Connection.php';
    include_once '../model/Imovel.php';
    include_once '../persistence/ImovelDAO.php';

    $conexao = new Connection();
    $conexao = $conexao->getConnection();

    $imovelDAO = new ImovelDAO();
    $resultado = $imovelDAO->consultarTodos($conexao);
	
	if ($resultado->num_rows > 0) {
		while ($linha = $resultado->fetch_assoc()) {
			echo "
					<div class='roberto-contact-form-area section-padding-100'>
						<div class='container'>
							<div class='row'>
								<div class='col-12'>
									<!-- Section Heading -->
									<div class='section-heading text-center wow fadeInUp' data-wow-delay='100ms'>
									</div>
									<div class='section-heading text-center wow fadeInUp' data-wow-delay='100ms'>
										
										<h2>Imóvel</h2>
									</div>
								</div>
							</div>

							<div class='row'>
								<div class='col-12'>
									
									<div class='roberto-contact-form'>
										 <form action='RemoverImovelDefinitivo.php' method='post'>
											<div class='row'>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													ID: <input type='text' class='form-control mb-30' value = '".$linha['id']."'  name='idImovel' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Logradouro<input type='text' class='form-control mb-30' value = '".$linha['logradouro']."' name='logradouro' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Número:<input type='text' class='form-control mb-30' value = '".$linha['numero']."' name='numero' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Bairro:<input type='text' class='form-control mb-30' value = '".$linha['bairro']."' name='bairro' readonly='true'><br>
												</div>
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													Aluguel:<input type='text' class='form-control mb-30' value = '".$linha['aluguel']."' name='aluguel' readonly='true'><br>
												</div>
											  
												<div class='col-12 col-lg-6 wow fadeInUp' data-wow-delay='100ms'>
													CPF do Proprietário:<input type='text' class='form-control mb-30' value = '".$linha['cpfProprietario']."' name='cpfProprietario' readonly='true'><br>
												</div>

												<button type='submit' style='margin: 0 15px;' class='btn roberto-btn mt-15'>Remover</button>
												
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>";
		}
		echo "<a href='../view/AreaProprietario.php' style='margin: 0 125px;' class='btn roberto-btn mt-15'>Voltar</a><br>";
	} else {
        echo "<script>alert('Não tem imóvel desse bairro cadastrado')</script>";
		}
?>
	<br><br>
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="../images/logo.png"  alt="" width="220" height="220"></a>



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
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

</body>

</html>
