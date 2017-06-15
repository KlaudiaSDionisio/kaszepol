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
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Oferta de dia</a>  <a href="#">Ganha desconto de 15% na compra de R$ 100!</a>
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
                                            <li><a href="category.html">Femininas</a>
                                            </li>
                                            <li><a href="category.html">Masculinas</a>
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
        <div class="container">

            <div class="col-sm-12">

                <ul class="breadcrumb">

                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="blog.html">Blog</a>
                    </li>
                    <li>Blog post</li>
                </ul>
            </div>

            <div class="col-sm-9" id="blog-post">


                <div class="box">

                    <h1>Hístoria Kaszebe</h1>
                    <p class="author-date">Pelo <a href="#">Admin</a> | 15 de junho 2017</p>
                    <p class="lead">A bandeira de Kaszebe tem a forma de duas tiras horizontais - a parte superior é de cor preta,
                        um inferior - amarelo (cor amarelo se refere a cor dourado do brasão de armas).</p>

                    <div id="post-content">
                        <p>
                        <p>
                            <img src="img/polska/flaga.png" class="img-responsive" alt="Example blog post alt">
                        </p>

                        <h2>Emblema de Kaszebe</h2>
                        <blockquote>
                            <p>Comumente aceitou que o emblema é um grifo Kashubian preto no campo dourado. Pode ser encontrada em muitos brasões dos governos locais em todo Pomerânia.
                                Este animal mítico é apresentado como uma criatura com a cabeça, pescoço, garras e asas de águia e torso, patas e cauda de um leão. Sua primeira apresentação vêm de antiga Mesopotâmia e na Índia. Griffin foi um âmbar guarda.
                                Na mitologia grega guardava os tesouros subterrâneos de Apollo em Roma era o guardião do deus do mar Netuno. No quinto século antes de Cristo, sua imagem apareceu nos celtas do Danúbio. Griffin era um símbolo de astúcia, agilidade e força.
                                Desde a criação do século XIII ocorre nos brasões dos príncipes de West Pomerania. Eles participaram das Cruzadas à Terra Santa, e talvez desta maneira se tornou um símbolo de seu caráter ancestral. Griffin vem do nome da dinastia Griffin, governando em West Pomerania ao século XVII.
                                Griffin na Pomerânia pelo príncipe apareceu Tczew`s Samborowi II, irmão Świętopełk Grande. Tentando libertar-se da tutela de seu irmão mais velho, Sambor rompeu com as tradições da família e heráldico da família da esposa, o Mecklenburg Princesa Matilda,
                                apenas emprestado um grifo. Griffin emblema da Pomerânia Oriental foi somente após a Paz de Thorn (1466). Era vermelha, sem uma coroa, um campo de prata. Em existente no voivodato Pomorskie interwar atrás Gryfów acabou de adicionar uma coroa de ouro. Hoje ele herdou Kujawsko-Pomorskie, sucessor formal para a região do pré-guerra com sua capital em Torun. O vermelho é considerado uma crista grifo para Kociewie.
                            </p>
                        </blockquote>

                        <p>
                            <img src="img/polska/gryf4.jpg" class="img-responsive" alt="Example blog post alt">
                        </p>
                        <blockquote>
                            <p>griffin preto no campo dourado apareceu pela primeira vez no século XV no brasão de armas dos príncipes de West Pomerania-Wolgast. Desde a unificação da Pomerânia Ocidental por Boguslaw X (1454-1523)
                                em um grande brasão dziesięciopolowym grifo Pomeranian preto no campo dourado apareceu como um sinal do Ducado de Kashubian.
                                No início do século XX aceitação promotores do século como um grifo casaco preto Kashubs de Pommerellen młodokaszubi eram liderados por Alexander Majkowskim.
                                Uma enorme papel na popularização do símbolo reproduzido adotá-lo em 1919. Como a marca de 66 Kashubian regimento de infantaria. Jozef Pilsudski.
                                Atualmente fretboard em ouro negro é o emblema da província Pomerânia. Enquanto o vermelho está entre Tczewa revestimento de braços, o Zachodniopom, Kujawsko-Pomorskiego (com Kuyavia águia) e estado alemão de Mecklenburg-.
                                bandeira Kashubian tem odherbowe cores - faixa preta na parte superior, na parte inferior do ouro. Muitas vezes usado para flag promocional ou amarelo com uma localização central em um pescoço preto.
                            </p>
                        </blockquote>
                    </div>
                    <!-- /#post-content -->

                    <div id="comments" data-animate="fadeInUp">
                        <h4>2 comentários</h4>


                        <div class="row comment">
                            <div class="col-sm-3 col-md-2 text-center-xs">
                                <p>
                                    <img src="img/blog-avatar2.jpg" class="img-responsive img-circle" alt="">
                                </p>
                            </div>
                            <div class="col-sm-9 col-md-10">
                                <h5>Lilian</h5>
                                <p class="posted"><i class="fa fa-clock-o"></i> 14/06/2017 21:45h</p>
                                <p>Muito bom! Estou com mais vontade de realizar as compras!</p>
                                <p class="reply"><a href="#"><i class="fa fa-reply"></i> Responder</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.comment -->


                        <div class="row comment last">

                            <div class="col-sm-3 col-md-2 text-center-xs">
                                <p>
                                    <img src="img/blog-avatar.jpg" class="img-responsive img-circle" alt="">
                                </p>
                            </div>

                            <div class="col-sm-9 col-md-10">
                                <h5>Vanessa</h5>
                                <p class="posted"><i class="fa fa-clock-o"></i> 18/06/2017 02:15h</p>
                                <p>As histórias da Polônia são muito interessadas! </p>
                                <p class="reply"><a href="#"><i class="fa fa-reply"></i> Responder</a>
                                </p>
                            </div>

                        </div>
                        <!-- /.comment -->

                    </div>
                    <!-- /#comments -->

                    <div id="comment-form" data-animate="fadeInUp">

                        <h4>Comentar</h4>

                        <form>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nome <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-mail <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="comment">Comentário <span class="required">*</span>
                                        </label>
                                        <textarea class="form-control" id="comment" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Comentar</button>
                                </div>
                            </div>


                        </form>

                    </div>
                    <!-- /#comment-form -->

                </div>
                <!-- /.box -->
            </div>
            <!-- /#blog-post -->

            <div class="col-md-3">
                <!-- *** BLOG MENU ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Blog</h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="post.html">Polônia</a>
                            </li>

                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** BLOG MENU END *** -->

                <div class="banner">
                    <a href="#">
                        <img src="img/polska/gryf4.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>


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
                    <h4>Pages</h4>

                    <ul>
                        <li><a href="text.html">About us</a>
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