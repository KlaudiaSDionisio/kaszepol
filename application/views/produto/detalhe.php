
<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#"><?= $categoria->nome ?></a>
                    </li>
                    <li><a href="#"><?= $tipo_cat->nome ?></a>
                    </li>
                    <li><?= $produto->nome ?></li>
                </ul>

            </div>

            <div class="col-md-3">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->

                <!-- *** MENUS AND FILTERS END *** -->

                <div class="banner">
                    <a href="#">
                        <img src="/kaszepol/assets/img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <img src="/kaszepol/assets/img/produtos_prontos/<?= $produto->imagem ?>" alt="" class="img-responsive">
                        </div>

                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center"><?= $produto->nome ?></h1>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
                            </p>
                            <p class="price">R$ <?= $produto->preco ?></p>

                            <p class="text-center buttons">
                                <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</a>
                            </p>


                        </div>


                    </div>

                </div>


                <div class="box" id="details">
                    <p>
                    <h4>Detalhes</h4>
                    <p><?= $produto->descricao ?></p>
<!--                    <h4>Material & care</h4>-->
<!--                    <ul>-->
<!--                        <li>Polyester</li>-->
<!--                        <li>Machine wash</li>-->
<!--                    </ul>-->
<!--                    <h4>Size & Fit</h4>-->
<!--                    <ul>-->
<!--                        <li>Regular fit</li>-->
<!--                        <li>The model (height 5'8" and chest 33") is wearing a size S</li>-->
<!--                    </ul>-->

                    <blockquote>
                        <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                        </p>
                    </blockquote>

                    <hr>
                    <div class="social">
                        <h4>Show it to your friends</h4>
                        <p>
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                </div>

                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height">
                            <h3>Você também pode gostar desses produtos</h3>
                        </div>
                    </div>

                    <?php
                        foreach ($produtos as $p):
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="<?= asset_url("img/produtos_prontos/$p->imagem")?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="<?= asset_url("img/produtos_prontos/$p->imagem")?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="/kaszepol/assets/img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><?= $p->nome?></h3>
                                <p class="price">R$ <?= $p->preco?></p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>
                    <?php  endforeach;?>

                    </div>

                </div>


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
