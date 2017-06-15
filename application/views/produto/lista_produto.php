<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="/kaszepol/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/kaszepol/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/kaszepol/assets/css/animate.min.css" rel="stylesheet">
    <link href="/kaszepol/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/kaszepol/assets/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="/kaszepol/assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="/kaszepol/assets/css/custom.css" rel="stylesheet">

    <script src="/kaszepol/assets/js/respond.min.js"></script>

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
                <img src="/kaszepol/assets/img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="/kaszepol/assets/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - ir para home</span>
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
                                            <li><a href="category-full.html">Femininas</a>
                                            </li>
                                            <li><a href="category-full.html">Masculinas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Canecas</h5>
                                        <ul>
                                            <li><a href="category-full.html">Canecas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Informática</h5>
                                        <ul>
                                            <li><a href="category-full.html">Mouse pad</a>
                                            </li>
                                            <li><a href="category-full.html">Pendrive</a>
                                            </li>
                                            <li><a href="category-full.html">Mouse</a>
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

<!-- *** NAVBAR END *** -->

<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Camisas</li>
                    <li>Femininas</li>
                </ul>

                <div class="box">
                    <h1>Camisas Femininas</h1>
                    <p></p>
                </div>

                <!--<div class="box info-bar">-->
                <!--<div class="row">-->
                <!--<div class="col-sm-12 col-md-4 products-showing">-->
                <!--Mostrando <strong>12</strong> de <strong>25</strong> produtos-->
                <!--</div>-->

                <!--<div class="col-sm-12 col-md-8  products-number-sort">-->
                <!--<div class="row">-->
                <!--<form class="form-inline">-->
                <!--<div class="col-md-6 col-sm-6">-->
                <!--<div class="products-number">-->
                <!--<strong>Mostrar</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">Todos</a> produtos-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-6 col-sm-6">-->
                <!--<div class="products-sort-by">-->
                <!--<strong></strong>-->
                <!--<select name="sort-by" class="form-control">-->
                <!--<option>Price</option>-->
                <!--<option>Name</option>-->
                <!--<option>Sales first</option>-->
                <!--</select>-->
                <!--</div>-->
                <!--</div>-->
                <!--</form>-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->

                <div class="row products">

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisafem.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisafem.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/produtos_prontos/camisafem.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Camisa feminina POLSKA</a></h3>
                                <p class="price">R$99.00</p>
                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">Detalhes</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Carrinho</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisa2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisa2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/produtos_prontos/camisa2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Camisa Poland - Warsaw</a></h3>
                                <p class="price"><del>R$80.00</del> R$71.00</p>
                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">Detalhes</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Carrinho</a>
                                </p>
                            </div>
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
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

                    <div class="col-md-3 col-sm-4">
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
                                <img src="img/produtos_prontos/camisa.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Camisa feminina preta</a></h3>
                                <p class="price">R$65.00</p>
                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">Detalhes</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Carrinho</a>
                                </p>

                            </div>
                            <!-- /.ribbon -->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisafem2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/produtos_prontos/camisafem2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/produtos_prontos/camisafem2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="detail.html">Camisa Feminina Kaszebe</a></h3>
                                <p class="price">R$59.00</p>
                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">Detalhes</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Carrinho</a>
                                </p>

                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                </div>
                <!-- /.products -->

                <!--<div class="pages">-->

                <!--<p class="loadMore">-->
                <!--<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Ver mais</a>-->
                <!--</p>-->

                <!--<ul class="pagination">-->
                <!--<li><a href="#">&laquo;</a>-->
                <!--</li>-->
                <!--<li class="active"><a href="#">1</a>-->
                <!--</li>-->
                <!--<li><a href="#">2</a>-->
                <!--</li>-->
                <!--<li><a href="#">3</a>-->
                <!--</li>-->
                <!--<li><a href="#">4</a>-->
                <!--</li>-->
                <!--<li><a href="#">5</a>-->
                <!--</li>-->
                <!--<li><a href="#">&raquo;</a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>-->


            </div>
            <!-- /.col-md-9 -->

        </div>
        <!-- /.container -->
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





    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="/kaszepol/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/kaszepol/assets/js/bootstrap.min.js"></script>
    <script src="/kaszepol/assets/js/jquery.cookie.js"></script>
    <script src="/kaszepol/assets/js/waypoints.min.js"></script>
    <script src="/kaszepol/assets/js/modernizr.js"></script>
    <script src="/kaszepol/assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="/kaszepol/assets/js/owl.carousel.min.js"></script>
    <script src="/kaszepol/assets/js/front.js"></script>






</body>

</html>