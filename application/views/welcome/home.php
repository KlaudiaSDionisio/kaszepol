<div id="all">

    <div id="content">

        <div class="container" data-animate="fadeInUpBig">
            <div class="col-md-12">
                <div class="box slideshow">
                    <div id="get-inspired" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <img src="<?= asset_url('img/polska/polandflag.jpg')?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?= asset_url('img/polska/gdansk2.jpg')?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?= asset_url('img/polska/warszawa2.jpg')?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="<?= asset_url('img/polska/malbork2.jpg')?>" alt="" class="img-responsive">
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
                            <p>Nós sabemos o valor dos nossos clientes! Por isso nosso frete é gratis!</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-tags"></i>
                            </div>

                            <h3><a href="#">Melhor preço</a></h3>
                            <p>Nossos produtos têm os melhorres preços e várias promoções!</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-thumbs-up"></i>
                            </div>

                            <h3><a href="#">satisfação 100% garantida</a></h3>
                            <p>Os produtos feitos com carinho e com os melhores tecidos!</p>
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
                    <?php  foreach ($melhores_semana as $p):?>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="<?= site_url("produto/detalhe/$p->id")?>">
                                            <img src="<?= asset_url("img/produtos_prontos/$p->imagem")?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="<?= site_url("produto/detalhe/$p->id")?>">
                                            <img src="<?= asset_url("img/produtos_prontos/$p->imagem")?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= site_url("produto/detalhe/$p->id")?>" class="invisible">
                                <img src="<?= asset_url("img/produtos_prontos/$p->imagem")?>" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="<?= site_url("produto/detalhe/$p->id")?>"><?= $p->nome ?></a></h3>

                                <?php if (!is_null($p->preco_promocao) && $p->preco_promocao > 0): ?>
                                    <p class="price"><del>R$<?= $p->preco ?></del> R$<?= $p->preco_promocao ?></p>
                                <?php else: ?>
                                    <p class="price">R$<?= $p->preco ?></p>
                                <?php endif ?>
                            </div>
                            <!-- /.text -->

                            <?php if (!is_null($p->preco_promocao) && $p->preco_promocao > 0): ?>
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            <?php endif; ?>

                            <?php if($p->novo):?>
                            <div class="ribbon new">
                                <div class="theribbon">NOVO</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <?php endif;?>
                        </div>
                        <!-- /.product -->
                    </div>
                    <?php endforeach;?>

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

                    <p class="lead">Conheça nosso lindo país, Polônia e sua história! <a href="<?= site_url('/blog')?>">Acesse nosso blog!</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="col-md-12" data-animate="fadeInUp">

                <div id="blog-homepage" class="row">
                    <div class="col-sm-6">
                        <div class="post">
                            <h4><a href="<?= site_url('/blog/post/1')?>">Bandeira e brasão de armas da Polônia</a></h4>
                            <p class="author-category">Por <a>Admin</a>
                            </p>
                            <hr>
                            <p class="intro">As cores da bandeira da Polônia tem origem no escudo do país. O branco representa a águia branca,
                                enquanto o vermelho representa a cor de fundo do escudo. O escudo vermelho com a águia branca foi criado no século XIII, durante a dinastia Piast.</p>
                            <p class="read-more"><a href="<?= site_url('/blog/post/1')?>" class="btn btn-primary">Ler mais...</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="post">
                            <h4><a href="<?= site_url('/blog/post/2')?>">Kaszebe</a></h4>
                            <p class="author-category">Por <a>Admin</a>
                            </p>
                            <hr>
                            <p class="intro">A bandeira de Kaszebe tem a forma de duas tiras horizontais - a parte superior é de cor preta,
                                um inferior - amarelo (cor amarelo se refere a cor dourado do brasão de armas).<br></p>
                            <p class="read-more"><br><a href="<?= site_url('/blog/post/2')?>" class="btn btn-primary">Ler mais...</a>
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