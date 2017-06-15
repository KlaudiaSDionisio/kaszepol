<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Kaszepol - e-commerce perto de você
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Oferta de dia</a>  <a href="index.html#hot">Ganha desconto de 15% na compra de R$ 100!</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                </li>
                <li><a href="register.html">Registrar</a>
                </li>
                <li><a href="contact.html">Contato</a>
                </li>
                <li><a href="#">Mais visualizados</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">login</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-modal" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - ir para home</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="basket.html">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.html">Home</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Produtos<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Camisas</h5>
                                        <ul>
                                            <li><a href="category-full.html">Femininas</a>
                                            </li>
                                            <li><a href="category-full.html">Masculinas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Jaquetas & Blusas</h5>
                                        <ul>
                                            <li><a href="category.html">Femininas</a>
                                            </li>
                                            <li><a href="category.html">Masculinas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Canecas</h5>
                                        <ul>
                                            <li><a href="category.html">Canecas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Informática</h5>
                                        <ul>
                                            <li><a href="category.html">Mouse pad</a>
                                            </li>
                                            <li><a href="category.html">Pendrive</a>
                                            </li>
                                            <li><a href="category.html">Mouse</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>


                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">sobre <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Empresa & Produto</h5>
                                        <ul>
                                            <li><a href="text.html">Quem somos?</a>
                                            </li>
                                            <li><a href="text-right.html">Qualidade de produto</a>
                                            </li>
                                            <li><a href="faq.html">FAQ</a>
                                            </li>
                                            <li><a href="contact.html">Contato</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Usuário</h5>
                                        <ul>
                                            <li><a href="register.html">Registro / login</a>
                                            </li>
                                            <li><a href="customer-orders.html">História de compras</a>
                                            </li>
                                            <li><a href="customer-wishlist.html">Lista de desejo</a>
                                            </li>
                                            <li><a href="customer-account.html">Mudar senha</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Blog</h5>
                                        <ul>
                                            <li><a href="blog.html">Blog</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->



<div id="all">

    <div id="content">

        <div class="container" data-animate="fadeInUpBig">
            <div class="col-md-12">
                <div class="box slideshow">
                    <div id="get-inspired" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <img src="img/polska/polandflag.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="img/polska/gdansk2.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="img/polska/warszawa2.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="img/polska/malbork2.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
        <div id="advantages">

            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-heart"></i>
                            </div>

                            <h3><a href="#">Nosso cliente é importante</a></h3>
                            <p>We are known to provide best possible service ever</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-tags"></i>
                            </div>

                            <h3><a href="#">Melhor preço</a></h3>
                            <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-thumbs-up"></i>
                            </div>

                            <h3><a href="#">100% satisfação garantida</a></h3>
                            <p>Free returns on everything for 3 months.</p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->

        <!-- *** ADVANTAGES END *** -->

        <!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
        <div id="hot">

            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2><b>Melhores desta semana</b></h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="product-slider">
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/blusa-pl.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/blusa-pl.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Jaqueta polones feminina</a></h3>
                                <p class="price">R$143.00</p>
                            </div>
                            <!-- /.text -->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/caneca.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/caneca.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Caneca Polônia - Kaszebe</a></h3>
                                <p class="price"><del>R$75.00</del> R$50.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>


                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisa.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisa.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Camisa Aguía Polônia</a></h3>
                                <p class="price">R$80.00</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/mouse.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/mouse.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Mouse Polônia com fio</a></h3>
                                <p class="price"> R$70.00</p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/Thiellen/mousepad.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/Thiellen/mousepad.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Mousepad Kaszebe</a></h3>
                                <p class="price">R$60.00</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                </div>
                <!-- /.product-slider -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /#hot -->

        <!-- *** HOT END *** -->

        <!-- *** GET INSPIRED ***
_________________________________________________________ -->
        <!--<div class="container" data-animate="fadeInUpBig">-->
        <!--<div class="col-md-12">-->
        <!--<div class="box slideshow">-->
        <!--<h3>Get Inspired</h3>-->
        <!--<p class="lead">Get the inspiration from our world class designers</p>-->
        <!--<div id="get-inspired" class="owl-carousel owl-theme">-->
        <!--<div class="item">-->
        <!--<a href="#">-->
        <!--<img src="img/getinspired1.jpg" alt="Get inspired" class="img-responsive">-->
        <!--</a>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--<a href="#">-->
        <!--<img src="img/getinspired2.jpg" alt="Get inspired" class="img-responsive">-->
        <!--</a>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--<a href="#">-->
        <!--<img src="img/getinspired3.jpg" alt="Get inspired" class="img-responsive">-->
        <!--</a>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!-- *** GET INSPIRED END *** -->

        <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

        <div class="box text-center" data-animate="fadeInUp">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="text-uppercase">Do nosso blog</h3>

                    <p class="lead">Conheça nosso lindo país, Polônia e sua história! <a href="blog.html">Acesse nosso blog!</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="col-md-12" data-animate="fadeInUp">

                <div id="blog-homepage" class="row">
                    <div class="col-sm-6">
                        <div class="post">
                            <h4><a href="post.html">Bandeira e brasão de armas da Polônia</a></h4>
                            <p class="author-category">Pelo <a href="#">Admin</a>
                            </p>
                            <hr>
                            <p class="intro">As cores da bandeira da Polônia tem origem no escudo do país. O branco representa a águia branca,
                                enquanto o vermelho representa a cor de fundo do escudo. O escudo vermelho com a águia branca foi criado no século XIII, durante a dinastia Piast.</p>
                            <p class="read-more"><a href="post.html" class="btn btn-primary">Ler mais...</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="post">
                            <h4><a href="post2.html">Kaszebe</a></h4>
                            <p class="author-category">Pelo <a href="#">Admin</a>
                            </p>
                            <hr>
                            <p class="intro">A bandeira de Kaszebe tem a forma de duas tiras horizontais - a parte superior é de cor preta,
                                um inferior - amarelo (cor amarelo se refere a cor dourado do brasão de armas).<br></p>
                            <p class="read-more"><br><a href="post2.html" class="btn btn-primary">Ler mais...</a>
                            </p>
                        </div>

                    </div>

                </div>
                <!-- /#blog-homepage -->
            </div>
        </div>
        <!-- /.container -->

        <!-- *** BLOG HOMEPAGE END *** -->


    </div>
    <!-- /#content -->

    <!-- *** FOOTER ***
_________________________________________________________ -->
    <div id="footer" data-animate="fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Páginas</h4>

                    <ul>
                        <li><a href="text.html">Quem somos?</a>
                        </li>
                        <li><a href="text.html">Terms and conditions</a>
                        </li>
                        <li><a href="faq.html">FAQ</a>
                        </li>
                        <li><a href="contact.html">Contato</a>
                        </li>
                    </ul>

                    <hr>

                    <!--<h4>User section</h4>-->

                    <!--<ul>-->
                    <!--<li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>-->
                    <!--</li>-->
                    <!--<li><a href="register.html">Regiter</a>-->
                    <!--</li>-->
                    <!--</ul>-->

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <!--<h4>Top categories</h4>-->

                    <!--<h5>Men</h5>-->

                    <!--<ul>-->
                    <!--<li><a href="category.html">T-shirts</a>-->
                    <!--</li>-->
                    <!--<li><a href="category.html">Shirts</a>-->
                    <!--</li>-->
                    <!--<li><a href="category.html">Accessories</a>-->
                    <!--</li>-->
                    <!--</ul>-->

                    <!--<h5>Ladies</h5>-->
                    <!--<ul>-->
                    <!--<li><a href="category.html">T-shirts</a>-->
                    <!--</li>-->
                    <!--<li><a href="category.html">Skirts</a>-->
                    <!--</li>-->
                    <!--<li><a href="category.html">Pants</a>-->
                    <!--</li>-->
                    <!--<li><a href="category.html">Accessories</a>-->
                    <!--</li>-->
                    <!--</ul>-->

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Onde estamos: </h4>

                    <p><strong>Kaszepol</strong>
                        <br>+55 43 9 9865-8720
                        <br>Bandeirantes - Paraná
                        <br>Brasil
                        <br>
                    </p>

                    <a href="contact.html">Contato</a>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Newsletter</h4>

                    <p class="text-muted">Inscreve-se para receber todas nossas novidades e promoções!</p>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Inscrever!</button>

			</span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr>

                    <h4>Acha o Kaszepol nos redes sociais!</h4>

                    <p class="social">
                        <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                    </p>


                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->




    <!-- *** COPYRIGHT ***
_________________________________________________________ -->
    <div id="copyright">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">© 2017 Todos os direitos reservados. Klaudia Serwa Dionisio, Yan Ribeiro, Thiellen Oliveira</p>

            </div>
            <div class="col-md-6">
                <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                    <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                </p>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->





<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>


</body>

</html>