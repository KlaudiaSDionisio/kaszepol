<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="<?= site_url()?>">Home</a>
                    </li>
                    <li><?= $categoria->nome?></li>
                    <li><?= $tipo_cat->nome?></li>
                </ul>

<!--                <div class="box">-->
<!--                    <h1>Camisas Femininas</h1>-->
<!--                    <p></p>-->
<!--                </div>-->

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
                    <?php  foreach ($produtos as $p):?>
                        <div class="col-md-3 col-sm-4">
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
