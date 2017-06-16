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
    <link href="<?= asset_url('css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('css/owl.carousel.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('css/owl.theme.css') ?>" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?= asset_url('css/style.default.css')?>" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?= asset_url('css/custom.css')?>" rel="stylesheet">

    <script src="<?= asset_url('js/respond.min.js')?>"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="<?= site_url('produto/detalhe/19')?>" class="btn btn-success btn-sm" data-animate-hover="shake">Oferta do dia</a>  <a>Ganhe desconto de 15% nas compras acima de R$ 300.00!</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
<!--                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>-->
<!--                </li>-->
<!--                <li><a href="register.html">Registrar</a>-->
                </li>
                <li><a href="<?= site_url('#hot')?>">Melhores da semana</a>
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
                    <form action="<?=site_url() ?>" method="post">
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

                    <p class="text-center text-muted">Não registrado?</p>
                    <p class="text-center text-muted"><a href="<?=site_url() ?>"><strong>Registrar agora!</strong></a></p>

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

            <a class="navbar-brand home" href="<?=site_url()?>" data-animate-hover="bounce">
                <img src="<?= asset_url('img/polska/logo.png')?>" alt="Kaszepol logo" class="hidden-xs">
                <img src="<?= asset_url('img/polska/logo.png')?>" alt="Kaszepol logo" class="visible-xs"><span class="sr-only">Kaszepol - ir para home</span>
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
                <a class="btn btn-default navbar-toggle" href="<?= site_url('produto/carrinho')?>">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"><?= isset($_SESSION['carrinho'])?(count($_SESSION['carrinho'])):0 ?> produto(s) no carrinho</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="<?= site_url('')?>">Home</a>
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
                                            <li><a href="<?= site_url('tipo/index/1')?>">Femininas</a>
                                            </li>
                                            <li><a href="<?= site_url('tipo/index/2')?>">Masculinas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Jaquetas & Blusas</h5>
                                        <ul>
                                            <li><a href="<?= site_url('tipo/index/3')?>">Femininas</a>
                                            </li>
                                            <li><a href="<?= site_url('tipo/index/4')?>">Masculinas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Canecas</h5>
                                        <ul>
                                            <li><a href="<?= site_url('tipo/index/5')?>">Canecas</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Informática</h5>
                                        <ul>
                                            <li><a href="<?= site_url('tipo/index/6')?>">Mouse pad</a>
                                            </li>
                                            <li><a href="<?= site_url('tipo/index/7')?>">Pendrive</a>
                                            </li>
                                            <li><a href="<?= site_url('tipo/index/8')?>">Mouse</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
                <li class=""><a href="<?= site_url('/blog')?>">Blog</a>
                </li>


<!--                <li class="dropdown yamm-fw">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">sobre <b class="caret"></b></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li>-->
<!--                            <div class="yamm-content">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-sm-3">-->
<!--                                        <h5>Empresa & Produto</h5>-->
<!--                                        <ul>-->
<!--                                            <li><a href="text.html">Quem somos?</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="text-right.html">Qualidade de produto</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="faq.html">FAQ</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="contact.html">Contato</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-3">-->
<!--                                        <h5>Usuário</h5>-->
<!--                                        <ul>-->
<!--                                            <li><a href="register.html">Registro / login</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="customer-orders.html">História de compras</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="customer-wishlist.html">Lista de desejo</a>-->
<!--                                            </li>-->
<!--                                            <li><a href="customer-account.html">Mudar senha</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-3">-->
<!--                                        <h5>Blog</h5>-->
<!--                                        <ul>-->
<!--                                            <li><a href="blog.html">Blog</a>-->
<!--                                            </li>-->
<!---->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- /.yamm-content -->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="<?= site_url('produto/carrinho')?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?= isset($_SESSION['carrinho'])?(count($_SESSION['carrinho'])):0 ?> produto(s) no carrinho</span></a>
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
