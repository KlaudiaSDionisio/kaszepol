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
                            <a href="<?= site_url("produto/detalhe/$p->id") ?>">
                                <img src="<?= asset_url("img/produtos_prontos/$p->imagem") ?>" alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="back">
                            <a href="<?= site_url("produto/detalhe/$p->id") ?>">
                                <img src="<?= asset_url("img/produtos_prontos/$p->imagem") ?>" alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <a href="<?= site_url("produto/detalhe/$p->id") ?>" class="invisible">
                    <img src="<?= asset_url("img/produtos_prontos/$p->imagem") ?>" alt=""
                         class="img-responsive">
                </a>


                <div class="text">
                    <h3><a href="<?= site_url("produto/detalhe/$p->id") ?>"><?= $p->nome ?></a></h3>

                    <?php if (!is_null($p->preco_promocao) && $p->preco_promocao > 0): ?>
                        <p class="price">
                            <del>R$<?= $p->preco ?></del>
                            R$<?= $p->preco_promocao ?></p>
                    <?php else: ?>
                        <p class="price">R$<?= $p->preco ?></p>
                    <?php endif ?>
                    <p class="buttons">
                        <a href="<?= site_url("produto/carrinho_adicionar/$p->id")?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Carrinho</a>
                    </p>
                </div>
                <!-- /.text -->

                <?php if (!is_null($p->preco_promocao) && $p->preco_promocao > 0): ?>
                    <div class="ribbon sale">
                        <div class="theribbon">SALE</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                <?php endif; ?>

                <?php if ($p->novo): ?>
                    <div class="ribbon new">
                        <div class="theribbon">NOVO</div>
                        <div class="ribbon-background"></div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /.product -->
        </div>
    <?php endforeach; ?>

</div>